<?php
    include("connect.php");
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql_query = "SELECT * FROM `abm_user` WHERE `username` = '$username'";

    $result = $connect_userdb -> query($sql_query);

    $row = $result -> fetch_assoc();

    if($row['password'] == $password){
        header("location: ../home.php?username=$username");
    }else{
        echo "invalid password";
    }

    $connect_userdb->close();

?>
