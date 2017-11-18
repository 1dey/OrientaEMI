<?php
    use Illuminate\Database\Eloquent\Model;
    class RespuestasIngenieria extends Model
    {
        protected $table='respuestasingenieria';

        protected $fillable=[
            'id_pregunta',
            'respuesta',
            'solucion',
            'image_path'
        ];

        public $incrementing=true;
        public $timestamps=false;
    }
?>