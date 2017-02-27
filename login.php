<?php 
include("config.php");
/* 
$ID = $_POST['user']; 
$Password = $_POST['pass']; 
*/ 
function SignIn() 
{ 
session_start(); //starting the session for user profile page 
if(!empty($_POST['user'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text 
{ 
$query = mysql_query("SELECT * FROM UserName where userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error()); 
$row = mysql_fetch_array($query) or die(mysql_error()); 
if(!empty($row['userName']) AND !empty($row['pass'])) 
{ 
$_SESSION['userName'] = $row['pass']; 
header("location: download_final.php");
echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
} 
else 
{ 
echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
} 
} 
} 
if(isset($_POST['submit'])) 
{ 
SignIn(); 
} 
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Sign-In</title>
</head>
<link rel="stylesheet" type="text/css" href="login.css">
<body>
<form class="register-form" method="POST" action="login.php">
<body class="img" background="http://webserversnp.eastus.cloudapp.azure.com/websnp/uploads/login1.jpg">
<div id="insetBgd">
	<h1 class="insetType">Cloud Automation HUB</h1>
</div>
<div id=about-company>
        <h1 class="about-company">
<p><br>“SNP has been a tremendous asset in the transition of our</br>digital signage application from locally-hosted servers to</br> Microsoft’s Azure cloud service. Their team has both breadth</br> and depth with Azure and its many offerings.”</br></p>
Technology Director, at Yale School of Medicine</h1>
<div id="description">
<h1 class="description">
<p><br>Cloud Automation Hub is an approach to the modern,increasingly complex data center requires advanced cloud management tools, </br>and cloud automation answers that need.</br></p>

Automation extends to the software layer, where complex systems can be configured once and then rolled out on the fly as needed,</br> using cloud automation tools. Intelligent systems architecture can balance the load among compute, network or storage resources,</br> bringing systems online or offline as demand dictates.</h1>


<div class="login-page" id="Sign-In">
<div class="form">
<input type="text" id="userName" name="user" placeholder="name">
<input type="password" id="pass" name="pass" placeholder="password">
<button type="submit" value="submit" name="submit">LOGIN</button>
</div>
</div>
</div>
</body>
</form>
</body>
</html>

