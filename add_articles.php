<?php
//redirect user away if they havnet logged in

session_start();
if(!isset($_SESSION['user_priv'])){
	header('Location:admin_login.php');
	
}
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
	
	
	<h3 id="lil">Add an Article</h3>
    <br />
    <a href="view_articles.php" id="all">All Articles</a>
    <br />
    <br />
	<p id="center">Add the information below to add an Article.</p>
    <br />
    <p id="center">* Redquired Fields</p>
      <br />
    <form action="process_xml.php" id="form3" enctype="multipart/form-data" method="POST" onSubmit="return checkart();">
       <p> <label>* Title:</label> <input type="text" name="newtitle" id="newtitle" /><span id="newtitle_error"></span></p>
        
        <br />
        <p><label>* Date:</label> <input type="text" name="newdate" id="newdate"/><span id="newdate_error"></span></p>
        <br />
        <p><label>* Breed of Dog:</label> <input type="text" name="newbreed" id="newbreed" /><span id="newbreed_error"></span></p>
        <br />
        <p><label>* Published By:</label> <input type="text" name="newpub" id="newpub" /><span id="newpub_error"></span></p>
        <br />
        <p><label>* Body Text:</label>  <textarea name="newbod" id="newbod"/></textarea><span id="newbod_error"></span></p>
       
        <br />
       <p><input type="submit" value="Add this Article" id="sum" /></p>
       <br />
    </form>
   
<footer>

<div id="text">Copyright &copy; 2013 Tucker's Dog Shelter </div>  <!--<a href="#"> Privacy Policy </a>        |  <a href="#">Terms of Use</a>-->​

</footer>
</body>
</html>
