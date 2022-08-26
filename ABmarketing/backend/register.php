<?php
    include('connect.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql_check = "SELECT * FROM `abm_user` WHERE `username` = '$username'";
    $result = $connect_userdb -> query($sql_check);

    if(!$result -> fetch_assoc()){
        $sql_query = "INSERT INTO `abm_user` (`username`, `password`) VALUES ('$username','$password')";
    
        $connect_userdb->query($sql_query);
        header("location: ../home.php?username=$username");
        $connect_userdb->close();
    }else{
        echo "user alredy exist";
    }

    

    
?>