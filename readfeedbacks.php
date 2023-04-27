<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


?>
<?php
 
 // Username is root
 $user = 'root';
 $password = '';
 $database = 'users';
 $servername='localhost:3306';
 $mysqli = new mysqli($servername, $user,
                 $password, $database);
  
 // Checking for connections
 if ($mysqli->connect_error) {
     die('Connect Error (' .
     $mysqli->connect_errno . ') '.
     $mysqli->connect_error);
 }
  
 // SQL query to select data from database
 $sql = "SELECT * from `feedback`";
 $result = $mysqli->query($sql);
 $mysqli->close();?>
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
    .rstyle
    {
        background-color:black;border:2px solid none;
    }
    </style>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Feedbacks</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="imageedit_3_7901133968.png">
</head>
<body>
<?php require '_nav2.php' ?>
<div class="rstyle" stlye="">
<h4 style="margin-left:150px;color:white;">Name--------Email--------Phone-----message 
    </h4>
<table>
            <tr>
                <th style="color:white;">FEEDBACKS</th>
               
               
            </tr>
            <tr style="color:white;font-weight:bold;"> <td style="color=white;margin-left:500px;"><?php echo "";?></td>            
           </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            
            <?php
                // LOOP TILL END OF DATA
           
                while($rows=$result->fetch_assoc())
                {
            ?>
           
           <tr style="color:white;font-weight:bold;">
               
            <td style="color:white;">
               <td style="color=white;"><?php echo $rows['name']."------- ";?></td>
               <td style="color=white;"><?php echo $rows['email']."------- ";?></td>
               <td style="color=white;"><?php echo $rows['phone']."------- ";?></td>
               <td style="color=white;"><?php echo $rows['message'];?></td>
             
            </tr>
            <?php
                }
            ?>
        </table>
            </div>
</body>
</html>