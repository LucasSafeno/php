FROM ubuntu:22.04

ENV timezone=America/Sao_Paulo

RUN apt update -y && \
 ln -snf /usr/share/zoneinfo/${timezone} /etc/localtime && echo ${timezone} > /etc/timezone && \
 apt upgrade -y && \
 apt install -y apache2 && \ 
 apt install -y php && \
 apt install -y php-xdebug && \
 apt install -y git && \
 apt install -y composer

EXPOSE 80

WORKDIR /var/www/html

ENTRYPOINT /etc/init.d/apache2 start && /bin/bash

CMD ["true"]