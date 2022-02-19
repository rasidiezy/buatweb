<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Checkouts;
use Auth;

class Paket extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'judul',
        'harga',
    ];

    public function getIsRegisteredAttribute()
    {
        if (!Auth::check()) {
            return false;
        }

        return Checkouts::where('paket_id', $this->id)->where('users_id',Auth::Id())->exists();
    }
}
