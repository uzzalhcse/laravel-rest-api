<?php

namespace App\Repositories;

use App\Interfaces\BillBoardRepositoryInterface;
use App\Models\Ads\Billboard;
use Illuminate\Http\Request;

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


    /**
     * @param Billboard $billboard
     * @param $status
     * @return mixed
     */
    public function updateStatus(Billboard $billboard, $status)
    {
        // TODO: Implement updateStatus() method.
    }

    /**
     * @param Request $request
     * @param Billboard $billboard
     * @return mixed
     */
    public function handleMedia(Request $request, Billboard $billboard)
    {
        // TODO: Implement handleMedia() method.
    }
}
