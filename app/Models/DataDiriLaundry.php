<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataDiriLaundry extends Model
{
    use HasFactory;
    protected $table = 'datadiri';
    protected $primaryKey = 'id_datadiri';
    protected $fillable = ['nama_pelanggan', 'alamat', 'jeniskelamin','no_hp'];
}
