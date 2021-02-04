<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rezervasyon extends Model
{
    use HasFactory;

    protected $fillable= [
        'hizmet_id',
        'user_id',
        'name' ,
        'phone' ,
        'talephizmet' ,
        'tarih'  ,
        'saat' ,
        'Not'
    ];
    public function hizmet()
    {
        return $this->belongsTo(Hizmet::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
