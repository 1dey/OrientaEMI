<?php
use Illuminate\Database\Eloquent\Model;
class Estudiantes extends Model
{
    protected $table='estudiantes';

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