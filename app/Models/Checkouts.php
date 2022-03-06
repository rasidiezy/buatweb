<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Checkouts extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'users_id',
        'paket_id',
        'payment_status', 
        'midtrans_url', 
        'midtrans_booking_code',
        'discount_id', 
        'diskon_persentase', 
        'total'
    ];
    
    //memformat inputan kadaluwarsa di form checkout
    // public function setKadaluwarsaAttribute($value)
    // {
    //     $this->attributes['kadaluwarsa'] = date('Y-m-t', strtotime($value));
    // }

    /**
     * Get the Paket that owns the Checkouts
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    /**
     * Get the user that owns the Checkouts
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */


    public function Paket(): BelongsTo
    {
        return $this->belongsTo(Paket::class);
    }

    public function User()
    {
        return $this->hasOne(User::class, 'id','users_id');
        // return $this->belongsTo(User::class);
    }
    

    /**
     * Get the Discount that owns the Checkouts
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Discount(): BelongsTo
    {
        return $this->belongsTo(Discount::class);
    }
}
