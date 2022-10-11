<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PayoutHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $timestamp = Carbon::now()->toDateTimeString();
        $payout_histories = [
            [
                'user_id'=>5,
                'amount'=>0.5,
                'payment_method'=>'Paypal',
                'paypal_email'=> 'paypal@gmail.com',
                'bank_account_name'=> null,
                'bank_account_number'=> null,
                'bank_swift_code'=> null,
                'bank_name'=> null,
                'bank_iban'=> null,
                'status_id'=> '3',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'user_id'=>5,
                'amount'=>0.8,
                'payment_method'=>'Bank',
                'paypal_email'=> null,
                'bank_account_name'=> 'Uzzal Hosen',
                'bank_account_number'=> '15326536235',
                'bank_swift_code'=> 'DBBLBDDH',
                'bank_name'=> 'Dutch Bangla Bank',
                'bank_iban'=> 'GB33BUKB20201555555555',
                'status_id'=> '3',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
        ];


        DB::table('payout_histories')->insert($payout_histories);
    }
}
