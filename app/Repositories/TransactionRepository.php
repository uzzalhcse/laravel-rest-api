<?php

namespace App\Repositories;

use App\Interfaces\TransactionRepositoryInterface;
use App\Models\Share\Transaction;

class TransactionRepository extends BaseEloquentRepository implements TransactionRepositoryInterface
{
    protected Transaction $transaction;

    /**
     * @param Transaction $transaction
     */
    public function __construct(Transaction $transaction)
    {
        parent::__construct($transaction);
    }


    /**
     * @return mixed
     */
    public function purchaseHistory()
    {
        $items = $this->model::byOwner()->purchase()->latest();
        if (isset(request()->page)){ // paginate if request has page query
            $items = $items->paginate(config('settings.pagination.per_page'));
        } else{
            $items = $items->take(20)->get();
        }
        return $items;
    }
}
