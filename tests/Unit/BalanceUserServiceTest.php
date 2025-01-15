<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\BalanceUserService;
use App\Repositories\BalanceUserRepository;
use Exception;

class BalanceUserServiceTest extends TestCase
{
    /**
    * @dataProvider providerDepositData
    */
    public function testDeposit($user, $accountNumber, $amount, $shouldThrowException, $expectedExceptionMessage)
    {
        $balanceUserRepoMock = $this->createMock(BalanceUserRepository::class);

        if (!$shouldThrowException) {
            $balanceUserRepoMock->expects($this->once())->method('createDepositTransaction');
        }

        $balanceUserService = new BalanceUserService($balanceUserRepoMock);

        if ($shouldThrowException) {
            $this->expectExceptionMessage($expectedExceptionMessage);
        }

        $balanceUserService->deposit($user, $accountNumber, $amount);
    }

    public function providerDepositData()
    {
        return [
            'Valid Deposit' => [
                'user' => 1,
                'accountNumber' => '40028922',
                'amount' => 20.0,
                'shouldThrowException' => false,
                'expectedExceptionMessage' => '',
            ],
            'Invalid Deposit Amount Negative' => [
                'user' => 1,
                'accountNumber' => '40028922',
                'amount' => -20.0,
                'shouldThrowException' => true,
                'expectedExceptionMessage' => 'Deposit amout cannot be less or equal than 00.00.',
            ],
            'Invalid Deposit Amount Too Large' => [
                'user' => 1,
                'accountNumber' => '40028922',
                'amount' => 1100.0,
                'shouldThrowException' => true,
                'expectedExceptionMessage' => 'Deposit amout cannot be greater than 1000.00.',
            ],
            'Invalid Deposit Amount Is Nothing' => [
                'user' => 1,
                'accountNumber' => '40028922',
                'amount' => null,
                'shouldThrowException' => true,
                'expectedExceptionMessage' => 'User need to deposit at least 00.01 amount.',
            ],
            'Account Number Missing' => [
                'user' => 1,
                'accountNumber' => null,
                'amount' => 800.0,
                'shouldThrowException' => true,
                'expectedExceptionMessage' => 'User need to have one account for make a deposit transaction.',
            ],
        ];
    }
}
