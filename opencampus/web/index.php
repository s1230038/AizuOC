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
  <h3>場所 345-F   時間 10:00-12:00  13:00-15:00</h3>
  <p>0から9の内の一桁の手書き数字の画像を送信してください。</p>
  <?php
    if (!isset($_SESSION["imgid"])){
      $_SESSION["imgid"] = mt_rand();
    }
  ?>
  <form enctype="multipart/form-data" action="result.php" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="8388608" />
    <input name="fname" type="file" />
    <input type="submit" value="送信" />
  </form>
  <p>ワンポイント　アドバイス</p>
  <ul>
  <li>白地に太い黒文字で、数字を真ん中に描く</li>
  <li>画像をなるべく小さい正方形にトリミングする</li>
  <li>ペイントソフトで描いた数字も送信可</li>
  <li>MS-Paintの場合は、28x28のキャンバス上で、ブラシを選択し線の幅を２番目にすると精度が良い。</li>
  </ul>
  <a href="howToUse.pdf" target="_blank">詳しい説明(PDF)</a><br>
</body>
</html>
