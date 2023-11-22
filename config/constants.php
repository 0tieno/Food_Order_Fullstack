<?php 

//create constants to non repeating values



$conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error()); //db connection
$db_select = mysqli_select_db($conn, 'food-order') or die(mysqli_error());//selecting db
?>