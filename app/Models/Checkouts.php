<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checkouts extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'users_id',
        'paket_id',
        'nomor_kartu',
        'kadaluwarsa',
        'cvc',
        'is_paid'
    ];
}
