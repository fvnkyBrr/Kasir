<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        "transaction_id", "product_id", "qty", "harga", "sub_total"
    ];
    public function product(): BelongsTo
    {
        return $this->belongsTo(Barang::class);
    }


}
