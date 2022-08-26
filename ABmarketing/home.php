<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    .a{
        text-decoration: none;
    }
</style>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-secondary">
    <a class="navbar-brand" href="#"> -> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="login_page.php"> LOGOUT <span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
  
  </div>
</nav>



    <!-- main code -->
<h1>AB MARKETING COMPANY</h1>

<h3>logged in as<?php
    if(in_array('username',$_GET)){
        echo " username";
    }else{
        echo " ".$_GET['username'];
    }
        
?> </h3>

<form class="form-inline my-2 my-lg-0" action="backend/ABM/insert.php" method='POST'>
      <input class="form-control mr-sm-2" type="search" placeholder="Party" name="party" aria-label="Search">
      <input class="form-control mr-sm-2" type="search" placeholder="Party Id" name="partyid" aria-label="Search">
      <input class="form-control mr-sm-2" type="search" placeholder="inv no" name="inv_no" aria-label="Search">
      <input class="form-control mr-sm-2" type="search" placeholder="amount" name="amount" aria-label="Search">
      <input class="form-control mr-sm-2" type="search" placeholder="tax" name="tax" aria-label="Search">
      
      <button class="btn btn-outline-success my-2 my-sm-0" id='register'>insert data</button>
</form>

<!-- <form action="backend/ABM/insert.php" method='POST'>
    <p>party</p>
    <input type="text" name="party" placeholder='party'>
    
    <p>party_id</p> <br>

    <input type="text" name="partyid" placeholder='name'>
    <p>inv_no</p> <br>
    <input type="text" name="inv_no" placeholder='name'>
    <p>amount</p><br>
    <input type="text" name="amount" placeholder='2'>
    <p>tax</p><br>
    <input type="text" name="tax" placeholder='4'>
    
    <button type='submit' id='register' >insert_data</button>
</form> -->

<hr>

<br>
<button><a class = "a" href="backend/ABM/display_user.php?username=<?php
    echo $_GET['username'];
?>">
display user data
</a></button>

</body>
</head>