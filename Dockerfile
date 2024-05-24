FROM --platform=linux/x86_64 php:8.1

RUN apt update
RUN apt install -y git

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /usr/src/app
COPY ./composer.json /usr/src/app
RUN composer install

COPY ./App /usr/src/app/App
COPY ./index.php /usr/src/app

CMD ["php", "./index.php"]