<?php

namespace App\Interfaces;

use App\Models\Ads\Billboard;
use Illuminate\Http\Request;

interface BillBoardRepositoryInterface extends BaseEloquentInterface
{
    public function updateStatus(Billboard $billboard, $status);
    public function handleMedia(Request $request, Billboard $billboard);

}
