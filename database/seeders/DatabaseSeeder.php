<?php

namespace Database\Seeders;

use Database\Seeders\Acl\AbilityTableSeeder;
use Database\Seeders\Acl\FeatureTableSeeder;
use Database\Seeders\Acl\ModuleTableSeeder;
use Database\Seeders\Acl\PermissionSeeder;
use Database\Seeders\Acl\RolePermissionSeeder;
use Database\Seeders\Acl\UserPermissionSeeder;
use Database\Seeders\Auth\RolesTableSeeder;
use Database\Seeders\Auth\UsersTableSeeder;
use Database\Seeders\Blog\BlogCommentSeeder;
use Database\Seeders\Blog\BlogSeeder;
use Database\Seeders\Package\PackageSeeder;
use Database\Seeders\Share\CommonSeeder;
use Database\Seeders\Share\CountrySeeder;
use Database\Seeders\Share\StatusSeeder;
use Database\Seeders\Share\TransactionSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(StatusSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ModuleTableSeeder::class);
        $this->call(FeatureTableSeeder::class);
        $this->call(AbilityTableSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(RolePermissionSeeder::class);
        $this->call(UserPermissionSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(BlogCommentSeeder::class);
        $this->call(PackageSeeder::class);
        $this->call(TransactionSeeder::class);
        $this->call(CommonSeeder::class);
        $this->call(AdsSubscriptionSeeder::class);
        $this->call(AdsReviewSeeder::class);
        $this->call(AuditionSeeder::class);
        $this->call(AuditionHistorySeeder::class);
        $this->call(PayoutHistorySeeder::class);
        $this->call(MessageSeeder::class);
    }
}
