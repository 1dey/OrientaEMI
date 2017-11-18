<?php
    use Illuminate\Database\Eloquent\Model;
    class PruebasIngenieria extends Model
    {
        protected $table='pruebasingenieria';

        protected $fillable=[
            'id_estudiante',
            'id_pregunta',
            'respuesta',
            'tiempo'
        ];

        public $incrementing=true;
        public $timestamps=false;
    }
?>