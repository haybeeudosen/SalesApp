<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductModel;

class SupplierModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_name',
        'address',
        'phone_number',
        'email',
        'organisation_name'

    ];

    public function product(){
        return $this->hasMany(ProductModel::class);
    }
}
