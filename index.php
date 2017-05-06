<?php

require  'autoload.php';

$users = \App\Models\User::findAll();

var_dump($users);