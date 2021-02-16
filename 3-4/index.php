<?php 
require_once('getData.php');
require_once('pdo.php');
$getData = new getData();
// $getData->getUserData();
// $getData->getPostData();
 $user = $getData->getUserData();
 $posts = $getData->getPostData();
?>
<!doctype>
<html lang="ja"> 
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class='logo'>
        <img src="logo.png"　width='200' height='120'>
        </div>  
        <div class = 'name'>
        <?php echo 'ようこそ'.$user['last_name'].$user['first_name']; ?> </div>
        <div class = 'time'>
        <?php echo '最終ログイン日:'. $user['last_login']?></div>
    </header>
    <table>
        <tr class = 'title'>
            <td>記事</td>
            <td>タイトル</td>
            <td>カテゴリ</td>
            <td>本文</td>
            <td>登校日</td>
        </tr>
        <?php foreach ($posts as $value) { ?>
            <tr class = 'contents'>
            <td><?php echo $value['id']; ?></td>
            <td><?php echo $value['title']; ?></td>
            <td><?php if($value['category_no'] == 1) { ?>
            <?php   echo '食事';?>
            <?php  } else if ($value['category_no'] == 2) {?>
            <?php   echo '旅行';?>
            <?php } else {?>
            <?php echo 'その他'; ?>
            <?php } ?></td>
            <td><?php echo $value['comment']; ?></td>
            <td><?php echo $value['created']; ?></br></td>
            </tr>
        <?php } ?>
    </table>
    <footer>
        <p>Y&I group.inc</p>
    </footer>
</body>
