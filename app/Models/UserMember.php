<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMember extends Model
{
    use HasFactory;
    private $table = "user_members";

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function member() {
        return $this->belongsTo(Member::class);
    }
}
