FROM php:7.4-cli-alpine

ARG user
ARG group
ARG uid

RUN apk update && apk add unzip

RUN mv $PHP_INI_DIR/php.ini-production $PHP_INI_DIR/php.ini

COPY ./common/php/conf.d /usr/local/etc/php/conf.d

RUN curl -s https://getcomposer.org/installer | php -- --install-dir=bin --filename=composer --quiet

RUN addgroup \
    ${group} \
&&  adduser \
    --disabled-password \
    --gecos "" \
    --ingroup ${group} \
    --no-create-home \
    --uid ${uid} \
    ${user}

USER ${user}


WORKDIR /app
