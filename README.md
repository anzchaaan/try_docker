try-docker
====

# 目的
参考のリンクを参考にWindows10でdockerを使用し、  
PHP7の開発環境を構築するとこまで進める。

Docker toolboxを使用する。  
Docker for WindowsはWindows10 Proでないと使用できない。

# Docker toolboxのインストール
toolboxのインストールまで行う。  
https://qiita.com/maemori/items/52b1639fba4b1e68fccd  
  
・Kitematic初回起動後、「use VirtualBox」を選択する。  
・Starting Docker VM 立ち上げ時「100%」になってから暫く固まってしまってびっくり仰天ニュース案件。

# 追記
Linkを参考にLAMP環境を構築。  
https://qiita.com/kazuma1989/items/e08e8475fc5126f2363f#docker-compose-stop  

# command  
``
docker-compose up -d
``
  
``
docker-compose ps
``
  
``
docker-machine ip default
``
# 参考
docker run(コンテナ作成)する時のオプションあれこれ  
https://qiita.com/shimo_yama/items/d0c42394689132fcb4b6

適宜追加していく。  
