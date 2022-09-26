<?php

namespace App\Interfaces;

use App\Models\Share\Transaction;
use Illuminate\Http\Request;

interface TransactionRepositoryInterface extends BaseEloquentInterface
{
    public function purchaseHistory();
    public function uploadReceipt(Request $request, Transaction $transaction);
    public function markAsCompleted(Transaction $transaction);

}
