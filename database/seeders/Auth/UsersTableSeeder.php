<?php

namespace Database\Seeders\Auth;

use App\Models\Auth\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =  [
            [
                'first_name' => 'Super Admin',
                'last_name' => '',
                'type' => 'Admin',
                'gender' => 'Male',
                'mobile' => '+8801764695320',
                'address' => 'Uttara, Dhaka',
                'country_id' => '19',
                'email' => 'superadmin@gmail.com',
                'avatar' => '/uploads/user/man.png',
                'password' => bcrypt('password'),
                'created_at'=>Carbon::now()->toDateTimeString(),
                'updated_at'=>Carbon::now()->toDateTimeString(),
            ],
            [
                'first_name' => 'Officer',
                'last_name' => '',
                'type' => 'Admin',
                'gender' => 'Male',
                'mobile' => '+8801764695321',
                'address' => 'Uttara, Dhaka',
                'country_id' => '19',
                'email' => 'officer@gmail.com',
                'avatar' => '/uploads/user/man.png',
                'password' => bcrypt('password'),
                'created_at'=>Carbon::now()->toDateTimeString(),
                'updated_at'=>Carbon::now()->toDateTimeString(),
            ],
            [
                'first_name' => 'Coca Cola',
                'last_name' => '',
                'type' => 'Advertiser',
                'gender' => 'Male',
                'mobile' => '+8801764695322',
                'address' => 'Uttara, Dhaka',
                'country_id' => '19',
                'email' => 'advertiser@gmail.com',
                'avatar' => '/uploads/user/man.png',
                'password' => bcrypt('password'),
                'created_at'=>Carbon::now()->toDateTimeString(),
                'updated_at'=>Carbon::now()->toDateTimeString(),
            ],
            [
                'first_name' => 'GrameenPhone',
                'last_name' => '',
                'type' => 'Provider',
                'gender' => 'Male',
                'mobile' => '+8801764695323',
                'address' => 'Uttara, Dhaka',
                'country_id' => '19',
                'email' => 'provider@gmail.com',
                'avatar' => '/uploads/user/man.png',
                'password' => bcrypt('password'),
                'created_at'=>Carbon::now()->toDateTimeString(),
                'updated_at'=>Carbon::now()->toDateTimeString(),
            ],
            [
                'first_name' => 'User',
                'last_name' => '',
                'type' => 'User',
                'gender' => 'Male',
                'mobile' => '+8801764695324',
                'address' => 'Uttara, Dhaka',
                'country_id' => '19',
                'email' => 'user@gmail.com',
                'avatar' => '/uploads/user/man.png',
                'password' => bcrypt('password'),
                'created_at'=>Carbon::now()->toDateTimeString(),
                'updated_at'=>Carbon::now()->toDateTimeString(),
            ],
            [
                'first_name' => 'Customer Care',
                'last_name' => '',
                'type' => 'CustomerCare',
                'gender' => 'Male',
                'mobile' => '+8801764695325',
                'address' => 'Uttara, Dhaka',
                'country_id' => '19',
                'email' => 'cc@gmail.com',
                'avatar' => '/uploads/user/man.png',
                'password' => bcrypt('password'),
                'created_at'=>Carbon::now()->toDateTimeString(),
                'updated_at'=>Carbon::now()->toDateTimeString(),
            ]
        ];

        DB::table('users')->insert($users);
        $userRoles =  [
            [
                'user_id' => '1',
                'role_id' => '1',
                'created_at'=>Carbon::now()->toDateTimeString(),
                'updated_at'=>Carbon::now()->toDateTimeString(),
            ],
            [
                'user_id' => '2',
                'role_id' => '2',
                'created_at'=>Carbon::now()->toDateTimeString(),
                'updated_at'=>Carbon::now()->toDateTimeString(),
            ],
            [
                'user_id' => '3',
                'role_id' => '3',
                'created_at'=>Carbon::now()->toDateTimeString(),
                'updated_at'=>Carbon::now()->toDateTimeString(),
            ],
            [
                'user_id' => '4',
                'role_id' => '4',
                'created_at'=>Carbon::now()->toDateTimeString(),
                'updated_at'=>Carbon::now()->toDateTimeString(),
            ],
            [
                'user_id' => '5',
                'role_id' => '5',
                'created_at'=>Carbon::now()->toDateTimeString(),
                'updated_at'=>Carbon::now()->toDateTimeString(),
            ],
            [
                'user_id' => '6',
                'role_id' => '6',
                'created_at'=>Carbon::now()->toDateTimeString(),
                'updated_at'=>Carbon::now()->toDateTimeString(),
            ],
        ];

        DB::table('user_roles')->insert($userRoles);

    }
}
