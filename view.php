<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


?>

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
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Uploading </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="imageedit_3_7901133968.png">
</head>
<body>
<?php require '_nav2.php' ?>

<div id="header" style="margin-left:350px;font-weight:bold;">
<label>Uploading History</label>
</div>
<div id="body" style="margin-left:300px;">
 <table width="80%" border="1">
    <tr>
    <th colspan="4">your uploads...<label><a href="upload.php">upload new files...</a></label></th>
    </tr>
    <tr>
    <td>File Name</td>
    <td>File code</td>
    <td>File Size(KB)</td>
    </tr>
    <?php
 $sql="SELECT * FROM `uploads`";
 $result = mysqli_query($conn, $sql);
 while($rows=$result->fetch_assoc())
 {
  ?>
        <tr>
        <td><?php echo $rows['file'] ?></td>
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