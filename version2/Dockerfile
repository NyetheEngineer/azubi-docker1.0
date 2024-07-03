# Base Image: Use an official PHP image with Apache
FROM php:8.0-apache

# Install system dependencies (if any)
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-install zip

# Copy project files
COPY . /var/www/html

# Set working directory
WORKDIR /var/www/html/version2

# Expose port 80 for web traffic
EXPOSE 80
