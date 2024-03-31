<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Barang extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'products';

    protected $fillable = ['name_product', 'id_category', 'price', 'stok'];
    public static function getProducts()
    {
        $records = DB::table('products')->select('id', 'name_product', 'category', 'price',  'stok')->get();
        return $records;
    }
    public function category()
    {
        return $this->belongsTo(Kategori::class, 'id_category');
    }
}
