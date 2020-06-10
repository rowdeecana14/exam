<?php

use App\Models\ContactModel;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ContactModel::class, 100)->create();
    }
}
