<?php require 'db-connect.php'; ?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>更新</title>
    </head>
    <body>
        <h1>店舗情報更新</h1>
        <a href="menu.php">メニューに戻る</a>
        <hr>
        <table>
        <tr><th>店舗ID</th><th>店舗名</th><th>アクセス</th><th>営業時間</th></tr>
    
<?php
    $pdo=new PDO($connect, USER, PASS);
    foreach ($pdo->query('select * from Cafe') as $row){
		echo '<form action="update-output.php" method="post">';
		
        echo '<tr>';
        echo '<input type="hidden" name="tenpo_id" value="',$row['tenpo_id'], '">';
		echo '<td>',$row['tenpo_id'], '</td>';

        echo '<td>','<input type="text" name="name" value="',$row['name'], '">', '</td>';

        echo '<td>','<input type="text" name="access" value="',$row['access'], '">', '</td>';

        echo '<td>','<input type="text" name="time" value="',$row['time'], '">', '</td>';
        echo '<td>';
        echo '<input type="submit" value="更新">';
        echo '</td>';
        echo '</tr>';
		echo '</form>';
        echo "\n";
    }
?>
    </table>
    </body>
</html>