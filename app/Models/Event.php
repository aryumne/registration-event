<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, Uuid, SoftDeletes;
    protected $table    = 'events';
    protected $primaryKey = 'id';
    protected $fillable = [
        'event_name',
        'company',
        'event_date'
    ];
    protected $casts = ['id' => 'string'];
}
