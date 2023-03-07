<?php 

$server = "localhost";
$username = "root";
$password = "";
$db_name = "data";

$db = new mysqli($server, $username, $password, $db_name);

if(isset($_POST["submit"])){

    $name = $_POST["new_user"];
    $sql = "INSERT INTO `data_test`(`id`, `name`) VALUES (NULL,'$name')";
    $result = mysqli_query($db, $sql);
    $id_sql = "SELECT `id` FROM `data_test` WHERE `name`='$name'";
    $id_request = mysqli_query($db, $id_sql);
    $row = mysqli_fetch_assoc($id_request);
    $id = implode($row);
    $data = array(
        "id" => $id,
        "name" => $name
    );
    $json = json_encode($data);
    file_put_contents("data/data_".$name.".json", $json);
    header("Location: main_page.php");
    

}
if(isset($_POST["sub_name"])){

    $user = $_POST["user"];
    $user_json = file_get_contents("data/data_".$user.".json");
    header("Location: main_page.php?user=" . urlencode($user) . "&user_json=" . urlencode($user_json));
    
}




?>