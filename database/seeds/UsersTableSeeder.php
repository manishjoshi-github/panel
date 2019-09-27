<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$U4mDGotBOj3.yniMzckR6.QcsEl3aCpHz2BPehpJGgYqdh9EssPCO',
                'remember_token' => null,
                'created_at'     => '2019-09-24 05:09:53',
                'updated_at'     => '2019-09-24 05:09:53',
            ],
        ];

        User::insert($users);
    }
}
