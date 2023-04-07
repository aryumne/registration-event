<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Authorize extends Model
{
    use HasFactory, Uuid;
    protected $table    = 'authorizes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'role_id',
        'permission_id'
    ];
    protected $casts = ['id' => 'string'];
}
