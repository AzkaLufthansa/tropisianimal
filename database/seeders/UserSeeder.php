<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Salsabila Sofyanti',
            'email' => 'salsabila@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Ilham Kurniawan',
            'email' => 'ilhamkurniawan@gmail.com',
            'password' => bcrypt('12345')
        ]);
    }
}
