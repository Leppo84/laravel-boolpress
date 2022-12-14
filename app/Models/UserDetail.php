<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'user_id', 'address', 'phone', 'birth'
    ];

    // determina il nome della tabella sovrascrivendo la convenzione del plurale
    protected $table = 'user_details';

    public function user() {
        return $this->belongsTo('App\Models\User'); // nella tabella con il foreign key
    }
}