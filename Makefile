init:
	docker compose up -d
	docker compose exec app cp .env.example .env
	docker compose exec app composer install
	docker compose exec app npm install
	docker compose exec app chmod -R guo+w storage
	docker compose exec app php artisan key:generate
	docker compose exec app php artisan storage:link
	@make vite
build:
	docker compose up -d
	docker compose exec app composer install
	docker compose exec app npm install
	docker compose exec app chmod -R guo+w storage
	@make fresh
	@make vite
rebuild:
	@make down-all
	@make build
up:
	docker compose up -d
	@make vite
stop:
	docker compose stop
down:
	docker compose down
down-all:
	docker compose down --rmi all --volumes --remove-orphans
app-bash:
	docker compose exec app bash
vite:
	docker compose exec app npm run dev
fresh:
	docker compose exec app php artisan migrate:fresh --seed
