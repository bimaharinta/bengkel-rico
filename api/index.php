<?php
/**
 * Laravel Vercel Serverless Entrypoint
 * Mengarahkan path storage dan cache ke folder /tmp karena Vercel bersifat Read-Only.
 */
$vercelVars = [
    'APP_CONFIG_CACHE' => '/tmp/config.php',
    'APP_EVENTS_CACHE' => '/tmp/events.php',
    'APP_PACKAGES_CACHE' => '/tmp/packages.php',
    'APP_ROUTES_CACHE' => '/tmp/routes.php',
    'APP_SERVICES_CACHE' => '/tmp/services.php',
    'VIEW_COMPILED_PATH' => '/tmp',
    'CACHE_STORE' => 'array',
    'CACHE_DRIVER' => 'array',
    'SESSION_DRIVER' => 'cookie',
    'LOG_CHANNEL' => 'stderr',
    'APP_KEY' => getenv('APP_KEY') ?: 'base64:jU20bM8YyYI/gVqL6YF/p7k9VwT1J0aO9+P4z+Q/j/k=',
    'APP_DEBUG' => getenv('APP_DEBUG') ?: 'true',
    'DB_CONNECTION' => getenv('DB_CONNECTION') ?: 'sqlite',
    'DB_DATABASE' => getenv('DB_DATABASE') ?: '/tmp/database.sqlite',
];

foreach ($vercelVars as $key => $value) {
    $_ENV[$key] = $value;
    $_SERVER[$key] = $value;
    putenv("{$key}={$value}");
}

require __DIR__ . '/../public/index.php';
