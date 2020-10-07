<?php
// error_reporting(0);
// error_reporting(E_ERROR | E_WARNING | E_PARSE);
// error_reporting(E_ALL);
// ini_set("error_reporting", E_ALL);
// error_reporting(E_ALL & ~E_NOTICE);
require '../config/koneksi.php';

if (isset($_POST['name']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {
    
    $table_name = $_POST['role'];
    if($table_name != 'mhs'){
        $query = "INSERT INTO " . $table_name . "(nama,email,password,username,alamat) VALUES ('" . $_POST['name'] . "','" . $_POST['email'] . "','" . password_hash($_POST['password'], PASSWORD_DEFAULT) . "','" . $_POST['username'] . "','" . $_POST['alamat'] . "')";
        $result = $koneksi->query($query);
        if ($result != false) {
            http_response_code(200);
            echo json_encode(array("status" => "200", "message" => "User was successfully registered."));
        }else{
            http_response_code(400);
            echo json_encode(array(
            "status" => "400", "message" => "Unable to register the user.",
            ));
        }
    }else{
        $query = "INSERT INTO " . $table_name . " (nama,nim,jurusan,alamat,email,username,password) VALUES ('" . $_POST['name'] . "','" . $_POST['nim'] . "','" . $_POST['jurusan'] . "','" . $_POST['alamat'] . "','" . $_POST['email'] . "','" . $_POST['username'] . "','" . password_hash($_POST['password'], PASSWORD_DEFAULT) . "')";
        $result = $koneksi->query($query);
        if ($result != false) {
            http_response_code(200);
            echo json_encode(array("status" => "200", "message" => "User was successfully registered."));
        }else{
            http_response_code(400);
            echo json_encode(array(
            "status" => "400", "message" => "Unable to register the user.",
            ));
        }
    }
}
?>