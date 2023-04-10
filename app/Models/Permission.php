<?php

namespace App\Models;

use App\Models\Role;
use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    use HasFactory, Uuid, SoftDeletes;
    protected $table    = 'permissions';
    protected $primaryKey = 'id';
    protected $fillable = [
        'permission_sluk',
        'permission_name'
    ];
    protected $casts = ['id' => 'string'];

    public function role()
    {
        return $this->belongsToMany(Role::class, 'authorizes', 'permission_id', 'role_id');
    }
}
