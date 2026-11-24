<?php
$conn = mysqli_connect("localhost", "root", "", "ujiann_deri");
$databaca = "SELECT * FROM nama_kelas";
$datares = mysqli_query($conn, $databaca);

echo "<h3>Tampil_modify</h3>";
echo "<table border='1' align='center' cellpadding='6' cellspacing='0'>
    <tr>
        <th>no</th>
        <th>kode</th>
        <th>kompetensi</th>
        <th>nis</th>
        <th>nama</th>
        <th>tahun_angkatan</th>
        <th>file_foto</th>
        <th>Modify</th>
    </tr>";

while ($datarry = mysqli_fetch_array($datares)) {
    echo "<tr>
            <td>" . ($datarry[0] ?? '') . "</td>
            <td>" . ($datarry[1] ?? '') . "</td>
            <td>" . ($datarry[2] ?? '') . "</td>
            <td>" . ($datarry[3] ?? '') . "</td>
            <td>" . ($datarry[4] ?? '') . "</td>
            <td>" . ($datarry[5] ?? '') . "</td>
            <td>" . ($datarry[6] ?? '') . "</td>
            <td>
                <a href='delete.php?no=" . ($datarry[0] ?? '') . "'>delete</a>
                <a href='edit.php?no=" . ($datarry[0] ?? '') . "'>edit</a>
            </td>
          </tr>";
}

echo "</table>";
mysqli_close($conn);
?>