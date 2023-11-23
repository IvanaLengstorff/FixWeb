<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompletedRequest extends Model
{
    use HasFactory;

    protected $table = 'completed_requests';
    
    protected $guarded = [
        'id',
    ];
}
