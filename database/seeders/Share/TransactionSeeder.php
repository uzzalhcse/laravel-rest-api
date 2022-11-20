<?php

namespace Database\Seeders\Share;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $timestamp = Carbon::now()->toDateTimeString();
        $transactions = [
            [
                'user_id'=>'3',
                'trxid'=> Str::random(6),
                'sub_total'=>'1200',
                'discount'=>'0',
                'tax'=>'0',
                'total'=>'1200',
                'payment_type'=>'Card',
                'type'=>'Advertisement',
                'status_id'=>'7',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ]
        ];


        DB::table('transactions')->insert($transactions);
    }
}
