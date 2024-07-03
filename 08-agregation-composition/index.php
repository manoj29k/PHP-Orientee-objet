<?php

require_once './Database.php';

$conn = new Database();
$conn->dbConnect();
$pdo = $conn->getPdo();