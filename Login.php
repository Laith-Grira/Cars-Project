<?php 
$personUserName = $_POST['Username'];
$personPassword = $_POST['psw'];
echo $personUserName;
echo $personPassword."<br>";

//$personUserName = stripcslashes($personUserName);
//$personPassword = stripcslashes($personPassword);
//$personUserName = mysqli_real_escape_string($personUserName);
//$personPassword = mysqli_real_escape_string($personPassword);

$servername = "localhost";
$username = "root";
$password = "root";
$database_name = "projectcars";

//Connect
$conn = mysqli_connect($servername, $username, $password, $database_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully "."<br>";
echo $personUserName;
echo $personPassword;

$result = mysqli_query($conn, "SELECT * FROM `carsaccounts` WHERE `Username` = '$personUserName' AND `Password` = '$personPassword' ");
echo "**********";
$row = mysqli_fetch_array($result);
echo $row['Username'];
if ($row['Username'] == $personUserName && $row['Password'] == $personPassword) {
    header('Location: MainPage.html');

} else {
	header('Location: HomePageError.html');
}


 ?>
