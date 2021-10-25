<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SupplierModel;
use App\Models\BrandModel;
use App\Models\CategoryModel;

class ProductModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'category_id',
        'brand_id',
        'supplier_id',
        'price',
        'quantity',
        'description'

    ];

    public function supplier(){
        return $this->belongsTo(SupplierModel::class);
    }
    public function category(){
        return $this->belongsTo(CategoryModel::class);
    }
    public function brand(){
        return $this->belongsTo(BrandModel::class);
    }

}
