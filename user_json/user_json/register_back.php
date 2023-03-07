<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "data";

$db = new mysqli($server, $user,$password,$database);

if(isset($_POST["register"])){

    $name = $_POST["username"];
    $heslo = $_POST["password"];
    $heslo_znova = $_POST["psw_again"];
    $email = $_POST["email"];

    $name_check = "SELECT COUNT(`name`) AS `pocet` FROM `data_test` WHERE `name`='$name'";

    if($name_check == 0){

        

    }

}



?>