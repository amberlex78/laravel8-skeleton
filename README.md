# Laravel 8 Skeleton Application

Only for DEV, not for production!

**Docker + PHP 8.1 + MySQL 8 + Nginx + XDebug 3.1.2 + Laravel 8 + Bootstrap 5 + Adminer**

## Setup

See hostnames in the `.env` file.

Add to `/etc/hosts` file lines:
```
127.0.0.1 laravel8-skeleton.test
127.0.0.1 adminer.test
```

```
git clone https://github.com/amberlex78/laravel8-skeleton
cd laravel8-skeleton
cp project/.env.example project/.env
make init
make setup
sudo chown -R $USER:$USER project/
sudo chmod -R 777 project/storage project/bootstrap/cache
```

## Access to site

Front:
```
http://laravel8-skeleton.test
```

Admin:
```
http://laravel8-skeleton.test/backend
```

## Users

```
user@example.com  - User
admin@example.com - Admin
```
Password: `password`
