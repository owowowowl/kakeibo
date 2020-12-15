<?php

include_once('./dbconnect.php');

include_once('./function.php');

$sql = "SELECT * FROM records";

$stmt = $pdo->prepare($sql);

$stmt->execute();

$records = $stmt->fetchAll();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="tb">
              <tr>
                <th scope="col" class="col-2">日付</th>
                <th scope="col" class="col-3">タイトル</th>
                <th scope="col" class="col-2">収入</th>
                <th scope="col" class="col-2">支出</th>
                <th scope="col" class="col-3">操作</th>
              </tr>
            </thead>

    <?php foreach($records as $record): ?>
    <tr>
        <td class ="col-2"> <?php echo h($record['date']);?></td>
        <td class ="col-3"> <?php echo h($record['title']);?></td>
        <td class ="col-2"> <?php echo h($record['type']) == 0 ? h($record['amount']) : '' ?></td>
        <td class ="col-2"> <?php echo h($record['type'])== 1 ? h($record['amount']) : '';?></td>
        
        <td class ="col-3"> 
        <a href ="./editForm.php?id=<?php echo h($record['id']); ?>" class="btn-succes textlight">編集</a>
        <a href ="./delete.php" class="btn-succes textlight">消去</a>
        
        </td>
    </tr>
    <?php endforeach;?>
</body>
</html>

