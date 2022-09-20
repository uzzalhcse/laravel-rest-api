<?php

namespace Database\Seeders\Share;

use App\Models\Auth\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = Carbon::now()->toDateTimeString();


        $userPacks = [
            [
                'user_id'=>'3',
                'package_id'=>'1',
                'amount'=>'2000',
                'audition_limit'=>'13333',
                'expired_at'=>'2020-09-28',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ]
        ];


        DB::table('user_packages')->insert($userPacks);


        $ads = [
            [
                'id'=>'1',
                'user_id'=>'3',
                'title'=>'CITI',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic soluta unde veniam. Ipsa, mollitia, nemo? Ab aut delectus dolorem eaque eum explicabo fugit laboriosam perspiciatis ut vero. Corporis, impedit iste.',
                'male_age_range'=>'[20,46]',
                'female_age_range'=>'[18,35]',
                'preferred_gender'=>'Both',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'id'=>'2',
                'user_id'=>'3',
                'title'=>'Cocacola',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic soluta unde veniam. Ipsa, mollitia, nemo? Ab aut delectus dolorem eaque eum explicabo fugit laboriosam perspiciatis ut vero. Corporis, impedit iste.',
                'male_age_range'=>'[20,40]',
                'female_age_range'=>'[20,45]',
                'preferred_gender'=>'Male',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'id'=>'3',
                'user_id'=>'3',
                'title'=>'Pizza Hunt',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic soluta unde veniam. Ipsa, mollitia, nemo? Ab aut delectus dolorem eaque eum explicabo fugit laboriosam perspiciatis ut vero. Corporis, impedit iste.',
                'male_age_range'=>'[20,56]',
                'female_age_range'=>'[19,55]',
                'preferred_gender'=>'Male',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'id'=>'4',
                'user_id'=>'3',
                'title'=>'Star Bucks',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic soluta unde veniam. Ipsa, mollitia, nemo? Ab aut delectus dolorem eaque eum explicabo fugit laboriosam perspiciatis ut vero. Corporis, impedit iste.',
                'male_age_range'=>'[20,60]',
                'female_age_range'=>'[21,45]',
                'preferred_gender'=>'Female',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'id'=>'5',
                'user_id'=>'3',
                'title'=>'Pepsi',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic soluta unde veniam. Ipsa, mollitia, nemo? Ab aut delectus dolorem eaque eum explicabo fugit laboriosam perspiciatis ut vero. Corporis, impedit iste.',
                'male_age_range'=>'[20,62]',
                'female_age_range'=>'[21,45]',
                'preferred_gender'=>'Female',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ]
        ];


        DB::table('ads')->insert($ads);


        $adsMedia = [
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'1',
                'path'=>'/uploads/defaults/media/thumbnail/citi.jpg',
                'media_type'=>'thumbnail',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'1',
                'path'=>'/uploads/defaults/media/banner/coca-cola.jpg',
                'media_type'=>'banner',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'1',
                'path'=>'/uploads/defaults/media/audio/citi_bank.mp3',
                'media_type'=>'audio',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'2',
                'path'=>'/uploads/defaults/media/thumbnail/coca-cola.jpg',
                'media_type'=>'thumbnail',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'2',
                'path'=>'/uploads/defaults/media/banner/coca-cola.jpg',
                'media_type'=>'banner',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'2',
                'path'=>'/uploads/defaults/media/audio/coca-cola.mp3',
                'media_type'=>'audio',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'3',
                'path'=>'/uploads/defaults/media/thumbnail/pizza-hunt.jpg',
                'media_type'=>'thumbnail',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'3',
                'path'=>'/uploads/defaults/media/banner/coca-cola.jpg',
                'media_type'=>'banner',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'3',
                'path'=>'/uploads/defaults/media/audio/coca-cola.mp3',
                'media_type'=>'audio',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'4',
                'path'=>'/uploads/defaults/media/thumbnail/star-bucks.jpg',
                'media_type'=>'thumbnail',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'4',
                'path'=>'/uploads/defaults/media/banner/coca-cola.jpg',
                'media_type'=>'banner',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'4',
                'path'=>'/uploads/defaults/media/audio/coca-cola.mp3',
                'media_type'=>'audio',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'5',
                'path'=>'/uploads/defaults/media/thumbnail/pepsi.jpg',
                'media_type'=>'thumbnail',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'5',
                'path'=>'/uploads/defaults/media/banner/pepsi.jpg',
                'media_type'=>'banner',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'5',
                'path'=>'/uploads/defaults/media/audio/coca-cola.mp3',
                'media_type'=>'audio',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ]
        ];
        DB::table('media')->insert($adsMedia);

        $adsCountry = [
            ['country_id'=>'231', 'ads_id'=>'1', 'created_at'=>$timestamp, 'updated_at'=>$timestamp],
            ['country_id'=>'231', 'ads_id'=>'2', 'created_at'=>$timestamp, 'updated_at'=>$timestamp],
            ['country_id'=>'231', 'ads_id'=>'3', 'created_at'=>$timestamp, 'updated_at'=>$timestamp],
            ['country_id'=>'231', 'ads_id'=>'4', 'created_at'=>$timestamp, 'updated_at'=>$timestamp],
            ['country_id'=>'231', 'ads_id'=>'5', 'created_at'=>$timestamp, 'updated_at'=>$timestamp],
        ];
        DB::table('ads_countries')->insert($adsCountry);

        $adsProviders = [
            ['user_id'=>'4', 'ads_id'=>'1', 'created_at'=>$timestamp, 'updated_at'=>$timestamp],
            ['user_id'=>'4', 'ads_id'=>'2', 'created_at'=>$timestamp, 'updated_at'=>$timestamp],
            ['user_id'=>'4', 'ads_id'=>'3', 'created_at'=>$timestamp, 'updated_at'=>$timestamp],
            ['user_id'=>'4', 'ads_id'=>'4', 'created_at'=>$timestamp, 'updated_at'=>$timestamp],
            ['user_id'=>'4', 'ads_id'=>'5', 'created_at'=>$timestamp, 'updated_at'=>$timestamp]
        ];
        DB::table('ads_providers')->insert($adsProviders);



        $billboards = [
            [
                'id'=>'1',
                'user_id'=>'3',
                'title'=>'BillBoard',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'id'=>'2',
                'user_id'=>'3',
                'title'=>'BillBoard 2',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'id'=>'3',
                'user_id'=>'3',
                'title'=>'BillBoard 3',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'id'=>'4',
                'user_id'=>'3',
                'title'=>'BillBoard 4',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
        ];

        DB::table('billboards')->insert($billboards);


        $billBoardsMedia = [
            [
                'mediable_type'=>'App\Models\Ads\Billboard',
                'mediable_id'=>'1',
                'path'=>'/uploads/defaults/media/thumbnail/billboard_01.jpg',
                'media_type'=>'thumbnail',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Billboard',
                'mediable_id'=>'2',
                'path'=>'/uploads/defaults/media/thumbnail/billboard_02.jpg',
                'media_type'=>'thumbnail',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Billboard',
                'mediable_id'=>'3',
                'path'=>'/uploads/defaults/media/thumbnail/billboard_03.jpg',
                'media_type'=>'thumbnail',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Billboard',
                'mediable_id'=>'4',
                'path'=>'/uploads/defaults/media/thumbnail/billboard_04.jpg',
                'media_type'=>'thumbnail',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
        ];
        DB::table('media')->insert($billBoardsMedia);


















        $faqs = [
            [
                'title'=>'How do I get my ad on adstocall?',
                'description'=>'Create an account submit your information upload your ads get them approved and that’s it',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'title'=>'How much can i earn per call?',
                'description'=>'A average user receives 1000-1500 calls per month, each call is priced at $0.05 per call, 1500 x 0.05 =$75 monthly passive income.',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'title'=>'As a user or advertiser will I get calls from telemarketers?',
                'description'=>'NO we will not call you about any offers, or share your number with any other third party advertisers.',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ]
        ];


        DB::table('faqs')->insert($faqs);

    }
}
