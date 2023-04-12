up:
	docker-compose up -d

down:
	docker-compose down

exec:
	docker exec -it vpn_app bash

f:
	php artisan migrate:fresh --seed

git:
	git add .
	git commit -m 'update'
	git push