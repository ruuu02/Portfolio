<?php

$storagePath = '/tmp/laravel-storage';

foreach ([
    $storagePath.'/framework/cache/data',
    $storagePath.'/framework/sessions',
    $storagePath.'/framework/testing',
    $storagePath.'/framework/views',
    $storagePath.'/logs',
] as $directory) {
    if (! is_dir($directory)) {
        mkdir($directory, 0777, true);
    }
}

$_ENV['LARAVEL_STORAGE_PATH'] = $storagePath;
$_SERVER['LARAVEL_STORAGE_PATH'] = $storagePath;

foreach ([
    'APP_ENV' => getenv('APP_ENV') ?: 'production',
    'APP_DEBUG' => getenv('APP_DEBUG') ?: 'false',
    'CACHE_STORE' => 'array',
    'LOG_CHANNEL' => 'stderr',
    'QUEUE_CONNECTION' => 'sync',
    'SESSION_DRIVER' => 'array',
    'VIEW_COMPILED_PATH' => $storagePath.'/framework/views',
    'APP_CONFIG_CACHE' => $storagePath.'/framework/cache/config.php',
    'APP_EVENTS_CACHE' => $storagePath.'/framework/cache/events.php',
    'APP_PACKAGES_CACHE' => $storagePath.'/framework/cache/packages.php',
    'APP_ROUTES_CACHE' => $storagePath.'/framework/cache/routes.php',
    'APP_SERVICES_CACHE' => $storagePath.'/framework/cache/services.php',
] as $key => $value) {
    putenv($key.'='.$value);
    $_ENV[$key] = $value;
    $_SERVER[$key] = $value;
}

foreach ([
    'APP_KEY' => 'base64:'.base64_encode(random_bytes(32)),
] as $key => $value) {
    if (! getenv($key)) {
        putenv($key.'='.$value);
        $_ENV[$key] = $value;
        $_SERVER[$key] = $value;
    }
}

require __DIR__.'/../public/index.php';
