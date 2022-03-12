<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    protected $table='member';
    protected $fillable=['nama_lengkap','username','password','email','no_telp','alamat_lengkap','role'];
    use HasFactory;
}
