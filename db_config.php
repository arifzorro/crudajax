<?php
//$con=mysqli_connect("localhost","root","","h_blog");
//// Check connection
//if (mysqli_connect_errno())
//{
//    echo "Failed to connect to MySQL: " . mysqli_connect_error();
//}
//
//?>


<?php
define ("DB_USER", "root");
define ("DB_PASSWORD", "");
define ("DB_DATABASE", "h_blog");
define ("DB_HOST", "localhost");
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
?>