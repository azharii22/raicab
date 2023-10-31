<?php
require 'functions.php';
$sql = "DELETE FROM pendaftar WHERE id_pendaftar = " . $_GET['id'];
$exe = mysqli_query($conn,$sql);

if($exe){
    $success = 'true';
    $title = 'Berhasil';
    $message = 'Menghapus Data';
    $type = 'success';
    header('location: pendaftar.php?crud='.$success.'&msg='.$message.'&type='.$type.'&title='.$title);
}
?>
