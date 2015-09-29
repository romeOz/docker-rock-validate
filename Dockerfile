FROM romeoz/docker-nginx-php
MAINTAINER romeOz <serggalka@gmail.com>

RUN rm -rf /etc/nginx/sites-enabled/*

ADD ./sites-enabled/ /etc/nginx/sites-enabled/
ADD ./src/ /var/www/rock-validate/

WORKDIR /var/www/rock-validate/

RUN composer install --prefer-dist --no-dev

EXPOSE 80

CMD ["/usr/bin/supervisord"]