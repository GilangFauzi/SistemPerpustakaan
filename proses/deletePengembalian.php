<?php

require 'koneksi.php';
$id = $_GET['id_pengembalian'];
// $on = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=1");
// $off = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0");

// $off = mysqli_query($conn, "ALTER TABLE DISABLE KEYS;");
$sql = mysqli_query($conn, "DELETE FROM tbl_pengembalian WHERE id_pengembalian='$id' ") or die(mysqli_error($conn));
// $on = mysqli_query($conn, "ALTER TABLE  ENABLE KEYS;");
// $on = mysqli_query($conn, "ALTER TABLE tbl_pengembalian ENABLE KEYS;") ;
if (mysqli_affected_rows($conn) > 0) {
    echo "<script>
    alert('Data Berhasil di Hapus');
    document.location.href = '../pages/pengembalian/dataPengembalian.php';
    </script>";
} else {
    echo "<script>
    alert('Data Gagal di Hapus');
    document.location.href = '../pages/pengembalian/dataPengembalian.php';
    </script>
    ";
}
// header("location:../pages/pengembalian/datapengembalian.php");