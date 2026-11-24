<?php
$conn = mysqli_connect("localhost", "root", "", "ujiann_deri");
$kompetensi_list = mysqli_query($conn, "SELECT * FROM nama_kelas");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Database</title>
</head>
<body>
    <div style="border: 2px solid black; padding: 25px; width: 550px;">
        <form action="proses_simpan.php" method="POST" enctype="multipart/form-data">
            <table cellpadding="8" cellspacing="0" width="100%">
                <tr>
                    <td width="38%">Masukan kompetensi</td>
                    <td>
                        <select name="komptensi" required>
                            <?php while ($k = mysqli_fetch_array($kompetensi_list)) : ?>
                                <option value="<?php echo $k[2]; ?>"><?php echo $k[2]; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Masukan Nis</td>
                    <td><input type="text" name="nis" required></td>
                </tr>
                <tr>
                    <td>Masukan Nama</td>
                    <td><input type="text" name="nama" size="35" required></td>
                </tr>
                <tr>
                    <td>Masukan Tahun angkatan</td>
                    <td><input type="text" name="tahun_angkatan" required></td>
                </tr>
                <tr>
                    <td>Upload File foto</td>
                    <td><input type="file" name="file_foto" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="simpan" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>