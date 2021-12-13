<?php

include("config.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $prodi = $_POST['prodi'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $provinsi = $_POST['provinsi'];

    $sql = "UPDATE mahasiswaukm SET nama='$nama', email='$email', prodi='$prodi', jeniskelamin='$jeniskelamin', provinsi='$provinsi' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: data_pendaftar.php');
    } else {
        die("Terjadi Kesalahan");
    }


} else {
    die("Akses dilarang...");
}

?>