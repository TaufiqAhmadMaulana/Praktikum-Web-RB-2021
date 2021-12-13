    <?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>KMPA ITERA</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="data_pendaftar.css">
</head>
<body>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="pendaftaran.php">Daftar</a></li>
        <li class="active"><a href="data_pendaftar.php">Data Pendaftar</a></li>
        <li><a href="about.php">About</a></li>
    </ul>


    <header>
        <h2>List Calon Anggota</h2>
    </header>

    <div class="container">
    <table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Prodi</th>
            <th>Jenis Kelamin</th>
            <th>Asal Provinsi</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM mahasiswaukm";
        $query = mysqli_query($db, $sql);

        while($mahasiswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$mahasiswa['id']."</td>";
            echo "<td>".$mahasiswa['nama']."</td>";
            echo "<td>".$mahasiswa['email']."</td>";
            echo "<td>".$mahasiswa['prodi']."</td>";
            echo "<td>".$mahasiswa['jeniskelamin']."</td>";
            echo "<td>".$mahasiswa['provinsi']."</td>";

            echo "<td>";
            echo "<a href='update.php?id=".$mahasiswa['id']."'>Edit</a> | ";
            echo "<a href='delete.php?id=".$mahasiswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
    <a href="pendaftaran.php"> <button type="submit">Tambah</button></a> <br>

    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran Ukm Berhasil";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
    <?php endif; ?>

    </div>
    </div>
    </body>
</html>