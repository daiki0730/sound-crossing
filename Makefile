up:
	docker-compose up -d

stop:
	docker-compose stop

ps:
	docker ps

work:
	docker exec -it sound-crossing-app bash

format:
	@echo 'blade-formatter:'
	@docker exec -it sound-crossing-app npm run blade:fix
	@echo 'stylelint auto fix:'
	@docker exec -it sound-crossing-app npm run lint:css:fix
	@echo 'prettier-sass:'
	@docker exec -it sound-crossing-app npm run format:css:fix
	@echo 'eslint auto fix:'
	@docker exec -it sound-crossing-app npm run lint:js:fix
	@echo 'prettier-js:'
	@docker exec -it sound-crossing-app npm run format:js:fix