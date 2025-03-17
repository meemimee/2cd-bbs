<?php
// エラー表示を有効化
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 既存のコード
include_once("/Applications/XAMPP/xamppfiles/htdocs/2ch-bbs/app/database/connect.php");
include("/Applications/XAMPP/xamppfiles/htdocs/2ch-bbs/app/functions/comment_add.php");
include("/Applications/XAMPP/xamppfiles/htdocs/2ch-bbs/app/functions/comment_get.php");
?>


<?php

include_once("/Applications/XAMPP/xamppfiles/htdocs/2ch-bbs/app/database/connect.php");
include("/Applications/XAMPP/xamppfiles/htdocs/2ch-bbs/app/functions/comment_add.php");
include("/Applications/XAMPP/xamppfiles/htdocs/2ch-bbs/app/functions/comment_get.php");

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規スレッド作成ページ</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body>

<?php include("/Applications/XAMPP/xamppfiles/htdocs/2ch-bbs/app/parts/header.php"); ?>

<!--バリデーションエラーのチェック吐き出し-->
<?php include("/Applications/XAMPP/xamppfiles/htdocs/2ch-bbs/app/parts/validation.php"); ?>
    <div style="padding-left: 36px; color: blue;">
        <h2 style="margin-top: 20px; margin-bottom: 0;">新規スレッド立ち上げ場</h2>
    </div>
    <form method="POST" class="formwrapper">
        <div>
            <label >スレッド名</label>
            <input type="text" name="title">
            <label >名前</label>
            <input type="text" name="username">
        </div>
        <div>
            <textarea name="body" class="commentTextArea"></textarea>
        </div>
        <input type="submit" value="スレッド立ち上げ" name="threadSubmitbuttan">
    </form>
</body>
</html>