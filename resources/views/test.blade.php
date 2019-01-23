<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <!-- jQueryの読み込み -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>

<!-- テキストフォーム -->
<input type="text" id="inputText" placeholder="パラメータを入力してください">


<!-- リンク -->
<a href="#" id="link">リンク</a>


<!-- ▼ jQueryによる処理 ▼ -->
<script>
$(function() {

    // テキストフォームを監視して入力があるたびに実行
    $('#inputText').on('input change', function() {

        // テキストを取得
        var param = $(this).val();

        // リンクを書き換え
        $('#link').attr('href', '/param=' + param);

    });

});
</script>
<!-- ▲ jQueryによる処理 ▲ -->


</body>
</html>