<?php
// HTTP
define('HTTP_SERVER', 'http://localstore.loc:8080/admin/');
define('HTTP_CATALOG', 'http://localstore.loc:8080/');

// HTTPS
define('HTTPS_SERVER', 'http://localstore.loc:8080/admin/');
define('HTTPS_CATALOG', 'http://localstore.loc:8080/');

// DIR
define('DIR_APPLICATION', '/media/f/PROGRAMMING/WordPress/opencart/opencartstore/admin/');
define('DIR_SYSTEM', '/media/f/PROGRAMMING/WordPress/opencart/opencartstore/system/');
define('DIR_IMAGE', '/media/f/PROGRAMMING/WordPress/opencart/opencartstore/image/');
define('DIR_STORAGE', '/media/f/PROGRAMMING/WordPress/opencart/storage/');
define('DIR_CATALOG', '/media/f/PROGRAMMING/WordPress/opencart/opencartstore/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'opencart-store');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
