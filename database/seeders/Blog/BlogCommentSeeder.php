<?php

namespace Database\Seeders\Blog;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $timestamp = Carbon::now()->toDateTimeString();
        DB::table('blog_comments')->insert([
            [
                'id'=>1,
                'blog_id'=>1,
                'user_id'=>1,
                'body'=>'Lorem ipsum dolor sit ame',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'id'=>2,
                'blog_id'=>1,
                'user_id'=>2,
                'body'=>'Lorem ipsum dolor sit ame',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
        ]);
    }
}
