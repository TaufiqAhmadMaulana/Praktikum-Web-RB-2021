<!DOCTYPE html>
<html>
<head>
    <title>KMPA ITERA</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="pendaftaran.css">
</head>
<body>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li class="active"><a href="pendaftaran.php">Daftar</a></li>
        <li><a href="data_pendaftar.php">Data Pendaftar</a></li>
        <li><a href="about.php">About</a></li>
    </ul>
    <fieldset>
    <header>
        <h1>Formulir Pendaftaran</h1>
    </header>
  
    <center>
    <form action="proses.php" method="POST">
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="Nama Lengkap" />
        </p>
        <p>
            <label for="email">Email: </label>
            <input type="text" name="email" placeholder="user@gmail.com" />
        </p>
        <p>
            <label for="prodi">Prodi: </label>
            <input type="text" name="prodi" placeholder="Program Studi" />
        </p>
        <p>
            <label for="jeniskelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jeniskelamin" value="Laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jeniskelamin" value="Perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="prodi">Provinsi: </label>
            <input type="text" name="provinsi" placeholder="Asal Provinsi" />
        </p>
        <hr>
        <p style="margin-top: 10px">
            <input type="submit" value="Daftar" name="daftar" class="button"/>
        </p>  
    </form>
    </center>
    </body>
</html>