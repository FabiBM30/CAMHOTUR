<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     

        DB::table('roles')->insert([
            'NombreRol' => 'SuperAdmin',
        ]);
        DB::table('roles')->insert([
            'NombreRol' => 'Administrador',
        ]);

        /*DB::table('roles')->insert([
            'NombreRol' => 'Usuario',
        ]);*/

    }
}