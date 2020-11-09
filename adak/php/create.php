<?php
// error_reporting(0);
// error_reporting(E_ERROR | E_WARNING | E_PARSE);
// error_reporting(E_ALL);
// ini_set("error_reporting", E_ALL);
// error_reporting(E_ALL & ~E_NOTICE);
require '../../config/koneksi.php';

if (isset($_POST['kdmatkul']) && isset($_POST['nmmatkul']) && isset($_POST['sks']) && isset($_POST['ruangan']) && isset($_POST['kelas']) && isset($_POST['hari'])  && isset($_POST['jam']) && isset($_POST['semester']) && isset($_POST['idDosen'])) {
    
    $query = "INSERT INTO matkul (kd_matkul,nama_matkul,sks,ruangan,kelas,hari,jam,semester,id_dosen) VALUES ("."'" . $_POST['kdmatkul'] . "','" . $_POST['nmmatkul'] . "','" . $_POST['sks'] . "','" . $_POST['ruangan'] . "','" . $_POST['kelas'] . "','" . $_POST['hari'] . "','" . $_POST['jam'] . "','" . $_POST['semester'] . "','".$_POST['idDosen']."')";
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