<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employ extends Model
{
    use HasFactory;
    protected $fillable =[
        'full_name',
        'image',
        'age',
        'email',
        'city_id'
    ];

    public function cities(){
        return $this->belongsTo(City::class,'city_id','id');
    }
}
