<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        DB::table('users')->insert([

            'name' => 'superadmin',
            'email' => 'superadmin@superadmin.com',
            'role' => 'superadmin',
            'password' => Hash::make('password'),
            'avatar' => 'img/admin.jpg'
            ]);

        DB::table('users')->insert([

            'name' => 'administrator',
            'email' => 'admin@admin.com',
            'role' => 'administrator',
            'password' => Hash::make('password'),
            'avatar' => 'img/admin.jpg'
            ]);

        DB::table('users')->insert([

            'name' => 'operator',
            'email' => 'operator@operator.com',
            'role' => 'operator',
            'password' => Hash::make('password'),
            'avatar' => 'img/operator.jpg'
            ]);

        $from = database_path() . DIRECTORY_SEPARATOR . 'seeds' .
            DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR;
        $to = public_path() . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR;
        File::copy($from . 'admin.jpg', $to . 'admin.jpg');
        File::copy($from . 'operator.jpg', $to . 'operator.jpg');

        Model::reguard();
    }
}
