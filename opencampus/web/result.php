<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>手書き数字識別結果</title>
  <meta name="description" content="The contents of the open campus in the Univ. of Aizu">
  <meta name="author" content="An Aizu Student">
  <link rel="stylesheet" href="css/styles.css?v=1.0">
</head>

<body>
<?php
session_start();
$tempfile = $_FILES['fname']['tmp_name'];
$filename = './uploaded/' . $_SESSION["imgid"] . '-' 
  . $_FILES['fname']['name'];

if (is_uploaded_file($tempfile)) {
    if ( move_uploaded_file($tempfile , $filename )) {
        exec( 'python3.6 judgeNum.py ' . $filename , $out, $ret );
        echo '<h1>あなたの描いた数字は：</h1>'; 
        echo '<h1>' . $out[0]  . '</h1>';
        echo '<h2>確率： ' . $out[1]  . '</h2>';
        echo '<table border="1">';
        echo '<tr>';
        echo '<th>数字：確率</th>';
        echo '</tr>';
        foreach( array_slice($out, 2) as $result ){
          echo '<tr>';
          echo '<td>' . $result . '</td>';
          echo '</tr>';
        }
        echo '</table>';
    } else {
        echo 'ファイルをアップロードできません。';
    }
} else {
    echo 'ファイルが選択されていません。';
} 
?>
</body>

</html>
