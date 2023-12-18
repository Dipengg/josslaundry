<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{
    use HasFactory;
    protected $table = 'laundry';
    protected $primaryKey = 'id_laundry';
    protected $fillable = ['nama_pelanggan', 'pilihjasa', 'pembayaran','berat'];
}
