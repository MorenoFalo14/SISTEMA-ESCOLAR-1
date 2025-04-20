<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Authenticatable
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = "usuario";
    protected $primaryKey = "idusuario";
    public $timestamps = false;

    protected $fillable = [
        'idusuario','nome', 'login','password'
    ];
}
?>
