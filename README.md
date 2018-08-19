# AizuOC
The 2018 open campus website in the university of Aizu  
これは、「会津大学 認知科学講座 オープンキャンパス2018」で紹介した「ディープラーニングによる手書き数字識別器」の特設Webサイトで使用したソースコードです。一桁の手書き数字の画像を識別できます。  

なお、MNISTの訓練データを学習に使いました。

# How to install and deploy
* GitHubからソースコードをクローンする
* PHPをインストールする（PHP 7.1.13 で動作確認）
* python3.6をインストールする
* PIP3.6をインストールする
* 次のコマンドを実行する $ pip3.6 install -r requirements.txt
* SELinuxのコンテキストを適切に設定する。その方法が分からない場合は、Permissive に設定する
* deploy.sh　のDIR変数に、Webサイトを公開したいディレクトリを設定する
