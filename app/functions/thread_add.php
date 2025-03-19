<?php

$error_message = array();

if (isset($_POST["threadSubmitbuttan"])){

    //レッド入力チェック
    if(empty($_POST["title"])){
        $error_message["title"] = "タイトルを入力してください";
    } else {
            //エスケープ処理
            $escaped["title"] = htmlspecialchars($_POST["title"], ENT_QUOTES, "UTF-8");
        }
        //名前入力チェック
        if(empty($_POST["username"])){
            $error_message["username"] = "なまえを入力してください";
        } else {
                //エスケープ処理
                $escaped["username"] = htmlspecialchars($_POST["username"], ENT_QUOTES, "UTF-8");
            }
        
            //名前入力チェック
    if(empty($_POST["body"])){
        $error_message["body"] = "コメントを入力してください";
    } else {
            //エスケープ処理
            $escaped["body"] = htmlspecialchars($_POST["body"], ENT_QUOTES, "UTF-8");
        }


    if(empty($error_message)){
    $post_date = date("Y-m-d H:i:s");

    //スレッドを追加
    $sql = "INSERT INTO `thread` (`title`) VALUES (:title);";
    $statement = $pdo->prepare($sql);

    //値をセットする
    $statement->bindParam(":title", $escaped["title"], PDO::PARAM_STR);

    $statement->execute();
    }

//コメントも追加
$sql = "INSERT INTO comment (username, body, post_date, thread_id) 
VALUES (:username, :body, :post_date, (SELECT id FROM thread WHERE title = :title))";
$statement = $pdo->prepare($sql);

//値をセット
$statement->bindParam(":username", $escaped["username"], PDO::PARAM_STR);
$statement->bindParam(":body", $escaped["body"], PDO::PARAM_STR);
$statement->bindParam(":post_date", $post_date, PDO::PARAM_STR);
$statement->bindParam(":title", $escaped["title"], PDO::PARAM_STR);

$statement->execute();

//掲示板のホームへ戻る
header("Location: http://localhost:880/2ch-bbs");


}

?>