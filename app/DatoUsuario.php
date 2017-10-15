<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatoUsuario extends Model
{
    protected $table = "datosUsuario";
    protected $fillable = ["email", "username", "passwd"];
}
