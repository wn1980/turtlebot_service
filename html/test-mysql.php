<h1>Hello Cloudreach!</h1>
<h4>Attempting MySQL connection from php...</h4>
<?php 
$host = 'db';
$user = 'root';
$pass = '123456';
$db = 'mysql';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected to MySQL successfully!";
?>
