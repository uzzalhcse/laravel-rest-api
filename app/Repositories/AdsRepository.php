<?php

namespace App\Repositories;

use App\Interfaces\AdsRepositoryInterface;
use App\Models\Ads\Ads;

class AdsRepository extends BaseEloquentRepository implements AdsRepositoryInterface
{
    protected Ads $ads;

    /**
     * @param Ads $ads
     */
    public function __construct(Ads $ads)
    {
        parent::__construct($ads);
    }


}
