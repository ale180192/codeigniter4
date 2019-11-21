# Ubuntu 18.04.3 LTS at 2019 nov
FROM ubuntu
ARG DEBIAN_FRONTEND=noninteractive

RUN apt update
RUN apt-get install -y apache2
RUN apt-get install -y php-cli php 
RUN apt install -y php-json
RUN apt install -y php-mbstring
RUN apt install -y php-mysqlnd
RUN apt install -y php-xml
RUN ls
RUN service apache2 start
ENTRYPOINT '/bin/bash'