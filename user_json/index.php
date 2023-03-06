<?php
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data</title>
</head>
<body>
    <h1>Data</h1>
    <form action="database.php" method="post">
        <input type="text" placeholder="add_user" name="new_user">
        <button type="submit" name="submit">OK</button>
    </form>
    <form action="database.php" method="post">
        <input type="text" placeholder="name" name="user">
        <button type="submit" name="sub_name">OK</button>
    </form>

    <?php

    if (isset($_GET['user_json'])) {
        $user_json = $_GET['user_json'];
        $user_json = json_decode($user_json, true);
        
        echo "<ul>";
        foreach ($user_json as $key => $value) {
            echo "<li>$key: $value</li>";
        }
        echo "</ul>";
    
    } 

    

      
    ?>

</body>
</html>