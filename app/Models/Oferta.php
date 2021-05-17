<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;


    public function usercreador()
    {
        return $this->belongsTo(User::class, 'empresa_id' , 'id');
    }

    public function userrepartidor()
    {
        return $this->belongsTo(User::class, 'repartidor_id' , 'id');
    }

    public function calledestino()
    {
        return $this->belongsTo(Calle::class, 'destino_id' , 'id');
    }

    public function calleorigen()
    {
        return $this->belongsTo(Calle::class, 'origen_id' , 'id');
    }

}
