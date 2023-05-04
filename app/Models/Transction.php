<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transction extends Model
{
    use HasFactory;
    protected $fillable = [
        'account_id',
        'transaction_date',
        'description',
        'debit_credit',
        'ammount',
    ];
    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
