<?php
    use Illuminate\Database\Eloquent\Model;
    class Respuestas extends Model
    {
        protected $table='respuestas';

        protected $fillable=[
            'id_prueba',
            'id_pregunta',
            'valor',
            'test'
        ];

        public $incrementing=true;
        public $timestamps=false;
    }
?>