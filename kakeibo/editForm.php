<?php

include_once('./dbconnect.php');
include_once('./function.php');

$id= $_GET['id'];

$sql = "SELECT * FROM records WHERE id = :id";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id',$id,PDO::PARAM_INT);

//SQLの実行
$stmt->execute();
$record = $stmt->fetch();
//var_dump($record);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <form class="m-5" action ="./update.php" method="POST">
    <a href="./index.php">戻る</a>
    <input type ="hidden" name ="id" value="<?= h($id);?>">
</head>
<body>
<h1>編集フォーム</h1>
<label for="title">タイトル</label>
<input type="date" class ="form-control" id="date" name="date" value="<?=h($record['date']);?>">
<label for="date">日付</label>
<input type="text" class ="form-control" id="title" name="title" value="<?=h($record['title']);?>">
<label for="amount">金額</label>
<input type="number" class ="form-control" id="amount" name="amount" value="<?=h($record['amount']);?>">

<input class="" type="radio" name="type" id="income" value="0"
    <?= h($record['type']) == 0 ? 'checked' : '';?>
>
<label for="">収入</label>

<input class="" type="radio" name="type" id="spending" value="1"
    <?= h($record['type']) == 1 ? 'checked' : '';?>
>
<label for="">支出</label>

<button type="submit" class="btn btn-primary">編集</button>
</body>
</html>