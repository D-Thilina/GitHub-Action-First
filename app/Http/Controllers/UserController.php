<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function getAllUsers()
    {
        return response()->json([
            //fakeData Use
            'users' => [
                [
                    'id' => 1,
                    'name' => 'John Doe',
                    'email' => 'test@gmail.com',
                    'role' => 'admin'
                ],

                [
                    'id' => 2,
                    'name' => 'Janith sandaruwan',
                    'email' => 'janith@gmail.com',
                    'role' => 'admin'
                ],

                [
                    'id' => 3,
                    'name' => 'Yasas fdo',
                    'email' => 'Yasas@gmail.com',
                    'role' => 'admin'
                ]
            ]
        ]);
    }
}
