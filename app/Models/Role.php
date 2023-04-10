<?php

namespace App\Models;

use App\Traits\Uuid;
use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, Uuid, SoftDeletes;
    protected $table    = 'roles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'role_level',
        'role_name'
    ];
    protected $casts = ['id' => 'string'];

    public function permission()
    {
        return $this->belongsToMany(Permission::class, 'authorizes', 'role_id', 'permission_id');
    }
}
