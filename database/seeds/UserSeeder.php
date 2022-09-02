<?php

use App\User;
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
        $user = [

            [

               'name'=>'Admin',

               'email'=>'admin@gmail.com',
               'phone_no' =>'01827801715',

                'is_admin'=>'1',

               'password'=> bcrypt('12345678'),

            ],

            [

               'name'=>'User',

               'email'=>'user@gmail.com',
               'phone_no' =>'01621796596',

                'is_admin'=>'0',

               'password'=> bcrypt('12345678'),

            ],

        ];



        foreach ($user as $key => $value) {

            User::create($value);

        }
    }
}
