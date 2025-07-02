FROM nginx:1.17-alpine

COPY ./docker/common/nginx/conf.d /usr/local/etc/nginx/conf.d

WORKDIR /app

COPY . .