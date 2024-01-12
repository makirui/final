<?php require './db-connect.php'; ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https:/cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>更新</title>
</head>
<body>
    <h1>カフェ一覧</h1>
    <a href="menu.php">メニューに戻る</a>
    <hr>
    <form action="" method="post">
        <button type="submit" name="update">更新</button>
        <p>
            <input type="radio" name="cafeid" value="">
        </p>
    </form>
</body>
</html>