<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>登録</title>
</head>
<body>
    <h1>店舗追加</h1>
    <a href="menu.php">メニューに戻る</a>
    <hr>
    <form action="insert-output.php" method="post">
        店舗名：
        <input type="text" name="name"><br>
        アクセス：
        <input type="text" name="access"><br>
        営業時間：
        <input type="text" name="time"><br>

        <p><button type="submit">登録</button>
        <br>
    </form>
</body>
</html>    