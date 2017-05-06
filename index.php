<?php

require  'autoload.php';

$db = new \App\Db();
$data = $db->query(
    'SELECT * FROM users',
    'App\Models\User'
);