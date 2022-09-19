<?php

namespace Database\Seeders\Blog;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $timestamp = Carbon::now()->toDateTimeString();
        DB::table('blogs')->insert([
            [
                'id'=>1,
                'user_id'=>1,
                'title'=>'A new frontier of Earning passive just by joining adstocall',
                'thumbnail'=>'/uploads/defaults/blogs/2022/blog1.jpg',
                'banner'=>'/uploads/defaults/blogs/2022/blog1.jpg',
                'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad asperiores culpa cum deserunt eos est ipsum obcaecati sint voluptas voluptatibus?',
                'status_id'=>'1',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'id'=>2,
                'user_id'=>1,
                'title'=>'How much can I really Earn from adstocall',
                'thumbnail'=>'/uploads/defaults/blogs/2022/blog2.jpg',
                'banner'=>'/uploads/defaults/blogs/2022/blog2.jpg',
                'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad asperiores culpa cum deserunt eos est ipsum obcaecati sint voluptas voluptatibus?',
                'status_id'=>'1',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ]
        ]);
    }
}
