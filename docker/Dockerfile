FROM phpswoole/swoole:latest

### update and installing tools
# inotify-tools is that for using swoole-reloading
RUN apt update && apt upgrade \
    && apt install inotify-tools -y

COPY ./etc/supervisor/service.d/swoole.conf /etc/supervisor/service.d/swoole.conf

WORKDIR /var/www/feloraphp/app