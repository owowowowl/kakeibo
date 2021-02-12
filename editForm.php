<?php

include_once('./dbconnect.php');
include_once('./function.php');

$id= $_GET['id'];

if (false === isset($_GET['id'])){
    header('Location: index.php');
}


$sql = "SELECT * FROM records WHERE id = :id";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id',$id,PDO::PARAM_INT);

//SQLの実行
$stmt->execute();
$record = $stmt->fetch();
//var_dump($record);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編集</title>
    <link rel="stylesheet" href="edit.css">
    <form class="m-5" action="./update.php" method="POST">

    <input type="hidden" name="id" value="<?= h($id);?>">
</head>

<body>

    <div class="hd">
        <h1>編集フォーム</h1>
    </div>
    <div class="bt"><a href="./index.php">戻る</a></div>
    <div id="wrap">


        <div class="box">
            <div class="con">
                <label for="date">日付</label>
                <input type="date" class="form-control" id="date" name="date" value="<?=h($record['date']);?>">
            </div>
            <div class="con">
                <label for="title">メモ</label>
                <input type="text" class="form-control" id="title" name="title" value="<?=h($record['title']);?>">
            </div>
            <div class="con">
                <label for="amount">金額</label>
                <input type="number" class="form-control" id="amount" name="amount" value="<?=h($record['amount']);?>">
            </div>

            <input class="" type="radio" name="type" id="income" value="0" <?= h($record['type']) == 0 ? 'checked' : '';?>>
            <label for="">収入</label>

            <input class="" type="radio" name="type" id="spending" value="1" <?= h($record['type']) == 1 ? 'checked' : '';?>>
            <label for="">支出</label>    
        </div>
    </div>
    <div class="bt"><button type="submit" class="btn btn-primary">編集</button></div>
    </form>
</body>

</html>
