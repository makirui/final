<?php require 'db-connect.php'; ?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https:/cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
        <title>削除</title>
    </head>
    <body>
        <h1>店舗削除</h1>
        <a href="menu.php">メニューに戻る</a>
        <hr>

        <table>
        <tr><th>店舗ID</th><th>店舗名</th><th>アクセス</th><th>営業時間</th></tr>
    
<?php
    $pdo=new PDO($connect, USER, PASS);
    foreach ($pdo->query{'select * from Cafe'} as $row){
        echo '<tr>';
        echo '<td>',$row['tenpo_id'], '</td>';
        echo '<td>',$row['name'], '</td>';
        echo '<td>',$row['access'], '</td>';
        echo '<td>',$row['time'], '</td>';
        echo '<td>';
        echo '<a href="delete-output.php?id=', $row['tenpo_id'], '">削除</a>';
        echo '</td>';
        echo '</tr>';
        echo "\n";
    }
?>
    </table>
    </body>
</html>
