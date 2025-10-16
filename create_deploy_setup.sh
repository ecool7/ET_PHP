#!/usr/bin/env bash
set -euo pipefail

echo "==> Installing composer dependencies (no-dev)"
composer install --no-dev --optimize-autoloader

if ! grep -q "^APP_KEY=" .env 2>/dev/null; then
  echo "==> Generating app key"
  php artisan key:generate --force
fi

echo "==> Linking storage"
php artisan storage:link || true

echo "==> Optimizing caches"
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "==> Fixing permissions"
chmod -R ug+rwx storage bootstrap/cache || true

echo "Done."

