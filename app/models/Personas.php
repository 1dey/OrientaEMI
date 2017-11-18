<?php
use Illuminate\Database\Eloquent\Model;
class Personas extends Model
{
    protected $table='personas';

    protected $fillable=[
        'ci',
        'nombres',
        'apellidos',
        'curso_paralelo',
        'gestion',
        'telefono',
        'email',
        'password',
        'genero'
    ];

    public $timestamps=false;
}
?>