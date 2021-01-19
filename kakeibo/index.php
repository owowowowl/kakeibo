<?php

include_once('./dbconnect.php');
include_once('./function.php');

$sql = "SELECT * FROM records";

$stmt = $pdo->prepare($sql);

$stmt->execute();

$records = $stmt->fetchAll();
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href='style.css'>
    <title>家計簿アプリ</title>

</head>

<body>

    <div class="add"><a href="createForm.php">
            <p>追加</p>
        </a></div>
    <div class="BB">
        <div class="box">

            <table class="tb">
                <thead>
                    <tr>
                        <th class="col-2">日付</th>
                        <th class="col-3">タイトル</th>
                        <th class="col-2">収入</th>
                        <th class="col-2">支出</th>
                        <th class="col-3">操作</th>
                    </tr>
                </thead>

               <tbody>
                <?php foreach($records as $record): ?>
                
                <tr>
                    <td> <?php echo h($record['date']);?></td>
                    <td> <?php echo h($record['title']);?></td>
                    <td> <?php echo h($record['type']) == 0 ? h($record['amount']) : '' ?></td>
                    <td> <?php echo h($record['type'])== 1 ? h($record['amount']) : '';?></td>

                    <td><a href="./editForm.php?id=<?php echo h($record['id']); ?>" class="btn-succes textlight">編集</a></td>
                    <td><a href="./delete.php?id=<?php echo h($record['id']); ?>" class="btn-succes textlight">消去</a></td>
                </tr>

    <?php endforeach;?>
                    </tbody>
            </table>
        </div>
    </div>
</body>

</html>
