<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->where('email', 'fabi30bongo@gmail.com')->delete();

        DB::table('users')->insert([
            'name' => 'SuperAdmin',
            'email' => 'fabi30bongo@gmail.com',
            'password' => bcrypt('12345678'),
            'rol_id' => '1',
            
        ]);
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'da598298@gmail.com',
            'password' => bcrypt('12345678'),
            'rol_id' => '2',
            
        ]);

       /* DB::table('users')->insert([
            'name' => 'Usuario',
            'email' => 'usuario@gmail.com',
            'password' => bcrypt('87654321'),
            'rol_id' => '3',
        ]);*/
    }
}