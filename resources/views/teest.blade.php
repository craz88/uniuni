<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>タイトル</title>
</head>
<body>
<a href="https://example.com" id="anchor1">テキスト</a>
<script>
    var id = 123456789;
    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("anchor1").setAttribute("href", document.getElementById("anchor1").getAttribute("href") + "/" + id + "/");
    }, false);
</script>
</body>
</html>