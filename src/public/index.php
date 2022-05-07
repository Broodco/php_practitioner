<?php
require_once 'Task.php';

$query = require_once '../bootstrap.php';

$tasks = $query->selectAll('tasks', Task::class);

require_once 'index.view.php';