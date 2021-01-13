up:
	docker-compose up -d

stop:
	docker-compose stop

restart:
	docker-compose restart

ps:
	docker ps

work:
	docker exec -it fuchart-app bash