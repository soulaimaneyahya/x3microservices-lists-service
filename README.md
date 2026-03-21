<div align="center">

# project3-microservices-lists-service

[![CI](https://github.com/soulaimaneyahya/x3microservices-lists-service/actions/workflows/ci.yaml/badge.svg)](https://github.com/soulaimaneyahya/x3microservices-lists-service/actions/workflows/ci.yaml)
[![CI-CD](https://github.com/soulaimaneyahya/x3microservices-lists-service/actions/workflows/ci-cd.yaml/badge.svg)](https://github.com/soulaimaneyahya/x3microservices-lists-service/actions/workflows/ci-cd.yaml)

</div>

- [Infra](https://github.com/soulaimaneyahya/x3microservices-infra)
- [Users service / API Gateway](https://github.com/soulaimaneyahya/x3microservices-user-service)
- [Lists service](https://github.com/soulaimaneyahya/x3microservices-lists-service)
- [Tasks service](https://github.com/soulaimaneyahya/x3microservices-tasks-service)


```sh
composer install
cp .env.example .env
```

Generate key
```sh
php -r "echo 'base64:' . base64_encode(random_bytes(32)) . PHP_EOL;"
```

Set Permissions
```sh
sudo chown -R $USER:www-data storage
sudo chmod -R 775 storage
```

Run Service
```sh
php -S localhost:8001 -t public
```

Generate PHP-Lumen Encryption keys
```sh
php artisan passport:keys --force
```

clear cache;
```sh
php artisan cache:clear
```

ensure getting `API_GATEWAY_SECRETS`, check postman
```sh
// .env

API_GATEWAY_SECRETS=0101
```

db migration;
```sh
php artisan migrate:fresh
```

db seed;
```sh
php artisan db:seed
```

run sh
```sh
chmod +x entrypoint.sh && ./entrypoint.sh
```
