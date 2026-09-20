#!/bin/bash
set -e

echo "Deployment started ..."

# Enter maintenance mode
# or return true if already in maintenance mode
(php artisan down) || true

# Pull latest version from github
git pull origin main

# Install composer dependencies
composer2 install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# Clear old cache
php artisan clear-compiled

# Recreate cache
php artisan optimize

# Exit maintenance mode
php artisan up

echo "Deployment finished!"