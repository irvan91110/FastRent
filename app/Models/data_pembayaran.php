<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_pembayaran extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'data_booking_id',
        'metode_pembayaran',
        'status_pembayaran', 
    ];
    public function data_booking(){
        return $this->hasOne(data_booking::class);
    }

}
