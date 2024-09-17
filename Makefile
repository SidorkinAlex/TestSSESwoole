restartApp:
	docker stop testswooleapp_swooleTestApp_1
	docker rm testswooleapp_swooleTestApp_1
	docker-compose up -d
logApp:
	docker logs testswooleapp_swooleTestApp_1
logsApp:
	docker logs -f testswooleapp_swooleTestApp_1
AppIn:
	docker exec -it testswooleapp_swooleTestApp_1 bash
CreateImage:
	docker build -t swoole-mongo .
Composer:
	composer install --ignore-platform-req=ext-mongodb