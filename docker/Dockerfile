FROM phpswoole/swoole:latest

### update and installing tools
# inotify-tools is that for using swoole-reloading
RUN apt update && apt upgrade -y
RUN apt install inotify-tools -y

COPY ./etc/supervisor/service.d/swoole.conf /etc/supervisor/service.d/swoole.conf
COPY ./usr/local/etc/php/conf.d/docker-php-ext-pcntl-fork.ini /usr/local/etc/php/conf.d/docker-php-ext-pcntl-fork.ini

WORKDIR /var/www/felora/

RUN docker-php-ext-install pcntl
