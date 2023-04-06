<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permission extends Model
{
    use HasFactory, Uuid;
    protected $table    = 'permissions';
    protected $primaryKey = 'id';
    protected $fillable = [
        'permission_sluk',
        'permission_name'
    ];
    protected $casts = ['id' => 'string'];
}
