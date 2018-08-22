# AizuOC
The 2018 open campus website in the university of Aizu  
これは、「会津大学 認知科学講座 オープンキャンパス2018」で紹介した「ディープラーニングによる手書き数字識別器」の特設Webサイトで使用したソースコードです。一桁の手書き数字の画像を識別できます。

同様のデモサイトを製作したい方の参考に資すれば幸いです。

# How to install
* GitHubからソースコードをクローンする
* PHPをインストールする（PHP 7.1.13 で動作確認）
* python3.6をインストールする
* PIP3.6をインストールする
* 次のコマンドを実行する $ pip3.6 install -r requirements.txt
* SELinuxのコンテキストを適切に設定する。その方法が分からない場合は、Permissive に設定する

# How to deploy
* deploy.sh　のDIR変数に、Webサイトを公開したいディレクトリを設定する
* 次のコマンドを実行してファイルを配備(deploy)する $ ./deploy.sh

# About DL training
Deep Learning の訓練データとしてMNISTを、ニューラルネットワークとしてkerasのサンプルコードを使用しました。詳しくは MNIST_forOpenCampus.ipynb をダウンロードし Google Colaboratory で実行してご確認ください。
