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
                'amount'=>'1200',
                'audition_limit'=>'10000',
                'expired_at'=>'2022-12-28',
                'transaction_id'=>'1',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ]
        ];


        DB::table('user_packages')->insert($userPacks);


        $ads = [
            [
                'id'=>'1',
                'user_id'=>'3',
                'title'=>'CITI Bank',
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
                'title'=>'Pizza Hut',
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
            ],
            [
                'id'=>'6',
                'user_id'=>'3',
                'title'=>'Geico',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic soluta unde veniam. Ipsa, mollitia, nemo? Ab aut delectus dolorem eaque eum explicabo fugit laboriosam perspiciatis ut vero. Corporis, impedit iste.',
                'male_age_range'=>'[20,62]',
                'female_age_range'=>'[21,45]',
                'preferred_gender'=>'both',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'id'=>'7',
                'user_id'=>'3',
                'title'=>'Expedia',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic soluta unde veniam. Ipsa, mollitia, nemo? Ab aut delectus dolorem eaque eum explicabo fugit laboriosam perspiciatis ut vero. Corporis, impedit iste.',
                'male_age_range'=>'[20,62]',
                'female_age_range'=>'[21,45]',
                'preferred_gender'=>'both',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'id'=>'8',
                'user_id'=>'3',
                'title'=>'H&M',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic soluta unde veniam. Ipsa, mollitia, nemo? Ab aut delectus dolorem eaque eum explicabo fugit laboriosam perspiciatis ut vero. Corporis, impedit iste.',
                'male_age_range'=>'[20,62]',
                'female_age_range'=>'[21,45]',
                'preferred_gender'=>'both',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'id'=>'9',
                'user_id'=>'3',
                'title'=>'MCDonalds',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic soluta unde veniam. Ipsa, mollitia, nemo? Ab aut delectus dolorem eaque eum explicabo fugit laboriosam perspiciatis ut vero. Corporis, impedit iste.',
                'male_age_range'=>'[20,62]',
                'female_age_range'=>'[21,45]',
                'preferred_gender'=>'both',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'id'=>'10',
                'user_id'=>'3',
                'title'=>'Disney',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic soluta unde veniam. Ipsa, mollitia, nemo? Ab aut delectus dolorem eaque eum explicabo fugit laboriosam perspiciatis ut vero. Corporis, impedit iste.',
                'male_age_range'=>'[20,62]',
                'female_age_range'=>'[21,45]',
                'preferred_gender'=>'both',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'id'=>'11',
                'user_id'=>'3',
                'title'=>'Subway',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic soluta unde veniam. Ipsa, mollitia, nemo? Ab aut delectus dolorem eaque eum explicabo fugit laboriosam perspiciatis ut vero. Corporis, impedit iste.',
                'male_age_range'=>'[20,62]',
                'female_age_range'=>'[21,45]',
                'preferred_gender'=>'both',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'id'=>'12',
                'user_id'=>'3',
                'title'=>'T-Mobile',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic soluta unde veniam. Ipsa, mollitia, nemo? Ab aut delectus dolorem eaque eum explicabo fugit laboriosam perspiciatis ut vero. Corporis, impedit iste.',
                'male_age_range'=>'[20,62]',
                'female_age_range'=>'[21,45]',
                'preferred_gender'=>'both',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'id'=>'13',
                'user_id'=>'3',
                'title'=>'Liberty Mutual',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic soluta unde veniam. Ipsa, mollitia, nemo? Ab aut delectus dolorem eaque eum explicabo fugit laboriosam perspiciatis ut vero. Corporis, impedit iste.',
                'male_age_range'=>'[20,62]',
                'female_age_range'=>'[21,45]',
                'preferred_gender'=>'both',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'id'=>'14',
                'user_id'=>'3',
                'title'=>'Choice Hotels',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic soluta unde veniam. Ipsa, mollitia, nemo? Ab aut delectus dolorem eaque eum explicabo fugit laboriosam perspiciatis ut vero. Corporis, impedit iste.',
                'male_age_range'=>'[20,62]',
                'female_age_range'=>'[21,45]',
                'preferred_gender'=>'both',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'id'=>'15',
                'user_id'=>'3',
                'title'=>'Pringles',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic soluta unde veniam. Ipsa, mollitia, nemo? Ab aut delectus dolorem eaque eum explicabo fugit laboriosam perspiciatis ut vero. Corporis, impedit iste.',
                'male_age_range'=>'[20,62]',
                'female_age_range'=>'[21,45]',
                'preferred_gender'=>'both',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ]
        ];


        DB::table('ads')->insert($ads);


        $adsMedia = [
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'1',
                'path'=>'/uploads/defaults/media/thumbnail/citi.png',
                'media_type'=>'thumbnail',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'1',
                'path'=>'/uploads/defaults/media/banner/citibank.png',
                'media_type'=>'banner',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'1',
                'path'=>'/uploads/defaults/media/audio/citibank.mp3',
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
                'path'=>'/uploads/defaults/media/banner/cocacola.png',
                'media_type'=>'banner',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'2',
                'path'=>'/uploads/defaults/media/audio/cocacola.mp3',
                'media_type'=>'audio',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'3',
                'path'=>'/uploads/defaults/media/thumbnail/pizzahut.png',
                'media_type'=>'thumbnail',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'3',
                'path'=>'/uploads/defaults/media/banner/pizzahut.png',
                'media_type'=>'banner',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'3',
                'path'=>'/uploads/defaults/media/audio/pizzahut.mp3',
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
                'path'=>'/uploads/defaults/media/banner/starbucks.png',
                'media_type'=>'banner',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'4',
                'path'=>'/uploads/defaults/media/audio/starbucks.mp3',
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
                'path'=>'/uploads/defaults/media/banner/pepsi.png',
                'media_type'=>'banner',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'5',
                'path'=>'/uploads/defaults/media/audio/pepsi.mp3',
                'media_type'=>'audio',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'6',
                'path'=>'/uploads/defaults/media/thumbnail/geico.png',
                'media_type'=>'thumbnail',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'6',
                'path'=>'/uploads/defaults/media/banner/geico.png',
                'media_type'=>'banner',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'6',
                'path'=>'/uploads/defaults/media/audio/geico.mp3',
                'media_type'=>'audio',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'7',
                'path'=>'/uploads/defaults/media/thumbnail/expedia.png',
                'media_type'=>'thumbnail',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'7',
                'path'=>'/uploads/defaults/media/banner/expedia.png',
                'media_type'=>'banner',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'7',
                'path'=>'/uploads/defaults/media/audio/expedia.mp3',
                'media_type'=>'audio',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'8',
                'path'=>'/uploads/defaults/media/thumbnail/h&m.png',
                'media_type'=>'thumbnail',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'8',
                'path'=>'/uploads/defaults/media/banner/h&m.png',
                'media_type'=>'banner',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'8',
                'path'=>'/uploads/defaults/media/audio/h&m.mp3',
                'media_type'=>'audio',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'9',
                'path'=>'/uploads/defaults/media/thumbnail/mcdonalds.png',
                'media_type'=>'thumbnail',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'9',
                'path'=>'/uploads/defaults/media/banner/mcdonalds.png',
                'media_type'=>'banner',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'9',
                'path'=>'/uploads/defaults/media/audio/mcdonalds.mp3',
                'media_type'=>'audio',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'10',
                'path'=>'/uploads/defaults/media/thumbnail/disney.png',
                'media_type'=>'thumbnail',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'10',
                'path'=>'/uploads/defaults/media/banner/disney.png',
                'media_type'=>'banner',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'10',
                'path'=>'/uploads/defaults/media/audio/disney.mp3',
                'media_type'=>'audio',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'11',
                'path'=>'/uploads/defaults/media/thumbnail/subway.png',
                'media_type'=>'thumbnail',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'11',
                'path'=>'/uploads/defaults/media/banner/subway.png',
                'media_type'=>'banner',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'11',
                'path'=>'/uploads/defaults/media/audio/subway.mp3',
                'media_type'=>'audio',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'12',
                'path'=>'/uploads/defaults/media/thumbnail/tmobile.png',
                'media_type'=>'thumbnail',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'12',
                'path'=>'/uploads/defaults/media/banner/tmobile.png',
                'media_type'=>'banner',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'12',
                'path'=>'/uploads/defaults/media/audio/tmobile.mp3',
                'media_type'=>'audio',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'13',
                'path'=>'/uploads/defaults/media/thumbnail/liberty.png',
                'media_type'=>'thumbnail',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'13',
                'path'=>'/uploads/defaults/media/banner/liberty.png',
                'media_type'=>'banner',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'13',
                'path'=>'/uploads/defaults/media/audio/liberty.mp3',
                'media_type'=>'audio',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'14',
                'path'=>'/uploads/defaults/media/thumbnail/choice.png',
                'media_type'=>'thumbnail',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'14',
                'path'=>'/uploads/defaults/media/banner/choice.png',
                'media_type'=>'banner',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'14',
                'path'=>'/uploads/defaults/media/audio/choicehotel.mp3',
                'media_type'=>'audio',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'15',
                'path'=>'/uploads/defaults/media/thumbnail/pringle.png',
                'media_type'=>'thumbnail',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'15',
                'path'=>'/uploads/defaults/media/banner/pringle.png',
                'media_type'=>'banner',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'mediable_type'=>'App\Models\Ads\Ads',
                'mediable_id'=>'15',
                'path'=>'/uploads/defaults/media/audio/pringle.mp3',
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
