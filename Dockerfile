FROM php:8.2-cli

# Install extensions required by Laravel
RUN apt-get update && apt-get install -y \
    libzip-dev unzip zip curl \
    && docker-php-ext-install zip pdo pdo_mysql

# Optional: Set timezone
ENV TZ=UTC
