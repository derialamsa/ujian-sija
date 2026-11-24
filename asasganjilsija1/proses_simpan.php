<?php
$conn = mysqli_connect("localhost", "root", "", "ujiann_deri");

function ambilKode($conn, $kompetensi) {
    $res = mysqli_query($conn, "SELECT kode FROM nama_kelas WHERE kompetensi = '$kompetensi' LIMIT 1");
    if ($res && mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_array($res);
        return $row[0];
    }
    return 'k01';
}

$kompetensi     = $_POST['komptensi'] ?? ($_POST['kompetensi'] ?? '');
$nis            = $_POST['nis'] ?? '';
$nama           = $_POST['nama'] ?? '';
$tahun_angkatan = $_POST['tahun_angkatan'] ?? '';
$file_foto      = $_FILES['file_foto']['name'] ?? '';

// validation
if ($kompetensi == "" || $nis == "" || $nama == "" || $tahun_angkatan == "") {
    die("Isi data terlebih dahulu! <a href='tambah_database.php'>Kembali</a>");
}

if (!is_numeric($nis) || !is_numeric($tahun_angkatan)) {
    die("NIS dan tahun angkatan harus angka! <a href='tambah_database.php'>Kembali</a>");
}

if ($file_foto != "") {
    if (!is_dir("uploads")) {
        mkdir("uploads");
    }
    move_uploaded_file($_FILES['file_foto']['tmp_name'], "uploads/" . $file_foto);
}

$kode = ambilKode($conn, $kompetensi);

// insert query
$sql = "INSERT INTO nama_kelas (kode, kompetensi, nis, nama, tahun_angkatan, file_foto)
        VALUES ('$kode', '$kompetensi', '$nis', '$nama', '$tahun_angkatan', '$file_foto')";

if (mysqli_query($conn, $sql)) {
    echo "Berhasil disimpan! <a href='tampil_modi_database.php'>Lihat data</a>";
} else {
    echo "Gagal: " . mysqli_error($conn);
}
?>