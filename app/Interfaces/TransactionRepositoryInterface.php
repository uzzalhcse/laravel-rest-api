<?php

namespace App\Interfaces;

interface TransactionRepositoryInterface extends BaseEloquentInterface
{
    public function purchaseHistory();

}
