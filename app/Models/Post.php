<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function getExcerptAttribute()
    {
        return substr($this->content, 0, 120); //Devuelve los primeros 120 caracteres
    }

    public function getPublishedAtAttribute()
    {
        // return $this->created_at->format('d/m/Y'); //Nos muestra la creacion en formato dia-mes-año
        return $this->created_at->diffForHumans(); //Nos muestra incluso hace cuantos minutos se creo
    }

    public function user()
    {
        return $this -> belongsTo(User::class);
    }
}
