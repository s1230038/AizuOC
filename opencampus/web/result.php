<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>識別結果</title>
  <meta name="description" content="The contents of the open campus in the Univ. of Aizu">
  <meta name="author" content="An Aizu Student">
  <link rel="stylesheet" href="css/styles.css?v=1.0">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109572615-2"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109572615-2');
  </script>
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-8170054122978169",
    enable_page_level_ads: true
  });
  </script>
</head>

<body>
<?php
session_start();
$tempfile = $_FILES['fname']['tmp_name'];
$filename = './uploaded/' . $_SESSION["imgid"] . '-' ;

if (is_uploaded_file($tempfile)) {
    if ( move_uploaded_file($tempfile , $filename )) {
        $filename = escapeshellcmd($filename);
        $filename_s = escapeshellarg($filename); // _s : _safe
        exec( 'python3.6 judgeNum.py ' . $filename_s, $out, $ret );
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
        exec( 'rm -f ' . $filename_s );
    } else {
        echo '<h1>ファイルをアップロードできません。</h1>';
    }
} else {
    echo '<h1>ファイルが選択されていません。</h1>';
} 
?>
  <a href="index.php">戻る</a>
</body>
</html>
