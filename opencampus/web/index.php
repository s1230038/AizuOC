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
  <h1>ディープラーニングによる手書き数字識別器</h1>
  <h2>会津大学 認知科学講座 オープンキャンパス2018 </h2>
  <p>0から9の内の一桁の手書き数字の画像を送信してください。</p>
  <p>認識率を上げるコツ</p>
  <ul>
  <li>写真よりもペイントソフトで描く</li>
  <li>白地に太い黒文字で数字を描く</li>
  <li>画像ファイルの縦横のサイズはなるべく小さくする</li>
  </ul>
  <?php
    if (!isset($_SESSION["imgid"])){
      $_SESSION["imgid"] = mt_rand();
    }
  ?>
  <form enctype="multipart/form-data" action="result.php" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="90000000" />
    <input name="fname" type="file" />
    <input type="submit" value="送信" />
  </form>
</body>
</html>
