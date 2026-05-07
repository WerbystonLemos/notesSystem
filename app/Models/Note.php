<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = 'notes';

    public function user()
    {
        // 1:1 -> 1 nota pertence a um User
        return $this->belongsTo(User::class);
    }

}
