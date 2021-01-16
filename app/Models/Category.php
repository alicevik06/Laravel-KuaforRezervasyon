<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    #One to Many
    public function hizmetler()
    {
        return $this->hasMany(Hizmet::class);
    }
}
