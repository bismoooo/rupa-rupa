<?php
include "koneksi.php";

//periksa apakan parameter id telah dikirim 
if (isset($_GET['id'])) {
    $id_user = $_GET['id'];

    //Query menghapus data berdasarkan id_user
    $query = mysqli_query($koneksi, "DELETE FROM tb_user WHERE id_user = '$id_user'");

    //notifikasi dan redirect ke 
    if ($query) {
        echo "<script>alert('Data pengguna berhasil dihapus!');</script>";
        header("refresh:0, pengguna.php");
    } else {
        echo "<script>alert('Gagal menghapus data pengguna!');</script>";
        header("refresh:0, pengguna.php");
    }
} else {
    echo "<script>alert('Akses tidak valid!')</script>";
    header("refresh:0, pengguna.php");
}
?>