<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','total','serial_number','sub_total', 'paid', 'change', 'total'
    ];
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    
}
