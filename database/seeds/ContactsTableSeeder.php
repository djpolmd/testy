<?php

use App\Contact;
use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    public function run()
    {
        return factory(Contact::class,500)->create();
    }
}
