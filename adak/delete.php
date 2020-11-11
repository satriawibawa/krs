<?php

$id = $_GET['id'];
require '../config/koneksi.php';
$sql = "DELETE FROM matkul WHERE id_matkul = $id"; 

if (mysqli_query($koneksi, $sql)) {
    mysqli_close($koneksi);
    header('Location: index.php');
    exit;
} else {
    echo "Error deleting record";
}
?>