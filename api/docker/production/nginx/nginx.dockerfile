FROM nginx:1.17-alpine

RUN mv $PHP_INI_DIR/php.ini-production $PHP_INI_DIR/php.ini

COPY ./docker/common/nginx/conf.d /usr/local/etc/nginx/conf.d

WORKDIR /app

COPY . .