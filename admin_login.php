<?php
session_start();//starts session
include ("includes/function_lib.php");//links to the function lib page
$result = run_my_query("SELECT * FROM dog_table");//runs the query from the dog table

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Login</title>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/style3.css">
<script src="js/script.js"></script>
<link rel="shortcut icon" href="img/faviicon.ico" type="image/x-icon" />
</head>

<body>


<header>
<h1>Tucker's Dog Shelter</h4>
<section id="placement">
<img src="img/dog1.png" alt="Logo" />
</section>
<!--<img src="img/Untitled-1.png" id="logo"/-->
<article id="right">
<h3 id="font">"Life is too</h3>
<h3  id="font">short not to</h3>
<h3  id="font">adopt a dog."</h3>

</article>
</header>
<nav>
<ul>

<a href="index.html"><li><p id="home2">Home</p></li></a>
<a href="dogs.php"><li><p id="home2">Dogs for Adoption</p></li></a>
<a href="view_articles.php"><li><p id="home2">Dog's in the News</p></li></a>
<a href="about.html"><li><p id="home2">About Us</p></li></a>
<a href="contact.html"><li><p id="home2">Contact Us</p></li></a>
<a href="admin_login.php"><li><p id="home2">Administrator Login</p></li></a>



</ul>
</nav>

<section id="info">


<br />
 
    
<h4>Admin login</h4>
<h2></h2>
</section>
<br />
<form action="process_admin.php" id="form2" method="post" onSubmit="return checklogin();">
<p><label>Username:</label><input name="uname" id="uname" type="text"><span id="admin_error"></span></p>
<br />
<br />

<p><label>Password:</label><input name="upass" id="upass"type="password"><span id="pass_error"></span></p>
<br />
<p><input type="submit" value="Login" id="log"></p>

<br />
</form>
 <?php
if(isset($_SESSION['user_priv']))//starts the privilege session
{ echo '<a href="process_logout.php" id="logout2">Log Out</a>';//creates a log out button when user is logged in otherwise this does not show up.
?>
<?php }//closes session loop


?>  
<br />
<br />
<br />
<article id="moveleft">
<h4>Development Note:</h4>
<p id="just"> Feel free to log in with the username and password "master" for privileges to add and delete records, and also to add articles.</p>
</article>
<footer>

<div id="text">Copyright &copy; 2013 Tucker's Dog Shelter </div>  <!--<a href="#"> Privacy Policy </a>        |  <a href="#">Terms of Use</a>-->​

</footer>
</body>
</html>
