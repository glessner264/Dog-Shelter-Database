<?php

//redirect user away if they havnet logged in





include ("includes/function_lib.php");//links to the function lib page


$chosen_id=$_POST["view_id"];//views the chosen id

run_my_query("DELETE FROM dog_table WHERE id=$chosen_id");//deletes the specific dog when you click delete




header("Location:dogs.php");//sends user back to the dogs page

?>