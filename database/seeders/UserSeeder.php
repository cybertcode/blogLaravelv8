<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // este documento será llamado del DatabaseSeeder
        User::create([
            'name' => 'MKevyn HH',
            'email' => 'cybertcode@zohomail.com',
            'password' => bcrypt('admin123'),
        ]);
        User::factory(99)->create();
    }
}