<?php

namespace App\Interfaces;

use App\Models\Ads\Ads;
use Illuminate\Http\Request;

interface AdsRepositoryInterface extends BaseEloquentInterface
{
    public function popularItems();
    public function updateStatus(Ads $ads,$status);
    public function handleMedia(Request $request, Ads $ads);

}
