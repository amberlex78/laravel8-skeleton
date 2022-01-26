#-----------------------------------------------------------
# docker
init: docker-pull docker-build docker-up
up: docker-up
down: docker-down
restart: down up

docker-pull:
	docker-compose pull
docker-build:
	docker-compose build
docker-up:
	docker-compose up -d
docker-down:
	docker-compose down --remove-orphans

bash:
	docker-compose exec php bash

#-----------------------------------------------------------
# Setup
setup: composer-install npm-install run-all db-fresh db-seed

#-----------------------------------------------------------
# composer
composer-install:
	docker-compose exec php composer install
composer-update:
	docker-compose exec php composer update

#-----------------------------------------------------------
# npm
npm-install:
	docker-compose exec php npm install

run-all: run-front-vendor run-front-dev run-admin-vendor run-admin-dev

run-front-vendor:
	docker-compose exec php npm run front-vendor
run-front-dev:
	docker-compose exec php npm run front-dev

run-admin-vendor:
	docker-compose exec php npm run admin-vendor
run-admin-dev:
	docker-compose exec php npm run admin-dev

#-----------------------------------------------------------
# php artisan
key:
	docker-compose exec php php artisan key:generate
db-fresh:
	docker-compose exec php php artisan migrate:fresh
db-migrate:
	docker-compose exec php php artisan migrate
db-seed:
	docker-compose exec php php artisan db:seed

#-----------------------------------------------------------
# for local
stop-local-services:
	sudo systemctl stop apache2
	sudo systemctl stop mysql

start-local-services:
	sudo systemctl start apache2
	sudo systemctl start mysql

