<?php

namespace Database\Seeders\Auth;

use App\Models\Auth\UserRole;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = Carbon::now()->toDateTimeString();
        $roles =  [
            [
                'id' => '1',
                'name' => 'Super Admin',
                'slug' => 'super_admin',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp,
            ],
            [
                'id' => '2',
                'name' => 'Officer',
                'slug' => 'officer',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp,
            ],
            [
                'id' => '3',
                'name' => 'Advertiser',
                'slug' => 'advertiser',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp,
            ],
            [
                'id' => '4',
                'name' => 'Provider',
                'slug' => 'provider',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp,
            ],
            [
                'id' => '5',
                'name' => 'User',
                'slug' => 'user',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp,
            ],
            [
                'id' => '6',
                'name' => 'Customer Care',
                'slug' => 'customer_care',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp,
            ]
        ];

        DB::table('roles')->insert($roles);
    }
}
