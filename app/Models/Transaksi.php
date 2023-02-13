<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'transaksis';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'nama_pengirim',
        'alamat_pengirim',
        'nama_barang',
        'nama_penerima',
        'alamat_penerima',
        'kurir_id',
        'harga',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public static $rules = [
        'nama_pengirim'=>'required | max:255 | min:3 | string',
        'alamat_pengirim'=>'required | string',
        'nama_barang'=>'required | string',
        'nama_penerima'=>'required | string',
        'alamat_penerima'=>'required | string',
        'kurir_id'=>'required | integer'
    ];

    public function kurir()
    {
        return $this->belongsTo(Kurir::class, 'kurir_id','id')->select('id','Kurir');
    }
}
