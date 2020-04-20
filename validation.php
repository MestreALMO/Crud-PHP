<?php
$obj_mysqli = new mysqli("127.0.0.1", "root", "", "crudphp");
if($obj_mysqli->connect_errno){
    echo "There was a error while connecting with data base.";
    exit;
}
mysqli_set_charset($obj_mysqli, 'utf8');

if(isset($_GET["firstName"]) && isset($_GET["lastName"]) && isset($_GET["email"]) && isset($_GET["address"])){
    if(empty($_GET["firstName"])){
        $error = "First name is required!";
    } elseif(empty($_GET["lastName"])){
        $error = "Last name is required!"
    } elseif(empty($_GET["email"])){
        $error = "Last email is required!"
    } else{
        $firstName = $_GET["firstName"];
        $lastName = $_GET["lastName"];
        $email = $_GET["email"];
        $address0 = $_GET["address0"];

        $stmt = $obj_mysqli->prepare("INSERT INTO 'cliente' ('firstname','lastname','email','address0') VALUES (?,?,?,?)");
        $stmt->bind_param('ssss', $firstName, $lastName, $email, $address0);

        if(!$stmt->execute()){
            $error = $stmt->error;
        } else{
            $success = "Data successfully registered"
        }
    }
}
?>