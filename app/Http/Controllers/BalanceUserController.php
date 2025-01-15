<?php

namespace App\Http\Controllers;

use App\Models\BalanceUser;
use App\Http\Requests\StoreBalanceUserRequest;
use App\Http\Requests\UpdateBalanceUserRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Services\BalanceUserService;
use App\Repositories\BalanceUserRepository;
use App\Http\Requests\DepositRequest;
use App\Models\User;

class BalanceUserController extends Controller
{
    public function __construct(BalanceUserService $balanceUserService)
    {
        $this->balanceUserService = $balanceUserService;
        $this->middleware('auth');
    }

    public function index()
    {
        return view('app.transfer');
    }

    public function depositValue(DepositRequest $request, User $user)
    {
        $user = Auth::user();

        $this->balanceUserService->deposit(
            $user->id,
            $user->getAccountNumber(),
            $request->amount
        );
    }
}
