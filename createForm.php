<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit.css">
    <title>かけいぼ</title>
</head>


<body>
    <div class="hd">
        <h1>追加フォーム</h1>
    </div>
    <form class="" action="./create.php" method="POST">
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
                <input class="form_check_input" type="radio" name="type" id="income" value="0" checked>
                <label class="form_check_lavel" for="income">収入</label>
            

            <input class="form_check_input" type="radio" name="type" id="spending" value="1">
            <label class="form_check_lavel" for="spending">支出</label>
            
        </div>
    </div>
    <div class="bt">
    <button type="submit" class="btn btn-primary">追加</button</div>
    </form>
</body>

</html>
