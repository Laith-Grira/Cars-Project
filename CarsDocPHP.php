<?php
//print _r($_GET);
$personEmail = $_GET['Email'];
$personUserName = $_GET['Username'];
$personPassword = $_GET['psw'];

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
echo "Connected successfully";
 //connecting with the database
 $sql_stat = "INSERT INTO `carsaccounts`(`Email`, `Username`, `Password`) VALUES ('$personEmail','$personUserName','$personPassword')";
if (mysqli_query($conn, $sql_stat)) {
    header('Location: SuccessfulAccount.html');

} else {
    echo "Error: " . $sql_stat . "<br>" . mysqli_error($conn);
}
?>
