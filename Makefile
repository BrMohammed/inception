FILE = srcs/docker-compose.yml

all : build up

up :
	@docker-compose -f ${FILE} up -d

build :
	@mkdir -p srcs/data srcs/data/db srcs/data/db-wp
	@docker-compose -f ${FILE} build

down :
	@docker-compose -f ${FILE} down

clean :
	@docker system prune -af

fclean: clean
	@docker image prune -af
  	

re: fclean build up

.PHONY: all up build down clean fclean
