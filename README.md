## wordpress-on-docker

- ref:
    - [クィックスタート: Compose と WordPress — Docker-docs-ja 24.0 ドキュメント](https://docs.docker.jp/compose/wordpress.html)


## 起動手順

```sh
docker-compose up -d
docker exec -ti wordpress-on-docker-wordpress-1 /bin/bash
chown -R www-data:www-data /var/www/html/wp-content/themes/tapbiz_theme
ls -ld /var/www/html/wp-content/themes/tapbiz_theme
```
