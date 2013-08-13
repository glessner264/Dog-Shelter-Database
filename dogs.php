<?php
session_start();


include ("includes/function_lib.php");//links to the function lib page


$query = "SELECT * from dog_table";//selecting all info from the dog table



//to be ableto access session variables below, start with







//retrieve and soter information for display...
//First STEP: Source your SQL File
//this code does not access it from the .sql file..source it.



//set up a default column to sort by
$sortcol="id";

//if the page has been refreshed by clicking one of the sort links below, "ordercol" ha been passed through the $_get array;

if(isset($_GET['ordercol'])){
	//use the column name being passed as the col to sort by in the order by clause coming up
	$sortcol=$_GET['ordercol'];
	
}


//execute a function from that include, sorting by the column named above
$result = run_my_query("SELECT * FROM dog_table ORDER BY $sortcol");?>







<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dog Shelter</title>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
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

<?php
if(isset($_SESSION['user_name'])){?>
<h4 id="mast"><?php
echo "Welcome ". $_SESSION['user_name'];


}
?></h4>
    <br />
    <br />
<h4 id="mast">Dogs up for Adoption</h4>
<p id="mast2">Adopting an animal is a big decision for you and your family.  We are here to help you find the right dog that will fit your family!  Below are the current dogs that are up for adoption here at Tucker's dog shelter.</p>
<br />
<a href="dogs.php?ordercol=name" id="col">Sort by name</a>

<a href="dogs.php?ordercol=AdoptionPrice" id="col2">Sort by price</a>
<?php 
	

if(isset($_SESSION['user_priv'])){
?>

<a  id="move"href="dogs_add.php">Add Record</a>
 <?php }//closes session loop


?>
<br />
<br />
</section>
<br />
<section>
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
	$s_Image2 =  $row ['LargeImageName'];?>
    <!-- I am in HTML world again. Use any tags:-->
 
<div id="nice">
  
   <form action="dog_description_page.php" method="post"><br/>
    <input type="image" src="img/<?php echo $s_Image1//shows the small image var?>" id="pics"><br/>
    <input type="hidden" name="view_id" value="<?php echo $s_id//hiddening the id var?>"><br/>
    <input type="submit" value="<?php echo $s_name//thes the name of the dog var?>"><br/>
   <!-- ID#: <?php// echo $s_id //shows id?><br/>-->
     $<?php echo $s_adoption_price//shows the price var?>
    <br />
    <!--<form action="process_delete_dog.php"><input type="submit" value="Delete">-->
    </form>
   
<?php
if(isset($_SESSION['user_priv'])){
?>

   
    <p><form id="bye" action="process_delete_dog.php" method="post">
    <input type="hidden" name="view_id" value="<?php echo $s_id//hiddening the id var
	
	
	?>">
    <input type="submit" value="Delete">
    
    </form></p>
  <?php }//closes session loop


?>  
    
    
    </div>
<?php }//closes WHILE loop


?>
</section>
<footer>

<div id="text">Copyright &copy; 2013 Tucker's Dog Shelter </div>  <!--<a href="#"> Privacy Policy </a>        |  <a href="#">Terms of Use</a>-->​

</footer>
</body>
</html>
