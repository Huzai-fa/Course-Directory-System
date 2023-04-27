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
    body
    {
        background-image: url("download(1).jpg");
    }
    .hstyle
    {
        border:2px solid purple;
        background-color:purple;
        color:white;
        border-radius:40px;

    }
    .hstyle:hover{
    text-decoration: none;
    }
    </style>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="imageedit_3_7901133968.png">
</head>
<body>
<?php require '_nav2.php' ?>
<div class="d-flex justify-content-center">
<div class="container">
    <br>
<a href="readfeedbacks.php"><h2 align="middle" class="hstyle">Read Feedbacks</h2></a>
<a href="upload.php"><h2 align="middle" class="hstyle">Upload Files</h2></a>

</div> 
</div>
</body>
</html>