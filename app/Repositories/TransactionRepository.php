<?php

namespace App\Repositories;

use App\Interfaces\TransactionRepositoryInterface;
use App\Models\Share\Status;
use App\Models\Share\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    /**
     * @return string|null
     */
    public function uploadReceipt(Request $request, Transaction $transaction): ?string
    {
        $receipt = upload_file($request,'receipt_file','/media/receipt/');
        if ($receipt) $transaction->receipt()->updateOrCreate(['media_type'=>'receipt'],[
            'path'=>$receipt,
            'media_type'=>'receipt',
        ]);
        return $receipt;
    }

    /**
     * @param Request $request
     * @param Transaction $transaction
     * @return mixed
     */
    public function markAsCompleted(Transaction $transaction): mixed
    {
        DB::beginTransaction();
        try {
            $transaction->status_id = Status::Completed;
            $transaction->save();

            $transaction->package->status_id = Status::Active;
            $transaction->package->save();

            DB::commit();
            return $transaction;
        } catch (\Exception $exception){
            DB::rollBack();
            return false;
        }
    }
}
