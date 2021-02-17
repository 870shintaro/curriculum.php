<?php
// db_connect.phpの読み込み
require_once('db_connect.php');
// function.phpの読み込み
require_once('function.php');

// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();

// PDOのインスタンスを取得
$pdo = db_connect();

// $row = find_post_by_id();
// $id = $row['id'];
// $title = $row['title'];
// $date = $row['date'];
// $stock = $row['stock'];
try {
    // SQL文の準備
    $sql = 'SELECT * FROM books';
    // プリペアドステートメントの作成
    $stmt = $pdo->prepare($sql);
    // 実行
    $stmt->execute();
} catch (PDOException $e) {
    // エラーメッセージの出力
    echo 'Error: ' . $e->getMessage();
    // 終了
    die();
}
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>メイン</title>
</head>
<body>
<style>
#button {
        background-color:#0099FF;
        color:#ffffff; 
        width:65px;
    }
td{
    border: solid 3px #000000;
    border-width:thin;
    padding:15px 20px 15px 20px;
    text-align:center;
}
table {
    border-collapse: collapse ;
    margin-top: 10px;
}
.categories {
    background-color:#cccccc;
}
button {
    background-color:#ff0000;
    color:#ffffff;
}
</style>
<h2>在庫一覧画面</h2>
<input id="button"　type="button" onClick="location.href='signUp.php'" value="新規登録">
<input type="button" onClick="location.href='logout.php'" value="ログアウト">
<table>
<tr class="categories">
            <td>タイトル</td>
            <td>発売日</td>
            <td>在庫数</td>
            <td>　　　</td>
</tr>
<?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
    <tr>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['date']; ?></td>
        <td><?php echo $row['stock']; ?></td>
        <td><a href="delete.php?id=<?php echo $row['id']; ?>"><button>削除</button></a></input></td>
        <?php } ?>
    </tr>
</table>
</body>
</html>