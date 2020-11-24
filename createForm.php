<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>かけいぼ</title>
</head>
<body>
    <form class="" action="./create.php" method = "POST">

        <label for="date">日付</label>
        <input type="text" class ="form-control" id="date" name="date">
    

    
        <label for="title">タイトル</label>
        <input type="text" class ="form-control" id="title" name="title">
    

    
        <label for="amount">金額</label>
        <input type="text" class ="form-control" id="amount" name="amount">
    
    
        <input class="form_check_input" type="radio" name="type" id="income" value="0" checked>
        <label class="form_check_lavel" for="income">収入</label>  


        <input class="form_check_input" type="radio" name="type" id="spending" value="1">
        <lavel class="form_check_lavel" for="spending">支出</label>
    
        <button type="submit" class="btn btnprimary">追加</button>
    
</body>
</html>