<?php require 'db-connect.php'; ?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https:/cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
        <title>update-output</title>
    </head>
    <body>
        <h1>店舗更新</h1>
<?php
    $pdo=new PDO($connect, USER, PASS);
    // SQL発行準備 prepareメソッド
    $sql=$pdo->prepare('update Cafe set name=?, access=?, time=? where id=?');
    if (empty($_POST['name'])) {
        echo '店舗名を入力してください';
    } else
    if (empty($_POST['access'])) {
        echo 'アクセスを入力してください';
    } else
    if (empty($_POST['time'])) {
        echo '営業時間を入力してください';
    } else
    //SQLを発行 excuteメソッド
    if ($sql->execute([htmlspecialchars($_POST['name']), $_POST['access'], $_POST['time'], $_POST['tenpo_id']])){
    //更新に成功しました　
        echo '更新に成功しました';
    //更新に失敗しまし　
    }else{
        echo '更新に失敗しました';
    }

?>
        <hr>
        <table>
        <tr><th>店舗ID</th><th>店舗名</th><th>アクセス</th><th>営業時間</th></tr>

<?php
foreach ($pdo->query('select * from Cafe') as $row) {
    echo '<tr>';
    echo '<td>', $row['tenpo_id'], '</td>';
    echo '<td>', $row['name'], '</td>';
    echo '<td>', $row['access'], '</td>';
    echo '<td>', $row['time'], '</td>';
    echo '</tr>';
    echo "\n";
}
?>
        </table>
        <button onclick="location.href='update.php'">更新画面へ戻る</button>
    </body>
</html>


    