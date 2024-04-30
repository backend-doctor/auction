FROM nginx:1.17-alpine

COPY ./development/nginx/conf.d /etc/nginx/conf.d
COPY ./common/nginx/snippets /etc/nginx/snippets

WORKDIR /app