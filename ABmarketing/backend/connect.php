<?php
    $connect_userdb = mysqli_connect('localhost','root','','a b marketing data');

    if(!$connect_userdb){
        echo("cant connect to db");
        
    }
?>