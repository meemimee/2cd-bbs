<?php include(__DIR__ . '/../functions/thread_get.php'); 

// デバッグ用：$thread_array の内容を表示
//echo '<pre>';
//print_r($thread_array);
//echo '</pre>';

// エラー表示を有効化
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php foreach($thread_array as $thread): ?>


    <div class="threadWrapper">
        <div class="childWrapper">
            <div class="threadTitle">
                <span>【タイトル】</span>
                <h1><?php echo $thread["title"] ?></h1>
            </div>
<?php include(__DIR__ . '/../parts/commentsection.php'); ?>
<?php include(__DIR__ . '/../parts/commentfrom.php'); ?>
        </div>
    </div>
<?php endforeach; ?>