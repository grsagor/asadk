FROM php:8.2-cli

# Install extensions required by Laravel
RUN apt-get update && apt-get install -y \
    libzip-dev unzip zip curl \
    && docker-php-ext-install zip pdo pdo_mysql

# Install Composer properly with signature verification
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Optional: Set timezone
ENV TZ=UTC

# Copy composer files
COPY composer.json composer.lock ./

# Install dependencies
RUN composer install --no-scripts --no-autoloader

# Copy the rest of the application
COPY . .

# Generate optimized autoload files
RUN composer dump-autoload --optimize