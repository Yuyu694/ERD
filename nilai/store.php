<?php
session_start();
require_once '../helper/connection.php';

$nim = $_POST['nim'];
$nama= $_POST['nama'];
$matkul = $_POST['matkul'];
$nilai = $_POST['nilai'];

$query = mysqli_query($connection, "insert into nilai (nim, nama, matkul, nilai) value('$nim','$nama', '$matkul', '$nilai')");

if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil menambah data'
  ];
  header('Location: ./index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./index.php');
}
