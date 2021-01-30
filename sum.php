<?php

include_once('./dbconnect.php');

$sql = "SELECT records FROM amount";

$stmt = $pdo->prepare($sql);

$stmt->execute();

while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $message[] = $result;
    }

    var_dump($message);

//おやすみ
