<?php

require_once 'core/bootstrap.php';

require Router::load('routes.php')
    ->direct(Request::uri());

