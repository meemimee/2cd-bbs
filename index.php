<?php
// エラー表示を有効化
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once("./app/database/connect.php");
include("./app/functions/comment_add.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>２ちゃんねる掲示板</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>

<?php include("./app/parts/header.php"); ?>

<!--バリデーションエラーのチェック吐き出し-->
<?php include("./app/parts/validation.php"); ?>

    <!-- スレッドエリア -->
     <?php include("./app/parts/thread.php"); ?>
     <?php include("./app/parts/newthreadbuttan.php"); ?>
</body>
</html>