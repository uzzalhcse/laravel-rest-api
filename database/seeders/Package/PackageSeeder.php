<?php

namespace Database\Seeders\Package;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $timestamp = Carbon::now()->toDateTimeString();
        $packages = [
            [
                'name'=>'Basic',
                'min_price'=>1200,
                'max_price'=>100000,
                'cpa'=>0.12,
                'no_of_network_provider_limit'=>3,
                'type'=>'Advertisement',
                'is_popular'=>'0',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'name'=>'Premium',
                'min_price'=>100000,
                'max_price'=>500000,
                'cpa'=>0.10,
                'no_of_network_provider_limit'=>3,
                'type'=>'Advertisement',
                'is_popular'=>'1',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'name'=>'Billboard',
                'min_price'=>100,
                'max_price'=>10000,
                'cpa'=>0.10,
                'no_of_network_provider_limit'=>0,
                'type'=>'Billboard',
                'is_popular'=>'0',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'name'=>'Enterprise',
                'min_price'=>0,
                'max_price'=>0,
                'cpa'=>0,
                'no_of_network_provider_limit'=>0,
                'type'=>'Advertisement',
                'is_popular'=>'0',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ]
        ];

        DB::table('packages')->insert($packages);
    }
}
