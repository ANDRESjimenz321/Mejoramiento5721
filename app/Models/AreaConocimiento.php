<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AreaConocimiento extends Model
{
    use Hasfactory;

    protected $table = 'AreaConocimiento';

    protected $fillable =[
        'id_areaCon',
        'Nom_Area',
        
    ];

    public function titulo_academico()
    {
        return $this->belongsTo(titulos::class);
    }

    
}
