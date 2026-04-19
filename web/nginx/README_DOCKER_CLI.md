# Nginx Docker CLI

## Nginx Docker Build

```sh
docker build -t x3microservices_lists_service_nginx_image:v1 .
docker run -d --name x3microservices_lists_service_nginx_container -p 8002:8002 x3microservices_lists_service_nginx_image:v1
```

## Nginx Docker exec
```sh
docker exec -it x3microservices_lists_service_nginx_container /bin/sh
```
