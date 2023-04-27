<?php
$user = 'root';
$password = '';
$database = 'users';
$servername='localhost:3306';
$conn = mysqli_connect("localhost", "root","", "users");
$mysqli = new mysqli($servername, $user,
                $password, $database);
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}

?>
<?php
session_start();
$n= $_GET['name']; 
if ($n=="bee") {
    $sql="SELECT * FROM `uploads` where `type`='bee'";
}
else if($n=="cpf")
{
    $sql="SELECT * FROM `uploads` where `type`='cpf'";

}
else if($n=="isl")
{
    $sql="SELECT * FROM `uploads` where `type`='isl'";

}
else if($n=="eng")
{
    $sql="SELECT * FROM `uploads` where `type`='eng'";

}
else if($n=="oop")
{
    $sql="SELECT * FROM `uploads` where `type`='oop'";

}
else if($n=="caed")
{
    $sql="SELECT * FROM `uploads` where `type`='caed'";

}
else if($n=="lade")
{
    $sql="SELECT * FROM `uploads` where `type`='lade'";

}
else if($n=="ca")
{
    $sql="SELECT * FROM `uploads` where `type`='ca'";

}
else if($n=="ldst")
{
    $sql="SELECT * FROM `uploads` where `type`='ldst'";

}
else if($n=="cvit")
{
    $sql="SELECT * FROM `uploads` where `type`='cvit'";

}
else if($n=="aoop")
{
    $sql="SELECT * FROM `uploads` where `type`='aoop'";

}
else if($n=="tdb")
{
    echo "UNDER CONSTRUCTION";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="imageedit_3_7901133968.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Content</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="imageedit_3_7901133968.png">
</head>
<body>
<?php require '_nav2.php' ?>
<div id="body" style="margin-left:350px;">
 <table width="80%" border="1">
    <tr>
    <td>File Name</td>
    <td>File code</td>
    <td>File Size(KB)</td>
    </tr>
    <?php
$result = mysqli_query($conn, $sql);
while($rows=$result->fetch_assoc())
 {
  ?>
        <tr>
       <td> <a href="uploads\<?php echo $rows['file'] ?>"><?php echo $rows['file'] ?></a></td>
        <td><?php echo $rows['type'] ?></td>
        <td><?php echo $rows['size'] ?></td>
    </tr>
        <?php
 }
 ?>
    </table>
    
</div>
</body>
</html>