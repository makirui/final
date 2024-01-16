<?php require 'db-connect.php'; ?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>delete-output</title>
    </head>
    <body>
        <h1>店舗削除</h1>
<?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('delete from Cafe where tenpo_id=?');
    if ($sql->execute([$_GET['tenpo_id']])) {
        echo '削除に成功しました';
    } else {
        echo '削除に失敗しました';    
    }
?>
    <br><hr><br>
	<table>
		<tr><th>店舗ID</th><th>店舗名</th><th>アクセス</th><th>営業時間</th></tr>
<?php
    foreach ($pdo->query('select * from Cafe') as $row) {
        echo '<tr>';
        echo '<td>',$row['tenpo_id'], '</td>';
        echo '<td>',$row['name'], '</td>';
        echo '<td>',$row['access'], '</td>';
        echo '<td>',$row['time'], '</td>';
        echo '</tr>';
        echo "\n";
    }
?> 
</table>
    <form action="delete.php" method="get">
        <button type="submit">削除画面へ戻る</button>
    </form>
    </body>
</html>

