<?php

namespace App\Models;

use App\Models\Transaction;


class Buyer extends User
{
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
