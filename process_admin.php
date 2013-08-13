<?php
session_start();//look at the  identifier we are assigned as a session starts


//store the uname and upass that the user typed in on the login page

$theirname="";//stores the name
 if(isset($_POST['uname'])) {//stores the name
      $_POST['uname'] = trim($_POST['uname']);//stores the name
     if(preg_match('/^[a-zA-Z0-9^$.*+\[\]{,}]{1,24}$/u', $_POST['uname'])){//stores the name
         $theirname = $_POST['uname'];//stores the name
     }
 }
 
 
 
 
 
 
 $theirpass="";//stores the password
 if(isset($_POST['upass'])) {//stores the password
      $_POST['upass'] = trim($_POST['upass']);//stores the password
     if(preg_match('/^[a-zA-Z0-9^$.*+\[\]{,}]{1,24}$/u', $_POST['upass'])){//stores the password
         $theirpass = $_POST['upass'];//stores the password
     }
 }



include ("includes/function_lib.php");//run a query to see if there's anyone in the user table by that info;
$result = run_my_query("SELECT * FROM user_table WHERE username=\"$theirname\" AND password=\"$theirpass\"");//looks for the correct information from the user_table



if ($row = mysql_fetch_array($result)){//if  a user was found then run the query.

	//do helpful things
	
	
	
	//access a session;
	
	
	
	
	
	
	
	$_SESSION['user_name']=$row['username'];//store their username
	
	$_SESSION['user_priv']=$row['privilege'];// gives user privilege to add or delete records.
	
	
	//echo session_id();
	header('Location:dogs.php');//takes them back to the dogs page


}else{//.... else tell them the password or admin name is invlaid.....







header('Location:admin_login.php');//redirects user to back to the admin page

  echo "Invalid";//make them try logging in again.
}



?>