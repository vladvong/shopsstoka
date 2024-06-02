<?php 
$servername = "MySQL-8.2";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=CRUDBD", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>

