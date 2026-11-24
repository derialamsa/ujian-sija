<?php
$conn = mysqli_connect("localhost", "root", "", "ujiann_deri");

if (isset($_GET['no']) && $_GET['no'] != "") {
    $no = $_GET['no'];
    $hapus = "DELETE FROM nama_kelas WHERE no = '$no'";

    if (mysqli_query($conn, $hapus)) {
        echo "Data dengan no " . $no . " berhasil dihapus!<br>";
    } else {
        echo "Gagal menghapus data: " . mysqli_error($conn) . "<br>";
    }
} else {
    echo "Data tidak ditemukan.<br>";
}

echo "<a href='tampil_modi_database.php'>Kembali ke Tampil Modify</a>";
mysqli_close($conn);
?>