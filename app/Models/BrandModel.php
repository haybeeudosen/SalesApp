<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductModel;


class BrandModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_name'
    ];
    public function product(){
        return $this->hasMany(ProductModel::class);
    }
}
