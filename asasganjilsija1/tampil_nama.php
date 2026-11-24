<?php
$conn = mysqli_connect("localhost", "root", "", "ujiann_deri");

$databaca = "SELECT * FROM nama_kelas";
if (isset($_GET['kode']) && $_GET['kode'] != "") {
    $kode = $_GET['kode'];
    $databaca = "SELECT * FROM nama_kelas WHERE kode = '$kode'";
}

$datares = mysqli_query($conn, $databaca);

echo "
<table border='1' align='center'>
    <tr>
        <th> no </th>
        <th> kode </th>
        <th> kompetensi </th> 
        <th> nis </th> 
        <th> nama </th> 
        <th> tahun_angkatan </th>
        <th> file_foto </th>
    </tr> ";

while ($datarry = mysqli_fetch_array($datares)) {
    echo "<tr>
                <td> " . ($datarry[0] ?? '') . " </td>
                <td> " . ($datarry[1] ?? '') . " </td>
                <td> " . ($datarry[2] ?? '') . " </td>
                <td> " . ($datarry[3] ?? '') . " </td>
                <td> " . ($datarry[4] ?? '') . " </td>
                <td> " . ($datarry[5] ?? '') . " </td>
                <td> " . ($datarry[6] ?? '') . " </td>
          </tr> ";
}
echo "</table>";
?>