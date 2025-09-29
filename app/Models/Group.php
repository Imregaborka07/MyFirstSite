<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public static function csoporLista(){
        return ["Laci", "Máté", "Ábel","Bertha Marci"];
    }
}
