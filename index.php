<?php

include_once('./dbconnect.php');

$sql = "SELECT * FROM records";

$stmt = $pdo->prepare($sql);

$stmt->execute();

$records = $stmt->fetchAll();

var_dump($records);