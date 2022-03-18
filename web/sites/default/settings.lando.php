<?php

$info = json_decode(getenv('LANDO_INFO'), TRUE);

$databases = array(
  'default' => array(
    'default' => array(
      'database' => $info['database']['creds']['database'],
      'username' => $info['database']['creds']['user'],
      'password' => $info['database']['creds']['password'],
      'host' => $info['database']['internal_connection']['host'],
      'port' => $info['database']['internal_connection']['port'],
      'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
      'driver' => 'mysql',
    ),
  )
);
