<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
      body {
 background-image: url("IMG_20220616_182236.jpg");
 background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover;
  height: 700px;}
  .dropbtn {
  background-color: white;
  color: black;
  padding: 36px;
  font-size: 26px;
  border: none;
  cursor: pointer;
  border-radius:30px;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: purple;color:white;text-decoration:none;  }

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: purple;color:white;
}


        </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="imageedit_3_7901133968.png">

</head>
<body>
<?php require '_nav2.php' ?>
<h1 align="middle" style="border:2px solid black;background-color:black;color:white;border-radius:50px;">Please Select the Semester</h1>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm">

    <div class="dropdown">
  <button class="dropbtn">Semester I</button>
  <div class="dropdown-content">
    <a href="cm.php?name=bee">Basic Electrical Engg</a>
    <a href="cm.php?name=cpf">CPF</a>
    <a href="cm.php?name=isl">Islamiat</a>
    <a href="cm.php?name=eng">English</a>
  </div>
</div>

</div>
    <div class="col-sm">
    <div class="dropdown">
  <button class="dropbtn">Semester II</button>
  <div class="dropdown-content">
  <a href="cm.php?name=oop">OOP</a>
    <a href="cm.php?name=caed">CAED</a>
    <a href="cm.php?name=lade">LADE</a>
    
  </div>
</div>

    </div>
    <div class="col-sm">
    <div class="dropdown">
  <button class="dropbtn">Semester III</button>
  <div class="dropdown-content">
  <a href="cm.php?name=ldst">LDST</a>
    <a href="cm.php?name=ca">Circuit Analysis</a>
    <a href="cm.php?name=cvit">CVIT</a>
   
  </div>
</div>

</div>
<div class="col-sm">
    <div class="dropdown">
  <button class="dropbtn">Semester IV</button>
  <div class="dropdown-content">
  <a href="cm.php?name=aoop">AOOP</a> 
    <a href="#"></a>
    <a href="#">TBD</a>
  </div>
</div>

</div>

</div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm">

    <div class="dropdown">
  <button class="dropbtn">Semester V</button>
  <div class="dropdown-content">
    <a href="#">TBD</a>
    <a href="#">TBD</a>
    <a href="#">TBD</a>
  </div>
</div>

</div>
    <div class="col-sm">
    <div class="dropdown">
  <button class="dropbtn">Semester VI</button>
  <div class="dropdown-content">
    <a href="#">TBD</a>
    <a href="#">TBD</a>
    <a href="#">TBD</a>
  </div>
</div>

    </div>
    <div class="col-sm">
    <div class="dropdown">
  <button class="dropbtn">Semester VII</button>
  <div class="dropdown-content">
    <a href="#">TBD</a>
    <a href="#">TBD</a>
    <a href="#">TBD</a>
  </div>
</div>

</div>
<div class="col-sm">
    <div class="dropdown">
  <button class="dropbtn">Semester VIII</button>
  <div class="dropdown-content">
    <a href="#">TBD</a>
    <a href="#">TBD</a>
    <a href="#">TBD</a>
  </div>
</div>

</div>

</div>
</div>
<nav class="navbar fixed-bottom navbar-danger bg-danger justify-content-center ">
  <a class="navbar-brand" href="request.php" style="color:white;">Submit your requests / feedbacks here </a>
</nav>
</body>
</html>