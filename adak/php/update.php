<?php
// error_reporting(0);
// error_reporting(E_ERROR | E_WARNING | E_PARSE);
// error_reporting(E_ALL);
// ini_set("error_reporting", E_ALL);
// error_reporting(E_ALL & ~E_NOTICE);
require '../../config/koneksi.php';

if (isset($_POST['kdmatkul']) &&
    isset($_POST['nmmatkul']) &&
    isset($_POST['sks']) &&
    isset($_POST['ruangan']) &&
    isset($_POST['kelas']) &&
    isset($_POST['hari'])  &&
    isset($_POST['jam']) &&
    isset($_POST['semester']) &&
    isset($_POST['idDosen'])) {
    
    $query = "UPDATE matkul SET id_matkul='".$_POST['id']."',kd_matkul='".$_POST['kdmatkul']."',nama_matkul='".$_POST['nmmatkul']."',sks='".$_POST['sks']."',ruangan='".$_POST['ruangan']."',kelas='".$_POST['kelas']."',hari='".$_POST['hari']."',jam='".$_POST['jam']."',semester='".$_POST['semester']."',id_dosen='".$_POST['idDosen']."' WHERE id_matkul='".$_POST['id']."'";
    $result = $koneksi->query($query);
    if ($result != false) {
        http_response_code(200);
        echo json_encode(array("status" => "200", "message" => "Matkul was successfully registered."));
        }else{
            http_response_code(400);
            echo json_encode(array(
            "status" => "400", "message" => "Unable to fail the Matkul.",
            ));
        }
    }
?>