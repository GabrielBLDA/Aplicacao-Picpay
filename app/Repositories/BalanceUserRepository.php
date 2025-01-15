<?php

namespace App\Repositories;

use App\Models\BalanceUser;

class BalanceUserRepository
{
    public function createDepositTransaction(int $user, string $accountNumber, float $amount)
    {
        $deposit = BalanceUser::where('user_id', $user)
            ->where('account_number', $accountNumber)
            ->first();

        if (!$deposit) {
            $deposit = new BalanceUser();
            $deposit->user_id = $user;
            $deposit->account_number = $accountNumber;
            $deposit->balance = $amount;
        }

        $deposit->balance += $amount;

        $deposit->save();
    }
}