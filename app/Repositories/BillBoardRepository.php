<?php

namespace App\Repositories;

use App\Interfaces\BillBoardRepositoryInterface;
use App\Models\Ads\Billboard;

class BillBoardRepository extends BaseEloquentRepository implements BillBoardRepositoryInterface
{
    protected Billboard $billboard;

    /**
     * @param Billboard $billboard
     */
    public function __construct(Billboard $billboard)
    {
        parent::__construct($billboard);
    }


}
