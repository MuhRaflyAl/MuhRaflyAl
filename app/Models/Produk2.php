<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk2 extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama_produk','jumlah','merk_id'];
    public $timestamps = true;

    public function merk(){
        return $this->BelongsTo(Merk::class,'merk_id');
    }
}
