<?php
include "Database.php";
include "Classhandle.php";

$data = new DatabaseConnection();
$classhandle = new Classhandle($data);

if (isset($_POST['submit'])) {
    $classhandle->addData($_POST['nama'], $_POST['ttl'], $_POST['usia'], $_POST['jk'], $_POST['asal']);
}

if (isset($_POST['hapus'])) {
    $classhandle->removeData($_POST['hapus']);
}

$info = $classhandle->getData();
$data->closeConnection();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="style.css">
    <title>Uas Pemweb</title>
</head>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="halloween-theme.css"> <!-- Link to the Halloween theme CSS -->
    <title>Main Page</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Data Diri Masyarakat Desa Sabah Balau</h1>
            <img src="foto.jpg" class="gambar" alt="gambarr" >
        </div>

        <div class="content">
            <h2>Silahkan mengisi identitas diri Anda.</h2>

            <!-- Movie Data Entry Form -->
            <form method="post">
                <label for="nama">Nama :</label>
                <input type="text" id="nama" name="nama" required><br>

                <label for="ttl">Tanggal Lahir :</label>
                <input type="text" id="ttl" name="ttl" required><br>

                <label for="usia">Usia :</label>
                <input type="number" id="usia" name="usia" required><br>

                <label for="jk">Jenis Kelamin :</label><br>
                <input type="radio" id="Laki-Laki" name="asal" value="Laki-Laki">
                <label for="Laki-Laki">Laki-Laki</label>
                <input type="radio" id="Perempuan" name="asal" value="Perempuan">
                <label for="Perempuan">Perempuan</label><br><br>

                <label for="asal">Asal :</label>
                <input type="text" id="asal" name="asal" required>

                <input type="submit" name="submit" value="Submit"><br>
            </form>

            <form method="post">
                <label for="hapus">Hapus Data (berdasarkan nama):</label>
                <input type="text" id="hapus" name="hapus" required>
                <button type="submit">Hapus</button><br><br>
            </form>

            <table id="dataTable" border="1">
                <tr class="judulTabel">
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Usia</th>
                    <th>Jenis Kelamin</th>
                    <th>Asal</th>
                </tr>
                <?php 
                foreach ($info as $row) {
                    echo "
                    <tr>
                        <td>{$row['Nama']}</td>
                        <td>{$row['TTL']}</td>
                        <td>{$row['Usia']}</td>
                        <td>{$row['JK']}</td>
                        <td>{$row['Asal']}</td>
                    </tr>";
                }
                ?>
            </table>
        </div>

        <div class="footer">
            <p class="under-text">desa sabah balau - lampung selatan</p>
        </div>
    </div>
</body>

</html>


    <script src="form.js"></script>
</body>
</html>