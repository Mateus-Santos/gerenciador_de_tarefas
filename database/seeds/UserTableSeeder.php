<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Test',
            'email' => 'test@gmail.com',
            'password' => bcrypt('test@1234'),
            'sexo' => 'masculino',
            'data_nascimento' => '2000-09-23',
            'telefone' => '80028922',
            'login' => 'testuser',
        ]);
    }
}
