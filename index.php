<?php

require  'autoload.php';

//$db = new PDO('mysql:host=127.0.0.1;dbname=test;charset=utf8',
//    'root', '');
//var_dump($db->prepare('CREATE TABLE foo (id SERIAL)'));
$db = new \App\Db();
$data = $db->query('SELECT * FROM foo');

var_dump($data);