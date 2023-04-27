<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $email = $_POST["email"];
    $exists=false;
    $condition = substr($username,0,7);
    if($condition=="Student")
    {
$showError = false;
$showAlert = true;  
}    
 else if($condition=="Faculty")
{
    $showError = false;
    $showAlert = true;  
}
else
$showError=true;
    if(($password == $cpassword) && $exists==false){
      
    $sql = "INSERT INTO `users` ( `username`, `password`, `dt`,`email`) VALUES ('$username', '$password', current_timestamp(),'$email')";
    $result = mysqli_query($conn, $sql);
    
    }
    else{
        $showError = "Passwords do not match";
        }
}
    
?>

<!doctype html>
<html lang="en">
  <head>
  <script>
        function validateForm() {
  let x = document.forms["form"]["username"].value;
  if (x == "") {
    alert("Username must be filled out");
    return false;
  }
}
        </script>
    
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="imageedit_3_7901133968.png">
    <title>SignUp</title>
    <style>
        body {
 background-image: url("download(1).jpg");
 background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover;
  height: 700px;
}
        </style>
    
  </head>
  <body>
    <?php require '_nav.php' ?>
    <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Please follow instructions carefully
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>

<div class="container bg-warning" style="border-radius:30px;height:630px;width:400px;">
<div class="container my-4">
     <h1 class="text-center text-white">Lets Become our member</h1>
     <form action="signup.php" method="post" name="form" onsubmit="validateForm()>
        <div class="form-group">
            <label for="username">*Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            <label for="username"><b>*for faculty user name should start with (Faculty_NAME)</b></label>
            <label for="username"><b>*for student user name should start with (Student_NAME)</b></label>
            
        </div>
        <div class="form-group">
            <label for="email">*E-mail</label>
            <input type="email" class="form-control" id="password" name="email">
        </div>
       
        <div class="form-group">
            <label for="password">*Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword">
        
        </div>
         
        <button type="submit" class="btn btn-primary">SignUp</button>
     </form>
    </div>

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>