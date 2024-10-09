<?php
if($_POST){ 
    $nama_buku=$_POST['nama_buku'];
    $deskripsi=$_POST['deskripsi'];
    $foto_buku=$_POST['foto_buku'];
    if(empty($nama_buku)){
        echo "<script>alert('nama buku tidak boleh kosong');location.href='tambah_buku.php';</script>";
    } else if(empty($foto_buku)){
        echo "<script>alert('foto tidak boleh kosong');location.href='tambah_buku.php';</script>";
    } else {
        include "database_connection.php";
        $insert=mysqli_query($connection,"insert into buku (nama_buku, deskripsi, foto) value ('".$nama_buku."','".$deskripsi."','".$foto_buku."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan Buku');location.href='home.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Buku');location.href='tambah_buku.php';</script>";
        }
    }
}
?>