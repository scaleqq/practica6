<?php

namespace App\Models;
use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    protected $table="baskets";
    protected $fillable=['user_id', 'product_id', 'quantity'];
    public function products(){
             return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
