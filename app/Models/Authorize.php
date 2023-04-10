<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Authorize extends Model
{
    use HasFactory, Uuid, SoftDeletes;
    protected $table    = 'authorizes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'role_id',
        'permission_id'
    ];
    protected $casts = ['id' => 'string'];
}
