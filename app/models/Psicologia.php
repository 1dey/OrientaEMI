<?php
use Illuminate\Database\Eloquent\Model;
class Psicologia extends Model
{
    protected $table='psicologia';

    protected $fillable=[
        'ci',
        'nombres',
        'apellidos',
        'curso',
        'telefono',
        'email',
        'password',
        'sexo'
    ];

    public $timestamps=false;
}
?>