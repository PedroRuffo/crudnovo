<?php
$username="root";
$password="1234";
$dbname="cabelereiro";
$localhost="localhost";
$port=3307;

try {
  $conexao = new   PDO("mysql:host=$localhost;port=$port;dbname=$dbname", $username, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage(); 
}
?>