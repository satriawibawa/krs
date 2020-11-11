<?php

$id = $_GET['id'];
require '../../config/koneksi.php';
$sql = "DELETE FROM dosen WHERE id_dosen = '$id'"; 
var_dump($sql);
if (mysqli_query($koneksi, $sql)) {
    mysqli_close($koneksi);
    header('Location: read.php');
    exit;
} else {
    echo "Error deleting record";
}
?>