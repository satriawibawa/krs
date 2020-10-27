<?php
// error_reporting(0);
// error_reporting(E_ERROR | E_WARNING | E_PARSE);
// error_reporting(E_ALL);
// ini_set("error_reporting", E_ALL);
// error_reporting(E_ALL & ~E_NOTICE);
session_start();
require '../config/koneksi.php';

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {

    $table_name = $_POST['role'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM " . $table_name . " WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_row($result);
    if($_POST['role'] == $table_name){
        if ($data != false) {
            if ($_POST['role'] == 'mhs'){
                $pswd = $data[7];
            }else if ($_POST['role'] == 'dosen'){
                $pswd = $data[5];
            }else{
                $pswd = $data[4];
            }
            $password2 = $pswd;
            if (password_verify($password, $password2)) {
                http_response_code(200);
                $_SESSION['idRole'] = $data[0];
                $_SESSION['role'] = $_POST['role'];
                $_SESSION['username'] = $username;
                echo json_encode(
                    array(
                        "status" => "200",
                        "message" => "Successful login.",
                    )
                );
            }else{
                http_response_code(400);
                echo json_encode(
                    array(
                        "status" => "400",
                        "message" => "Fail password incorrect.",
                    )
                );
            }
        }else{
            http_response_code(400);
            echo json_encode(
                array(
                    "status" => "400",
                    "message" => "Fail role no found.",
                )
            ); 
        }
    }else{
        http_response_code(400);
        echo json_encode(
            array(
                "status" => "400",
                "message" => "Fail Request",
            )
        ); 
    }
}
?>