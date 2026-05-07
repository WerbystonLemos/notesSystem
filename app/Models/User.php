<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    
    public function notes()
    {
        // 1:N -> um user para muitas notas
        return $this->hasMany(Note::class);
    }
}
