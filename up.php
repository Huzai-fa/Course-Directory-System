<?php
$user = 'root';
$password = '';
$database = 'users';
$servername='localhost:3306';
$conn = mysqli_connect("localhost", "root","", "users");
$mysqli = new mysqli($servername, $user,
                $password, $database);
$cs = $_POST['course'];
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
if(isset($_POST['btn-upload']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO `uploads`(`file`,`type`,`size`) VALUES('$final_file','$cs','$new_size')";
  $result = mysqli_query($conn, $sql);
  
 
 ?>
  <script>
  alert('successfully uploaded');
        window.location.href='upload.php?success';
        </script>
  <?php
 }
 else
 {
  ?>
  <script>
  alert('error while uploading file');
        window.location.href='upload.php?fail';
        </script>
  <?php
 }
}
?>