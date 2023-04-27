<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>
<?php
include_once '_dbconnect.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Upload File</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="imageedit_3_7901133968.png">
<style>
     body
    {
        background-image: url("download(1).jpg");
    }
    </style>
</head>
<body>
<?php require '_nav2.php' ?>
<br>
<h1 align="middle">Upload Files</h1>
<div class="container" style="background-color:grey; color:white;margin-left:540px;width:300px;border-radius:40px;border:2px solid grey;">
 <form action="up.php" method="post" enctype="multipart/form-data">
<input type="text" name="course" placeholder="enter course tag"/>
 <input type="file" name="file" />
 <button type="submit" name="btn-upload">upload</button>
 </form>
    <br /><br />
    <?php
 if(isset($_GET['success']))
 {
  ?>
        <label>File Uploaded Successfully...  <a style="color:white;" href="view.php">click here to view history.</a></label>
        <?php
 }
 else if(isset($_GET['fail']))
 {
  ?>
        <label>Problem While File Uploading !</label>
        <?php
 }
 else
 {
  ?>
        <label>allowed format files(PDF, DOC, EXE,)</label>
        <?php
 }
 ?>
</div>
</body>
</html>