FROM phpswoole/swoole:php8.1

#COPY ./src/ /app

RUN \
    pecl update-channels        && \
    pecl install mongodb          && \
    docker-php-ext-enable mongodb
