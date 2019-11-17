<?php

use App\User;
use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    public function run()
    {
        return factory(User::class,50)->create();
    }
}
