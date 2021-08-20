DOCKER_CONTAINER=skeleton

docker-up:
	docker-compose -f docker/docker-compose.yml up -d --build

composer-install:
	docker exec -it $(DOCKER_CONTAINER) bash -c "composer install --no-interaction"

run-tests:
	docker exec -it $(DOCKER_CONTAINER) bash -c "/var/www/html/vendor/phpunit/phpunit/phpunit --configuration /var/www/html/phpunit.xml"