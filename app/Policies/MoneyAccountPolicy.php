<?php

namespace App\Policies;

use App\Models\MoneyAccount;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MoneyAccountPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, MoneyAccount $moneyAccount): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, MoneyAccount $moneyAccount): bool
    {
    }

    public function delete(User $user, MoneyAccount $moneyAccount): bool
    {
    }

    public function restore(User $user, MoneyAccount $moneyAccount): bool
    {
    }

    public function forceDelete(User $user, MoneyAccount $moneyAccount): bool
    {
    }
}
