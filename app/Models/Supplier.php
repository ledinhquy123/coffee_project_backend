<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    private $table = "suppliers";

    protected $fillable = [
        'name',
        'email',
        'address',
        'phone',
        'img'
    ];

    public function invoices() {
        return $this->hasMany(Invoice::class);
    }
}