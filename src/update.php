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
        <div class="th0">店舗ID</div>
		<div class="th1">店舗名</div>
		<div class="th1">アクセス</div>
        <div class="th1">営業時間</div>
<?php
    $pdo=new PDO($connect, USER, PASS);

	foreach ($pdo->query('select * from Cafe') as $row) {
		echo '<form action="update-output.php" method="post">';
		//店舗ID
		echo '<input type="hidden" name="id" value="',$row['tenpo_id'], '">';
		echo '<div class="td0">',$row['tenpo_id'],'</div> ';
		echo '<div class="td1">';
		//店舗名
		echo'<input type="text" name="name" value="',$row['name'], '">';
		echo '</div> ';
		echo '<div class="td1">';
		//アクセス
		echo'<input type="text" name="access" value="',$row['access'], '">';
		echo '</div> ';
        //営業時間
		echo'<input type="text" name="time" value="',$row['time'], '">';
		echo '</div> ';
		//更新ボタン
		echo'<div class="td2"><input type="submit" value="更新"></div>';
		echo '</form>';
		echo "\n";
	}
?>

    </body>
</html>