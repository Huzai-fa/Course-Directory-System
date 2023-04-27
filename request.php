<!DOCTYPE html>
<html>
<head>
    <title>Feedback</title>
    <link rel="icon" href="imageedit_3_7901133968.png">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<style>
*{box-sizing:border-box;}
body{font-family: 'Open Sans', sans-serif; color:#333; font-size:14px; background-color:#dadada; padding:100px;background-image:url("download(1).jpg")}
.form_box{width:400px; padding:10px; background-color:white;}

input{padding:5px;  margin-bottom:5px;}
input[type="submit"]{border:none; outlin:none; background-color:#679f1b; color:white;}
.heading{background-color:#ac1219; color:white; height:40px; width:100%; line-height:40px; text-align:center;}
.shadow{
  -webkit-box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);
-moz-box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);
box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);}
.pic{text-align:left; width:33%; float:left;}

</style>

<body>
 <div class="form_box shadow">
 <form method="post" action="feedbackdbcon.php">
 <div class="heading">
   Feedback Form For Course Directory System CED
 </div>
 <br/>
 <p>What's your name?</p>
<input  type="text" required name="name" placeholder="Name" >
<p>What's your email?</p>
<input  type="email" required name="email" placeholder="email" >
<p>What's your phone?</p>
<input  type="number" required name="phone" placeholder="Phone" > 

<div>
 
</div>
 
 <p>Do you have any suggestion for us? </p>
 <textarea name=" suggestion" rows="8" cols="40"></textarea>
  <input type="submit" name="submit" value="Submit Form">
</form>
 </div>
</body>
</html>