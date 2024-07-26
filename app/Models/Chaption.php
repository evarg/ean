<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chaption extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'desc'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
