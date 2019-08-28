FROM nginx:stable-alpine

RUN  mkdir -p /var/www/html/drupal \
  && adduser -u 82 -D -S -G www-data www-data \
  && chown -R www-data:www-data /var/www/html/drupal