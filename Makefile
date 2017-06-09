
dev: start

prod: 
	@echo "Production is not supported yet"

start:
#	mkdir -p run/www run/db
	docker-compose up -d
	scripts/wait-for-wordpress.sh


