<?php

include("config.php");

if(isset($_POST['daftar'])){

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $prodi = $_POST['prodi'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $provinsi = $_POST['provinsi'];

    $sql = "INSERT INTO mahasiswaukm (nama, email, prodi, jeniskelamin, provinsi) VALUE ('$nama', '$email', '$prodi', '$jeniskelamin', '$provinsi')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: data_pendaftar.php?status=sukses');
    } else {
        header('Location: data_pendaftar?status=gagal');
    }

} else {
    die("Denied");
}

?>