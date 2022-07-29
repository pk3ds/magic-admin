<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'salary', 
        'nric', 
        'address', 
        'notel', 
        'position', 
        'date_hired', 
        'user_id'
    ];
    
    public function user() {
        return $this->belongsTo(User::class);
    }
}
