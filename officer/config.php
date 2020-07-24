<?Php

//error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR);
$dbhost_name = "localhost";
$username = "root";          // Your database user id 
$password = "";          // Your password
$database = "prisonpro"; // Change your database name

//////// Do not Edit below /////////
$conn=mysqli_connect($dbhost_name,$username,$password,$database);
// Check connection
if (!$conn) {
  echo "Failed to connect to MySQL: " . mysqli_error($conn);
}
// else{
// 	echo "connected successfully".mysqli_error($conn);
// }



?>