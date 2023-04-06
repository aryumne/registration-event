<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory, Uuid;
    protected $table    = 'roles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'role_level',
        'role_name'
    ];
    protected $casts = ['id' => 'string'];
}
