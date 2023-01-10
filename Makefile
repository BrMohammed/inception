

FILE = srcs/docker-compose.yml

all : build up

up : ${FILE}
	@docker-compose -f ${FILE} up -d

build : ${FILE}
	@mkdir -p srcs/data srcs/data/db srcs/data/db-wp
	@docker-compose -f ${FILE} build

down :
	@docker-compose -f ${FILE} down

clean :
	@docker system prune -af
  @docker container rm -f $(docker container ls -aq)

fclean: clean
	@docker image prune -af
  @docker image rm -f $(docker image ls -q)
  @docker volume rm -f $(docker volume ls -q)
  echo "everytthing is clean"

re: fclean build up

.PHONY: all up build down clean fclean
