<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','bio', 'nascimento', 'cidade'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
