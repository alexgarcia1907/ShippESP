<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poblacione extends Model
{
    use HasFactory;

    public function municipio()
    {
        return $this->belongsTo(Municipio::class, 'CMUM' , 'CMUM');
    }
}
