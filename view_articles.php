<?php
session_start();//starts session
include ("includes/function_lib.php");//links to the function lib page
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View Dog Articles</title>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/style3.css">
<script src="js/script.js"></script>
<link rel="shortcut icon" href="img/faviicon.ico" type="image/x-icon" />
</head>

<body>


<header>
<h1>Tucker's Dog Shelter</h1>
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
<br />
  <h4>Dog's in the News</h4>
  <br />
	<p id="art">Read the following articles to hear about what amazing dogs are doing in today’s world!</p>
<img src="img/news.jpg" alt="Puppy" id="news" />

<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />

 <?php
if(isset($_SESSION['user_priv']))//starts the privilege session
{ echo '<a href="add_articles.php" id="logout">Add Article</a>';//creates a log out button when user is logged in otherwise this does not show up.
?>
<?php }//closes session loop


?>  
 
<?php
//make a var that refers to the path to the xml
$fileDir = "xml/";

//open a connection to the folder full of XML files
$handle = opendir($fileDir);
//begin a while loop to perform a routine on each file in the folder
while(($file = readdir($handle))!==FALSE){
	//tell it to skip to the next item in  the folder if the current item is not a file.
	if(is_dir($fileDir.$file)) continue;
	
//load the XML from the current file into an array variable
$articleFile = simplexml_load_file($fileDir.$file);

//store each of the arrays's values(title,bod,id,breed,pub,date) in a different var
$a_title = $articleFile -> title;
$a_body = $articleFile -> bod;
$a_id = $articleFile['id'];
$a_breed = $articleFile -> breed;
$a_pub = $articleFile -> pub;
$a_date = $articleFile -> date;
//create an HTML structure for the data.  In the midst of that, echo the varibales.

?>
<article>
<p id="title"><?php echo $a_title;//echo the title tag?></p>
<br />
<p id="date"><?php echo $a_date;//echo the date tag?></p>
<p id="breeds">Breed:<?php echo $a_breed;//echo the breed tag?></p>
<br />
<p id="publish">Published By:<?php echo $a_pub;//echo the pub tag?></p>
<br />
<p id="bodytext"><?php echo $a_body;//echo the body tag?></p>
</article>

<br />
<br />
<?php

//close the WHILE LOOP
}
?>
<footer>

<div id="text">Copyright &copy; 2013 Tucker's Dog Shelter </div>  <!--<a href="#"> Privacy Policy </a>        |  <a href="#">Terms of Use</a>-->​

</footer>
</body>
</html>
