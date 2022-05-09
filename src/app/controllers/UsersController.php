<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users');

        return view('users', ['users' => $users]);
    }

    public function store(): void
    {
        try {
            App::get('database')->insert('users', [
                'name' => $_POST['name']
            ]);
        } catch (Exception $e) {
            die('Error during database insertion : ' . PHP_EOL . $e->getMessage());
        }

        redirect('users');
    }
}