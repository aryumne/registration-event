<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory, Uuid;
    protected $table    = 'events';
    protected $primaryKey = 'id';
    protected $fillable = ['event_name'];
    protected $casts = ['id' => 'string'];
}
