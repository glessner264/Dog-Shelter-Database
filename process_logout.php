<?php
session_start();//starts session
session_destroy();//logout session gets destroyed and doesn't allow access to delete or add until user logs back in.


header("Location:dogs.php");//takes user back to the dogs for adoption 



?>