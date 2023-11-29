<?php

namespace App\Http\Controllers;

use App\Http\Requests\MoneyAccountRequest;
use App\Http\Resources\MoneyAccountResource;
use App\Models\MoneyAccount;

class MoneyAccountController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', MoneyAccount::class);

        return MoneyAccountResource::collection(MoneyAccount::all());
    }

    public function store(MoneyAccountRequest $request)
    {
        $this->authorize('create', MoneyAccount::class);

        return new MoneyAccountResource(MoneyAccount::create($request->validated()));
    }

    public function show(MoneyAccount $moneyAccount)
    {
        $this->authorize('view', $moneyAccount);

        return new MoneyAccountResource($moneyAccount);
    }

    public function update(MoneyAccountRequest $request, MoneyAccount $moneyAccount)
    {
        $this->authorize('update', $moneyAccount);

        $moneyAccount->update($request->validated());

        return new MoneyAccountResource($moneyAccount);
    }

    public function destroy(MoneyAccount $moneyAccount)
    {
        $this->authorize('delete', $moneyAccount);

        $moneyAccount->delete();

        return response()->json();
    }
}
