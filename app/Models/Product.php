<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    private $table = "products";

    protected $fillable = [
        'email',
        'description',
        'stock',
        'img',
        'price'
    ];

    public function cartProducts()
    {
        return $this->hasMany(CartProduct::class);
    }

    public function invoiceProducts()
    {
        return $this->hasMany(InvoiceProduct::class);
    }

    public function productCategories()
    {
        return $this->hasMany(ProductCategory::class);
    }
}