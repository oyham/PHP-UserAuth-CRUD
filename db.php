<?php

$server = 'localhost:3306';
$username = 'root';
$password = '';
$database = 'taskusers';

$conn2 = mysqli_connect(
  'localhost',
  'root',
  '',
  'taskusers'
) or die(mysqli_error($mysqli));

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}
