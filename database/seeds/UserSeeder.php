<?php

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
        /*
        User::create([
            'name' => 'Elian',
            'email' => 'elian@gmail.com',
            'password' => bcrypt('12345')
        ]);
        */

        factory(User::class, 10)->create();
    }
}
