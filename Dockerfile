FROM victorhbfernandes/php-fpm-oracle:7.2.5

RUN apt-get update && apt-get -qqy install \
   nginx \
   nano \
   htop \
   supervisor \
   git \
   zip

RUN curl -sSL https://phar.phpunit.de/phpunit.phar -o phpunit.phar && \
   chmod +x phpunit.phar && \
   mv phpunit.phar /usr/local/bin/phpunit

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer; \
   chmod +x /usr/local/bin/composer;

RUN rm /etc/nginx/nginx.conf  
COPY ./conf/nginx.conf /etc/nginx/
COPY conf/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

RUN mkdir /app
WORKDIR /app

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
