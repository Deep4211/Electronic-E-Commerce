<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoryModel extends Model
{
    use HasFactory;
    protected $table="categories";
    protected $primaryKey="categoryId";
    protected $fillable=[
        'name',
        'imagePath'
    ];


}
