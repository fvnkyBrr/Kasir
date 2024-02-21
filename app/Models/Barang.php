<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Barang extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'barang';

    // protected $fillable = ['id','nama_barang', 'id_category', 'harga', 'stok'];
    public static function getProducts()
    {
        $records = DB::table('barang')->select('id', 'nama_barang', 'kategori', 'harga',  'stok')->get();
        return $records;
    }
    public function category()
    {
        return $this->belongsTo(Kategori::class, 'id_category');
    }
}
