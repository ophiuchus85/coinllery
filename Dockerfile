FROM ophiuchus.coinllery-base-image AS php

#Configure NGINX
RUN mkdir -p /run/nginx
COPY docker/nginx.conf /etc/nginx/nginx.conf

#Copy PHP Uploads preferences
COPY docker/uploads.ini /usr/local/etc/php/conf.d/uploads.ini

#Copy Application
RUN mkdir -p /app
COPY --chown=www-data:www-data ./docker /app/docker
COPY --chown=www-data:www-data ./src /app

#Copy .env
RUN mv /app/.env.docker /app/.env

#Install Composer and Project dependencies
# Composer has been installed on base
# RUN sh -c "wget http://getcomposer.org/composer.phar && chmod a+x composer.phar && mv composer.phar /usr/local/bin/composer"
RUN cd /app && composer install --no-dev

#RUN chown -R www-data: /app

#Start Redis and Server
CMD ["sh", "/app/docker/startup.sh"]
