<?php
session_start();
require_once '../helper/connection.php';

$id = $_POST['id'];
$nim = $_POST['nim'];
$nama= $_POST['nama'];
$matkul = $_POST['matkul'];
$nilai = $_POST['nilai'];

$query = mysqli_query($connection, "UPDATE nilai SET nim='$nim', nama = '$nama', matkul='$matkul', nilai = '$nilai' WHERE id='$id'");

if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil mengubah data'
  ];
  header('Location: ./index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./index.php');
}
