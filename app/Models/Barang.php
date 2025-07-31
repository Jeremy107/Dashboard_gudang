<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    // Tentukan primary key yang sesuai dengan migrasi
    protected $primaryKey = 'kode_barang';

    // Nonaktifkan auto-increment karena kode_barang diinput manual
    public $incrementing = false;

    // Ubah guarded menjadi fillable untuk lebih spesifik
    protected $fillable = [
        'kode_barang',
        'category_id',
        'unit_id',
        'name',
        'description',
        'price',
        'stock',
        'weight',
        'url_picture'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class, 'kode_barang', 'kode_barang');
    }
}
