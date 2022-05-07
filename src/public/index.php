<?php

require_once 'functions.php';
require_once 'Task.php';

$pdo = connectToDb();

$tasks = fetchAllTasks($pdo);


require_once 'index.view.php';