FROM php:8.1.0-apache as api-prod-stage

# Install system dependencies
RUN apt-get update -qq && \
    apt-get install -qy \
    git \
    gnupg \
    unzip \
    zip \
    libzip-dev \
    libpng-dev

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install -j$(nproc) opcache pdo_mysql gd zip

# PHP conf
COPY docker-conf/php.ini /usr/local/etc/php/conf.d/app.ini

# Get latest Composer
COPY --from=composer:2.0 /usr/bin/composer /usr/local/bin/composer

# Set working directory
WORKDIR /app

# Apache
COPY docker-conf/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY docker-conf/apache.conf /etc/apache2/conf-available/z-noe.conf

RUN a2enconf z-noe \
    && a2enmod rewrite

COPY --chown=www-data . .

RUN chown www-data /app
USER www-data

RUN bash -c 'mkdir -p storage/framework/{sessions,views,cache}'
RUN bash -c 'mkdir -p storage/app/public/images'

RUN composer install --no-dev
RUN php artisan storage:link
