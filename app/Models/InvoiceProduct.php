<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceProduct extends Model
{
    use HasFactory;

    private $table = "invoice_products";

    protected $fillable = [
        'expire_date'
    ];

    public function product()
    {
        return $this->belongsTo(
            Product::class
        );
    }

    public function invoice()
    {
        return $this->belongsTo(
            Invoice::class
        );
    }
}