<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$feedback_txt = $_POST['suggestion'];
$conn = mysqli_connect("localhost", "root","", "users");
$query ="INSERT INTO `feedback` (`name`, `email`, `phone`, `message`) VALUES ('$name', '$email', '$phone','$feedback_txt')";
$result = mysqli_query($conn, $query);
if($result)
  echo 'Thank you for your feedback. We\'ll appreciate!';
else
die("Something terrible happened. Please try again. ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Confirmation</title>
</head>
<body>
    <a href="student.php"><input type="submit" name="done"></a>
</body>
</html>