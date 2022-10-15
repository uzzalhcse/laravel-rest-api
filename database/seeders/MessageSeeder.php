<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $timestamp = Carbon::now()->toDateTimeString();
        $messages = [
            [
                'sender_id'=>5,
                'receiver_id'=>6,
                'body'=>'Hi',
                'type'=>'text',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'sender_id'=>6,
                'receiver_id'=>5,
                'body'=>'Hlw',
                'type'=>'text',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'sender_id'=>6,
                'receiver_id'=>5,
                'body'=>'How can i help you',
                'type'=>'text',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'sender_id'=>5,
                'receiver_id'=>6,
                'body'=>'No, thanks. im just checking the system',
                'type'=>'text',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'sender_id'=>6,
                'receiver_id'=>5,
                'body'=>'Sure, feel free to check our platform',
                'type'=>'text',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
        ];


        DB::table('messages')->insert($messages);
    }
}
