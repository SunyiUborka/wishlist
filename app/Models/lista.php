<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lista extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id',
        'name',
        'member'
    ];
}
