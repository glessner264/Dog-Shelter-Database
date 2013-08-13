<?php
function run_my_query($query){//a function that runs the query



$handle = mysql_connect('nategmediacom.ipagemysql.com', 'nategmedia', '*password*'); 
if ($handle==false) { 
    die('Could not connect: ' . mysql_error()); 
} 
//echo 'Connected successfully'; 
$db = mysql_select_db('dogshelter')
or die("DB problem -".mysql_error());



$result = mysql_query($query) or die ("Query problem - ".mysql_error());//run the query, storing the results in an array

mysql_close ($handle);//close your server connection

return $result;//returns the result
}
?>
