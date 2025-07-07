<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use Hasfactory;

   protected $table ='ciudad';
   protected $fillable =[
    'id_ciudad',
    'Nombre',
    'id_Departamento',
   ];

   public function ciudades()

   {
    return $this->hasMany(egresado::class);
   }

}
