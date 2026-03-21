docker hub images;

- https://hub.docker.com/repository/docker/753488/x3microservices_lists_service_mysql_image
- https://hub.docker.com/repository/docker/753488/x3microservices_lists_service_php_image
- https://hub.docker.com/repository/docker/753488/x3microservices_lists_service_nginx_image

docker-compose cli

```sh
docker-compose down --rmi all -v && docker-compose up -d
```

docker cli
```sh
cd /var/www/html/x3microservices-lists-service

docker logs x3microservices_lists_service_mysql_container

docker exec -it x3microservices_lists_service_php_container /bin/bash
docker exec -it x3microservices_lists_service_php_container /bin/bash /usr/local/bin/x3microservices-lists-service-php-entrypoint.sh
docker exec -it x3microservices_lists_service_nginx_container /bin/bash

docker exec -it x3microservices_lists_service_mysql_container /bin/bash
docker exec -it x3microservices_lists_service_mysql_container mysql -u user -p
```
