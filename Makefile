
start:
	mkdir -p run/www run/db
	docker-compose up -d
	scripts/wait-for-wordpress.sh
