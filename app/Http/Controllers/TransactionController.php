<?php

namespace App\Http\Controllers;

use App\Http\Resources\EloquentResource;
use App\Interfaces\TransactionRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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
}
