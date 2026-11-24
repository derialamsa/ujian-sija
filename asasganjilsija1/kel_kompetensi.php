<?php
$conn = mysqli_connect("localhost", "root", "", "ujiann_deri");
$databaca = "select * from kategori_kelompok";
$datares = mysqli_query($conn, $databaca);

while ($datarry = mysqli_fetch_array($datares)) {
    echo "<a href='tampil_nama.php?kode=" . $datarry[1] . "'>" . $datarry[2] . "</a> <br>";
}
?>