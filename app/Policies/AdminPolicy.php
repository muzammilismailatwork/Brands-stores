<?php

namespace App\Policies;

use App\Models\User;

class AdminPolicy
{
    public function manage_brands(User $user):bool{
        return $user->admin;
    }
    public function manage_stores(User $user):bool{
        return $user->admin;
    }
}
