<?php
    use Illuminate\Database\Eloquent\Model;
    class Preguntas extends Model
    {
        protected $table='preguntas';

        protected $fillable=[
            'pregunta',
            'tipo',
            'estado',
            'test'
        ];

        public $incrementing=true;
        public $timestamps=false;
    }
?>