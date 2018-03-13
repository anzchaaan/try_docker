try-docker
====

参考のリンクを参考にWindows10でdockerを使用し、  
PHP7の開発環境を構築するとこまで進める。

Docker for WindowsはWindows10 Proでないと使用できないようだ…  
Microsoft税払えないのでDocker Toolboxを使用する。

# Docker Toolbox Install
toolboxのインストールを行う。  
https://qiita.com/maemori/items/52b1639fba4b1e68fccd  
  
・Kitematic初回起動後、「use VirtualBox」を選択する。  
・Starting Docker VM 立ち上げ時「100%」になってから暫く固まってしまってびっくり仰天ニュース。

# LAMP環境 構築
Linkを参考にファイルを配置し、dockerを起動する。  
https://qiita.com/kazuma1989/items/e08e8475fc5126f2363f#docker-compose-stop  

今回はdockerフォルダを切ったため、ディレクトリ構成が一部異なる。  
また、PHPは7を使用する。  
docker-compose.ymlを一部書き換える。

```
nginx:
    image: skiychan/nginx-php7
    ports:
        - "80:80"
    volumes:
        - ../src:/var/www/html
    links:
        - mysql:db
```

#   
以下のURLにアクセスし、phpinfoが表示されることを確認  
http://192.168.99.100/  
http://192.168.99.100/index.php

# Command  
docker 起動  
``
docker-compose up -d
``

docker 終了  
``
docker-compose down
``
  
  
プロセス確認  
``
docker-compose ps
``
  
IPアドレス確認  
``
docker-machine ip default
``

dockerの中に入る  
``
docker exec -it docker_nginx_1 bash
``

# 参考
よく使うDockerコマンド  
https://qiita.com/tera_shin/items/8a43e904bd15990d3129

docker run(コンテナ作成)する時のオプションあれこれ  
https://qiita.com/shimo_yama/items/d0c42394689132fcb4b6

適宜追加していく。  
