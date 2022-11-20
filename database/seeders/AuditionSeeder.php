<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $timestamp = Carbon::now()->toDateTimeString();
        $auditions = [
            [
                'user_id'=>5,
                'ads_id'=>1,
                'advertiser_id'=> 3,
                'provider_id'=> 4,
                'package_id'=> 1,
                'mobile'=> '+8801764695324',
                'cpa'=> 0.12,
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'user_id'=>5,
                'ads_id'=>2,
                'advertiser_id'=> 3,
                'provider_id'=> 4,
                'package_id'=> 1,
                'mobile'=> '+8801764695324',
                'cpa'=> 0.12,
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'user_id'=>5,
                'ads_id'=>3,
                'advertiser_id'=> 3,
                'provider_id'=> 4,
                'package_id'=> 1,
                'mobile'=> '+8801764695324',
                'cpa'=> 0.12,
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
        ];


        DB::table('auditions')->insert($auditions);
    }
}
