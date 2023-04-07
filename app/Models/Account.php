<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable
{
    use HasFactory, Uuid;
    protected $table    = 'accounts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'role_id',
        'is_active',
        'event_id',
        'email_verified_at',
        'remember_me'
    ];
    protected $casts = ['id' => 'string'];

    public function event() {
        return $this->belongsTo(Event::class,'event_id', 'id');
    }

    public function role() {
        return $this->belongsTo(Role::class,'role_id','id');
    }
}
