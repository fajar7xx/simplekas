<?php  
session_start();

date_default_timezone_set('Asia/Jakarta');

// erroe_report
ini_set('display_errors' , 1);
error_reporting(E_ALL);

// koneksi
$host = "localhost";
$username = "root";
$pass = "";
$db = "simplekas";

$conn = mysqli_connect($host, $username, $pass, $db);

// cek koneksi
if(!$conn){
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

// echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
// echo "<br>";
// echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;

?>