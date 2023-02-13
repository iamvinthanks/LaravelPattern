<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Kurir extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'kurirs';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'Kurir',
        'harga',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    
}
