<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdsReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $timestamp = Carbon::now()->toDateTimeString();
        $ads_reviews = [
            [
                'user_id'=>5,
                'ads_id'=> 1,
                'rating'=>3,
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'user_id'=>5,
                'ads_id'=> 2,
                'rating'=>5,
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'user_id'=>5,
                'ads_id'=> 3,
                'rating'=>4,
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'user_id'=>5,
                'ads_id'=> 4,
                'rating'=>5,
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'user_id'=>5,
                'ads_id'=> 5,
                'rating'=>3,
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'user_id'=>5,
                'ads_id'=> 6,
                'rating'=>5,
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'user_id'=>5,
                'ads_id'=> 7,
                'rating'=>5,
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ]
        ];


        DB::table('ads_reviews')->insert($ads_reviews);
    }
}
