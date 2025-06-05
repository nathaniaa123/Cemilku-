<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = ['order_id', 'collection_id', 'customize_id', 'quantity', 'price'];

    public function customize() {
        return $this->belongsTo(Customize::class);
    }

    public function collection() {
        return $this->belongsTo(Collection::class);
    }

    public function order() {
        return $this->belongsTo(Order::class);
    }
}
