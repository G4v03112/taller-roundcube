<?php

$config = [];

// Conexión a la base de datos
$config['db_dsnw'] = 'mysql://root:@localhost:3307/roundcubemail';

// IMAP
$config['default_host'] = 'localhost';

// SMTP
$config['smtp_server'] = 'localhost';
$config['smtp_port'] = 587;
$config['smtp_user'] = '%u';
$config['smtp_pass'] = '%p';

// Nombre visible del sistema
$config['product_name'] = 'Roundcube Webmail';

// Clave de cifrado (¡debe ser de 24 caracteres!)
$config['des_key'] = 'rcmail-!24ByteDESkey*Str';

// Plugins activados
$config['plugins'] = [
    'archive',
    'zipdownload',
    'asistente', // <-- Asegúrate de que el plugin esté en /plugins/asistente/
];

// Skin del cliente
$config['skin'] = 'elastic';
