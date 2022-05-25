<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primary = 'id';

    protected $fillable = [
        'nome'
    ];

    public function activities()
    {
        return $this->hasMany(Activitie::class,"id_categoria");
    }
}
