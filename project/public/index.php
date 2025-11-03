<?php
require_once "../config/database.php";

$db = new Database();
$conn = $db->connect();

$stmt = $conn->query("SELECT 'Hello World' AS msg");
$row = $stmt->fetch();

echo $row['msg'];
