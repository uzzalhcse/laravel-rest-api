<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuditionHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $timestamp = Carbon::now()->toDateTimeString();
        $audition_histories = [
            [
                'audition_id'=>1,
                'user_id'=>5,
                'amount'=> 0.6,
                'is_pending'=> 0,
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'audition_id'=>1,
                'user_id'=>4,
                'amount'=> 0.3,
                'is_pending'=> 1,
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'audition_id'=>2,
                'user_id'=>5,
                'amount'=> 0.6,
                'is_pending'=> 0,
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'audition_id'=>2,
                'user_id'=>4,
                'amount'=> 0.3,
                'is_pending'=> 1,
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'audition_id'=>3,
                'user_id'=>5,
                'amount'=> 0.6,
                'is_pending'=> 1,
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'audition_id'=>3,
                'user_id'=>4,
                'amount'=> 0.3,
                'is_pending'=> 1,
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
        ];


        DB::table('audition_histories')->insert($audition_histories);
    }
}
