<?php require 'db-connect.php'; ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
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
            echo $row['name'], '<br>';
            echo $row['access'],'<br>';
            echo $row['time'];
            echo '</p>';
        }
    ?>
</body>
</html>