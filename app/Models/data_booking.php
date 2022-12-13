<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_booking extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'data_mobil_id',
        'email',
        'total_harga',
        'phone',
        'tanggal_booking',
        'tanggal_kembali',

    ];


    public function data_mobil()
    {
        return $this->belongsTo(data_mobils::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function data_pembayaran()
    {
        return $this->hasOne(data_pembayaran::class);
    }

}