<?php
require_once 'config.php';

echo "<h1>Hello World !</h1>";

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "<p>Connexion à la base de donnée réussi !</p>";
?>
