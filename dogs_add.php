<?php


//redirect user away if they havnet logged in

session_start();
if(!isset($_SESSION['user_priv'])){
	header('Location:admin_login.php');
	
}







include ("includes/function_lib.php");//links to the function lib page
$result = run_my_query("SELECT * FROM dog_table");

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Dog</title>
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

<section id="info">
 <br />
<h4 id="field2">Add a Dog</h4>
<h2 id="field">* Required Fields</h2>
</section>
<br />
	<?php
/////Display info////////
// this is saying that its fetching the information on the sql file.
while ($row = mysql_fetch_array($result)){
	//store the id in a var
	$s_id =  $row ['id'];
	//store the name in a var
	$s_name =  $row ['name'];
	//store the Breed in a var
	$s_breed =  $row ['Breed']; 
	//store the Adoption Price in a var
	$s_adoption_price =  $row ['AdoptionPrice'];
	//store the Description in a var
	$s_Description =  $row ['Description'];
	//store the Small Image in a var
	$s_Image1 =  $row ['ThumbnailImageName'];
	//store the Big Image in a var
	$s_Image2 =  $row ['LargeImageName'];}?>
    <!-- I am in HTML world again. Use any tags:-->
 

   


  <form action="process_add_dog.php" method="post" enctype="multipart/form-data"  onSubmit="return checkform();">
    <p><label for="name">* Dog Name:</label><input type="text" name="name" id="name"><span id="name_error"></span></p>
    <br />
     <p><label for="Breed">* Breed:</label><input type="text" name="Breed" id="Breed"><span id="breed_error"></span></p>
     <br />
     <p><label for="AdoptionPrice">* Adoption Price:</label><input type="text" name="AdoptionPrice" id="AdoptionPrice"><span id="price_error"></span></p>
     <br />
      <p><label for="Description">* Description:</label><textarea name="Description" id="Description" ></textarea><span id="description_error"></span></p>
      <br />
      <p><label for="ThumbnailImageName">* Thumbnail Image (100px x 100px):</label><input type="file" name="ThumbnailImageName" id="ThumbnailImageName"><span id="small_error"></span></p> 
      <br />
      <p><label for="LargeImageName">* Large Image (400px x 400px):</label><input type="file" name="LargeImageName" id="LargeImageName"><span id="big_error"></span></p> 
      <br />
      <p><input type="submit" id="button" value="Submit Record" ></p>
      </form>
    
<br />
<br />
  
<a href="dogs.php" id="back"><<< Go Back </a>
<br />
<br />

<footer>

<div id="text">Copyright &copy; 2013 Tucker's Dog Shelter </div>  <!--<a href="#"> Privacy Policy </a>        |  <a href="#">Terms of Use</a>-->​

</footer>
</body>
</html>
