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

chmod:
	chmod 777 -R storage/
	chown 777 -R storage/
	chmod 777 -R bootstrap/cache/
	chown 777 -R bootstrap/cache/

c:
	php artisan cache:clear
	php artisan route:cache
