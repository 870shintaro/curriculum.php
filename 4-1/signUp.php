<?php
// db_connect.phpの読み込みFILL_IN
require_once('db_connect.php');
// POSTで送られていれば処理実行

// nameとpassword両方送られてきたら処理実行
// PDOのインスタンスを取得FILL_IN
if(isset($_POST['name']) && isset($_POST['password'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $pdo = db_connect();
try {
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $sql = 'INSERT INTO users(name, password) VALUES(:name, :password)';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':password', $password_hash);
    $stmt->bindParam(':name', $name);
    $stmt->execute();
    echo '新規登録完了';
// SQL文の準備 FILL_IN 
// パスワードをハッシュ化
// プリペアドステートメントの作成 FILL_IN 
// 値をセット　FILL_IN
// 実行 FILL_IN
//　登録完了メッセージ出力
}catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
// エラーメッセージの出力 FILL_IN 
// 終了 FILL_IN
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <h1>新規登録</h1>
    <form method="POST" action="">
        user:<br>
        <input type="text" name="name" id="name">
        <br>
        password:<br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="submit" id="signUp" name="signUp">
    </form>
</body>
</html>
