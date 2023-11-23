<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\BitacoraTrait;


class Branches extends Model
{
    use HasFactory,BitacoraTrait;
    protected $table = 'branches';
    
    protected $guarded = [
        'id',
    ];
}
