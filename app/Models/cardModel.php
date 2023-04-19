<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cardModel extends Model
{
    use HasFactory;
    protected $table="cardinfo";
    protected $primaryKey="tnxId";
    protected $fillable=[
        'tnxId',
        'name',
        'cardnumber',
        'expirydate',
        'cvv'
    ];
}
