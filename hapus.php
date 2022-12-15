<?php

include("config.php");

if( isset($_GET['Id']) ){

    // ambil id dari query string
    $id = $_GET['Id'];

    // buat query hapus
    $sql = "DELETE FROM calon_siswa WHERE Id=$Id";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list-siswa.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>