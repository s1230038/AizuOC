<?php
session_start();
$tempfile = $_FILES['fname']['tmp_name'];
$filename = './uploaded/' . $_SESSION["imgid"] . '-' 
  . $_FILES['fname']['name'];

if (is_uploaded_file($tempfile)) {
    if ( move_uploaded_file($tempfile , $filename )) {
        echo $filename . "をアップロードしました。";
        echo $_SESSION["imgid"];
    } else {
        echo "ファイルをアップロードできません。";
    }
} else {
    echo "ファイルが選択されていません。";
} 
?>
