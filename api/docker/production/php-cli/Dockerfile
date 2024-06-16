FROM php:7.4-cli-alpine

ARG user
ARG group
ARG uid

RUN mv $PHP_INI_DIR/php.ini-production $PHP_INI_DIR/php.ini

COPY ./common/php/conf.d /usr/local/etc/php/conf.d

WORKDIR /app

COPY ./ ./

RUN addgroup -S ${user} && adduser -S -G ${group},root --uid $uid --ingroup ${user}  ${user}

USER ${user}