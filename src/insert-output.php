<?php require 'db-connect.php'; ?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>insert-output</title>
    </head>
    <body>
        <h1>店舗追加</h1>
<?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('insert into Cafe(name,access,time) values (?,?,?)');
    if (empty($_POST['name'])) {
        echo '店舗名を入力してください';
    }else if (empty($_POST['access'])) {
        echo 'アクセスを入力してください';
    }else if (empty($_POST['time'])) {
        echo '営業時間を入力してください';
    }else if ($sql->execute([ $_POST['name'], $_POST['access'], $_POST['time'] ]) ) {
        echo '追加しました';
    }else {
        echo '追加に失敗しました';
    }
?>
    <br><hr><br>
    <table>
        <tr><th>店舗ID</th><th>店舗名</th><th>アクセス</th><th>営業時間</th><tr>
<?php
    foreach ($pdo->query('select * from Cafe') as $row){
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
    <from action="insert.php" method="post">
    <button onclick="location.href='insert.php'">追加画面へ戻る</button>
    </form>
    </body>
</html>