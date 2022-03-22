<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    protected $table = 'studio';
    protected $fillable = ['studio'];
    use HasFactory;
}
