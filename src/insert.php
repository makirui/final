<?php require './db-connect.php'; ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https:/cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>登録</title>
</head>
<body>
    <h1>店舗を追加</h1>
    <a href="menu.php">メニューに戻る</a>
    <hr>
    <form action method="post">
        店舗名：
        <input type="text" name="tenpo">
        <br>
        アクセス：
        <input type="text" name="access">
        <br>
        営業時間：
        <input type="text" name="time">
        <br>

        <p><button type="submit" name="action" value="send">登録</button>
        <br>
    </form>
</body>
</html>    