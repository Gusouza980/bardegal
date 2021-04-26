<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, "noticia_tags", "noticia_id", "tag_id");
    }
}
