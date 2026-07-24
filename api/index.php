<?php
/**
 * Laravel Vercel Serverless Entrypoint
 * Mengarahkan path storage dan cache ke folder /tmp karena Vercel bersifat Read-Only.
 */
$_ENV['APP_CONFIG_CACHE'] = '/tmp/config.php';
$_ENV['APP_EVENTS_CACHE'] = '/tmp/events.php';
$_ENV['APP_PACKAGES_CACHE'] = '/tmp/packages.php';
$_ENV['APP_ROUTES_CACHE'] = '/tmp/routes.php';
$_ENV['APP_SERVICES_CACHE'] = '/tmp/services.php';
$_ENV['VIEW_COMPILED_PATH'] = '/tmp';
$_ENV['CACHE_STORE'] = 'array';
$_ENV['CACHE_DRIVER'] = 'array';
$_ENV['SESSION_DRIVER'] = 'cookie';
$_ENV['LOG_CHANNEL'] = 'stderr';

// Fallback jika user lupa memasukkan di pengaturan Vercel
$_ENV['APP_KEY'] = $_ENV['APP_KEY'] ?? 'base64:jU20bM8YyYI/gVqL6YF/p7k9VwT1J0aO9+P4z+Q/j/k=';
$_ENV['APP_DEBUG'] = $_ENV['APP_DEBUG'] ?? 'true';
$_ENV['DB_CONNECTION'] = $_ENV['DB_CONNECTION'] ?? 'sqlite';
$_ENV['DB_DATABASE'] = $_ENV['DB_DATABASE'] ?? '/tmp/database.sqlite';

require __DIR__ . '/../public/index.php';
