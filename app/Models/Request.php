<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;
    protected $table = 'requests';
    
    protected $guarded = [
        'id',
    ];

    public function accepted()
    {
        return $this->hasOne(AcceptedRequest::class, 'request_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
