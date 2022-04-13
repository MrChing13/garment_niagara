<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventory extends Model
{
    use HasFactory;
    public $timestamps = false;
}

class show extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_supplier',
        'kategori_produk',
        'nama_produk',
        'panjang_produk',
        'berat_produk',
    ];
}

class payroll extends Model
{
    use HasFactory;
    public $timestamps = false;
}

?>