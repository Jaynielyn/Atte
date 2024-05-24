<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stamp extends Model
{
    use HasFactory;

    protected $table = 'stamps';

    protected $fillable = [
        'id',
        'user_id',
        'start-time',
        'finish-time',
        'break-start',
        'break-finish'
    ];

    //user関連付け
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
