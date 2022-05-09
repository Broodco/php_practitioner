<?php

/* @var $app */
$tasks = $app['database']->selectAll('tasks');

$users = $app['database']->selectAll('users');

require_once 'views/index.view.php';