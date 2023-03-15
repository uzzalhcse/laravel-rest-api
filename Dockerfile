FROM php:8.1-fpm
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    openssl
RUN apt-get clean && rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd
# Install Postgre PDO
# RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pdo pdo_pgsql
# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
# https://getcomposer.org/doc/03-cli.md#composer-allow-superuser
ENV COMPOSER_ALLOW_SUPERUSER=1
# Setup working directory
WORKDIR /var/www/html
COPY . .
CMD bash -c "composer install && php artisan migrate:fresh --seed && php artisan cache:clear && chmod -R 777 storage && php artisan serve --host 0.0.0.0 --port 8000"
EXPOSE 8000
