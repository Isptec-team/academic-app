<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activitie extends Model
{
    use HasFactory;

    public $fillable = [
        'img',
        'data',
        'local',
        'descricao',
        'preletores',
        'id_categoria'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,"id_categoria");
    }
}
