<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Address extends Model
{
    protected $fillable = [
        'user_id',
        'label',
        'provinsi',
        'kota_kabupaten',
        'kecamatan',
        'kelurahan_desa',
        'rt_rw',
        'kode_pos',
        'address',
        'is_primary', // jika kamu pakai field ini
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
