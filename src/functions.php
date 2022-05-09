<?php

function dd($data): void {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

