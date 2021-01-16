<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hizmet extends Model
{
    use HasFactory;

    #One to Many (İnverse)/ Belongs to-- Ait olma durumu

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
