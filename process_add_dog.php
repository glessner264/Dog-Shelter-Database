<?php //opens the php tag

include("includes/function_lib.php");//brings in the function lib code



$s_name=$_POST["name"];// makes a var to store in the value

$s_breed=$_POST["Breed"];// makes a var to store in the value

$s_adoption_price=$_POST["AdoptionPrice"];// makes a var to store in the value

$s_Description=$_POST["Description"];// makes a var to store in the value

$new_ID=0;// makes the new id 0

$result = run_my_query("SELECT * FROM dog_table ORDER BY id DESC LIMIT 1");// selects the specific result from the table

while($row = mysql_fetch_array($result)){//fetchs the array
	
	$new_ID=$row["id"];// shows the new id
	
}

$new_ID++;
$s_Image1 = 'i'.$new_ID.$_FILES['ThumbnailImageName']['name'];//name for the small image

$s_Image2 = 'i'.$new_ID.$_FILES['LargeImageName']['name'];//name for  the big image





$s_Image1=$_FILES['ThumbnailImageName']['name'];// tells the image where to go

move_uploaded_file($_FILES['ThumbnailImageName']['tmp_name'],"img/$s_Image1");//puts the small image in the specific folder

move_uploaded_file($_FILES['LargeImageName']['tmp_name'],"img/$s_Image2");//puts the big image in the specific folder



run_my_query(" INSERT INTO dog_table 
(id,name,Breed,AdoptionPrice,Description,ThumbnailImageName,LargeImageName)
VALUES
(NULL, \"$s_name\", \"$s_breed\", \"$s_adoption_price\", \"$s_Description\", \"$s_Image1\", \"$s_Image2\")
");//shows what new information is  getting inserted into the dog_table.  You are running the query so it puts the new information on the page.




header("Location:dogs.php");//takes the user back to the home page.






//closes the php page?>



