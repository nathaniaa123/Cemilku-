<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customize extends Model
{
    protected $fillable = ['name', 'type', 'price', 'image', 'layer',
        'snack_id_1', 'snack_id_2', 'snack_id_3', 'snack_id_4',
        'decoration_id_1', 'decoration_id_2'];

    public function snacks() {
        return $this->belongsToMany(Snack::class, 'customize_snack')->withPivot('quantity');
    }

    public function decorations() {
        return $this->belongsToMany(Decoration::class, 'customize_decoration');
    }
}
