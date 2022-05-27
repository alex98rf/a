<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
    'propietario','marca','modelo','precio','ahno','ultima_fecha_matriculacion','codigo_promocion'
    ];
}


class Car extends Model
{
    use HasFactory;
    public function customers(){
        return $this->hasMany(Car::class,'id');
    
    }
}
