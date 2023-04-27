<?php
 
// Username is root
$user = 'root';
$password = '';
$em = $_GET['email'];
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
$sql = " DELETE FROM users where email='$em' ";
$result = $mysqli->query($sql);
$mysqli->close();?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">
 <head>
 <link rel="icon" href="imageedit_3_7901133968.png">
   
 <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
        h2{
color:white;
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    </style>  
 <meta charset="UTF-8">
    <title>Reset Password</title>  
</head>
<body bgcolor="black">
<h2 align="middle">DELETE YOUR ACCOUNT</h2>
    <form name="form" action="" method="get">
    <input style="border-radius:30px;" type="email" name="email" placeholder="Enter your email">
    <input type="submit" name="Submit">
</form>
      
<section>
        <table>
            <tr>
                <th style="color:white;">ENTER EMAIL ABOVE TO DELETE ACCOUNT </th>
                
               
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo "Password Deleted";?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
 
</html>