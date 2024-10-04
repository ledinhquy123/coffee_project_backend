<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    private $table = "members";

    protected $fillable = [
        'member_level',
        'discount_percentage'
    ];

    public function userMembers() {
        return $this->hasMany(UserMember::class);
    }
}