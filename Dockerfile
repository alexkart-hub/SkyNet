FROM --platform=linux/x86_64 php:8.1

RUN apt update
RUN apt install -y git

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /usr/src/app
WORKDIR /usr/src/app

RUN composer install

CMD ["php", "./index.php"]