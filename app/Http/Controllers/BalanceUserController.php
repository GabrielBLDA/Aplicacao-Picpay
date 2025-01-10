<?php

namespace App\Http\Controllers;

use App\Models\BalanceUser;
use App\Http\Requests\StoreBalanceUserRequest;
use App\Http\Requests\UpdateBalanceUserRequest;

class BalanceUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBalanceUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBalanceUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BalanceUser  $balanceUser
     * @return \Illuminate\Http\Response
     */
    public function show(BalanceUser $balanceUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BalanceUser  $balanceUser
     * @return \Illuminate\Http\Response
     */
    public function edit(BalanceUser $balanceUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBalanceUserRequest  $request
     * @param  \App\Models\BalanceUser  $balanceUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBalanceUserRequest $request, BalanceUser $balanceUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BalanceUser  $balanceUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(BalanceUser $balanceUser)
    {
        //
    }
}
