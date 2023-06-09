<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cartModel extends Model
{
    use HasFactory;
    protected $table="cart";
    protected $primaryKey="cartId";
    protected $fillable=[
        'cartId',
        'userID',
        'productId'
    ];

    public function product(){
        return $this->hasOne(productModel::class,"productId","productId");
     }
}
