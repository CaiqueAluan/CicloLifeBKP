<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','titulo', 'texto', 'foto'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
