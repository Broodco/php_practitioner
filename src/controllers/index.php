<?php

/* @var $app */
$tasks = $app['database']->selectAll('tasks');

require_once 'views/index.view.php';