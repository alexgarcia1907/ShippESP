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

}
