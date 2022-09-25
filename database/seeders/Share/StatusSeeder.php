<?php

namespace Database\Seeders\Share;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $statuses = array(
            array('id' => '1','title' => 'Active','code' => '1',),
            array('id' => '2','title' => 'Inactive','code' => '0',),
            array('id' => '3','title' => 'Pending','code' => '2',),
            array('id' => '4','title' => 'Rejected','code' => '3',),
            array('id' => '5','title' => 'Ban','code' => '4',),
            array('id' => '6','title' => 'Suspend','code' => '5',),
            array('id' => '7','title' => 'Completed','code' => '6',),
        );

        DB::table('statuses')->insert($statuses);
    }
}
