<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cpostale extends Model
{
    use HasFactory;

    public function poblacion()
    {
        return $this->belongsTo(Poblacione::class, 'CPOB' , 'CPOB');
    }
}
