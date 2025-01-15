<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\BalanceUserRepository;
use Illuminate\Support\Facades\DB;
use Exception;

class BalanceUserService
{
    protected $balanceUserRepo;

    public function __construct(BalanceUserRepository $balanceUserRepo ){
        $this->balanceUserRepo = $balanceUserRepo;
    }

    public function deposit(int $user, ?string $accountNumber, ?float $amount){
        
        if ($amount < 0) {
            throw new Exception('Deposit amout cannot be less or equal than 00.00.');
        }
    
        if ($amount > 1000) {
            throw new Exception('Deposit amout cannot be greater than 1000.00.');
        }
        
        if ($amount == null || $amount == 0) {
            throw new Exception('User need to deposit at least 00.01 amount.');
        }   

        if ($accountNumber == null){
            throw new Exception('User need to have one account for make a deposit transaction.');
        }
        
        $this->balanceUserRepo->createDepositTransaction($user, $accountNumber, $amount);
    }
}