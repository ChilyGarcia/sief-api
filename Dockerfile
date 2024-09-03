# Step 1: Use a PHP 8.2 image with Apache
FROM php:8.2-apache AS base

# Step 2: Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    libzip-dev \
    libpq-dev

# Step 3: Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql gd mbstring zip xml

# Step 4: Enable Apache mod_rewrite
RUN a2enmod rewrite

# Step 5: Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Step 6: Set up the working directory
WORKDIR /var/www/html

# Step 7: Copy project files
COPY . .

# Step 8: Install Laravel dependencies
RUN composer install --no-interaction --optimize-autoloader --no-dev

# Step 9: Set file permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Step 10: Expose the port Apache is using
EXPOSE 80

# Step 11: Start the Apache server
CMD ["apache2-foreground"]
