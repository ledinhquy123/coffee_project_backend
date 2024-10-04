<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fback extends Model
{
    use HasFactory;

    private $table = "fbacks";

    protected $fillable = [
        'evaluate',
        'message',
        'replied'
    ];

    public function order() {
        return $this->belongsTo(Order::class);
    }
}