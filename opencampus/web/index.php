<?php
  session_start();
?>
<!doctype html>

<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>手書き数字識別機</title>
  <meta name="description" content="The contents of the open campus in the Univ. of Aizu">
  <meta name="author" content="An Aizu Student">
  <link rel="stylesheet" href="css/styles.css?v=1.0">
</head>

<body>
  <h1>手書き数字識別機</h1>
  <h2>会津大学 認知科学講座 オープンキャンパス2018 </h2>
  <p>0から9の内の一桁の手書き数字の画像をアップロードしてください(JPEGまたはPNG)。</p>
  <?php
    if (!isset($_SESSION["imgid"])){
      $_SESSION["imgid"] = mt_rand();
    }
    $msg = '<p>' + $_SESSION["imgid"] + '</p>';
    print($msg);
  ?>
  <form enctype="multipart/form-data" action="__URL__" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="90000000" />
    <!-- input 要素の name 属性の値が、$_FILES 配列のキーになります -->
    <input name="userfile" type="file" />
    <input type="submit" value="画像ファイルを送信" />
  </form>
</body>
</html>
