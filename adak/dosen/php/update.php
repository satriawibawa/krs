<?php
// error_reporting(0);
// error_reporting(E_ERROR | E_WARNING | E_PARSE);
// error_reporting(E_ALL);
// ini_set("error_reporting", E_ALL);
// error_reporting(E_ALL & ~E_NOTICE);
require '../../../config/koneksi.php';
if (isset($_POST['nama']) &&
    isset($_POST['email']) &&
    isset($_POST['alamat']) &&
    isset($_POST['id'])) {
    
    $query = "UPDATE dosen SET id_dosen='".$_POST['id']."',nama='".$_POST['nama']."',email='".$_POST['email']."',alamat='".$_POST['alamat']."'";
   
    $result = $koneksi->query($query);
    if ($result != false) {
        http_response_code(200);
        echo json_encode(array("status" => "200", "message" => "Dosen was successfully Update."));
        }else{
            http_response_code(400);
            echo json_encode(array(
            "status" => "400", "message" => "Unable to fail the Matkul.",
            ));
        }
    }
?>