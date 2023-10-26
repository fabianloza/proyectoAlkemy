<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'producto_id',
        'cantidad',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function producto(){
        return $this->belongsTo(Producto::class);
    }
}
