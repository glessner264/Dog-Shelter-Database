<?php
//opens php tag

//read in the db conn code from a separate file:
include ("includes/function_lib.php");
//intercept the chosen id from the dogs.php page:
$chosen_id=$_POST["view_id"];
//execute a function from that include, using the id passed through
$result = run_my_query("SELECT * FROM dog_table WHERE id=$chosen_id");
//closes php tag

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
	//store the small image in a var
	$s_Image1 =  $row ['ThumbnailImageName'];
	//store the big image in a var
	$s_Image2 =  $row ['LargeImageName'];
	
    
    ?>
<!-- I am in HTML world again. Use any tags:-->




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dog Shelter Description <?php echo $s_name//grabs the name from the var?></title>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/style2.css">
<link rel="shortcut icon" href="img/faviicon.ico" type="image/x-icon" />
</head>

<body>


<header>
<h1>Tucker's Dog Shelter</h1>
<section id="placement">
<img src="img/dog1.png" alt="Logo"  id="no"/>
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

<h4>  Dogs for Adoption - <?php echo $s_name//grabs the name from the var?> Details</h4>
<h2>The information below gives specific  information on <?php echo $s_name//grabs the name from the var?>.  Call (412)-567-8284 if you have any more questions.</h2>
	

    
    
<div id="all">    
    
  <h6><span>ID#: </span> <?php echo $s_id//grabs id from the var?><br/>
    <span>Name: </span> <?php echo $s_name//grabs the name from the var?><br/>
    <span>Breed: </span> <?php echo $s_breed//grabs the breed from the var?><br/>
    <span>Adoption Price: </span> $<?php echo $s_adoption_price//grabs the adoption price  from the var?><br/>
   <br/><p id="special"><?php echo $s_Description//grabs the description from the var?></p>
   
   <form action="dogs.php">
    <br/>
    <br/>
   <a href="dogs.php" id="back"><<< Go Back </a>
   </form><br/></h6></div>
    <br/>
  
    <br/>
    <img src="img/<?php echo $s_Image2//grabs the big image from the var?>"  alt="Big Pic" id="big" /> 
    

<?php }//closes WHILE loop
?>


<footer>

<div id="text">Copyright &copy; 2013 Tucker's Dog Shelter </div>  <!--<a href="#"> Privacy Policy </a>        |  <a href="#">Terms of Use</a>-->​

</footer>
</body>
</html>
