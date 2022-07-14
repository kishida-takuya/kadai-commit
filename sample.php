<?php
    $result = "無し";
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>おみくじ</title>
    </head>
    <body>
        <h1>おみくじ</h1>
        <p>おみくじの結果：<?php print htmlspecialchars($result, ENT_QUOTES, "UTF-8"); ?></p>
        <form acition="sample.php" method="POST">
            <button type="submit" name="act" valeu="draw">おみくじを引く！</botton>
        </form>
    </body>
</html>