<?php
    $position = 0;
    if(isset($_POST["submitButton"])){
        $position = $_POST["position"];
    }
?>


<form class="formwrapper" method="POST">
                <div>
                    <input type="submit" value="書き込む" name="submitButton">
                    <label>名前：</label>
                    <input type="text" name="username">
                    <input type ="hidden" name = "threadID" value ="<?php echo $thread["id"]; ?>">
                </div>
                <div>
                    <textarea class="commentTextArea" name="body"></textarea>
                </div>
            <!--位置取得用-->
            <input type ="hidden" name ="position" value ="0">

            </form>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    //console.log($(window).scrollTop());
    $(document).ready(() =>{
        $("input[type=submit]").click(() => {
            //現在のスクロール位置を取得
            let position = $(window).scrollTop();
            $("input:hidden[name=position]").val(position);
        })
        $(window).scrollTop(<?php echo $position;?>);
    }) 
</script>

