<?php
    use Illuminate\Database\Eloquent\Model;
    class Resultados extends Model
    {
        protected $table='resultados';

        protected $fillable=[
            'id_estudiante',
            'tipo',
            'porcentaje',
            'test'
        ];

        public $incrementing=true;
        public $timestamps=false;
    }
?>