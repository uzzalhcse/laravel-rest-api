<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionUpdateStatusRequest;
use App\Http\Requests\UploadReceiptRequest;
use App\Http\Resources\EloquentResource;
use App\Interfaces\TransactionRepositoryInterface;
use App\Models\PayoutHistory;
use App\Models\Share\Transaction;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends ApiController
{
    protected TransactionRepositoryInterface $transactionRepository;

    /**
     * @param TransactionRepositoryInterface $transactionRepository
     */
    public function __construct(TransactionRepositoryInterface $transactionRepository)
    {
        $this->transactionRepository = $transactionRepository;
    }
    public function index(): JsonResponse
    {
        return $this->success('Transaction History',[
            'items'=>new EloquentResource($this->transactionRepository->getAllItems())
        ]);
    }


    public function purchaseHistory(): JsonResponse
    {
        return $this->success('Purchase History',[
            'items'=>new EloquentResource($this->transactionRepository->purchaseHistory())
        ]);
    }
    public function uploadReceipt(UploadReceiptRequest $request ): JsonResponse
    {
        $transaction = Transaction::findOrFail($request->transaction_id);
        $res = $this->transactionRepository->uploadReceipt($request,$transaction);
        return $res ? $this->success('Receipt Upload successfully') : $this->error('Upload failed');
    }

    public function markAsCompleted(Transaction $transaction): JsonResponse
    {
        $res = $this->transactionRepository->markAsCompleted($transaction);

        send_notification([$transaction->user->id],'Package Purchase',"Your Payment is approve by admin");
        return $res ? $this->success('Transaction updated successfully') : $this->error('Transaction update failed');
    }

    public function payoutHistory(){
        $items = PayoutHistory::latest();
        return $this->success('All Payout History',[
            'items'=> new EloquentResource(paginate_if_required($items))
        ]);
    }

    public function payoutStatusUpdate(Request $request){
        $payoutHistory = PayoutHistory::findOrFail($request->id);
        $payoutHistory->status_id = $request->status_id;
        $payoutHistory->save();

        send_notification([$payoutHistory->user->id],'Payout Request',"Your Withdrawal Request is approved");
        return $this->success('Status updated successfully');
    }
}
