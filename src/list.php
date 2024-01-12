<?php require 'db-connect.php'; ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https:/cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>一覧</title>
</head>
<body>
    <h1>カフェ一覧</h1>
    <a href="menu.php">メニューに戻る</a>
    <hr>

    <?php
        $pdo=new PDO($connect, USER, PASS);
        foreach ($pdo->query{'select * from Cafe'} as $row){
            echo '<p>';
            echo $row['tenpo_id'], ':';
            echo $row['tenpo_name'], '<br>';
            echo $row['access'],'<br>';
            echo $row['time'];
            echo '</p>';
        }
    ?>
</body>
</html>