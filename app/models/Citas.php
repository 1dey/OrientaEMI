<?php
    use Illuminate\Database\Eloquent\Model;
    class Citas extends Model
    {
        protected $table='citas';

        protected $fillable=[
            'id_estudiante',
            'fecha_hora',
            'asunto',
            'estado'
        ];

        public $incrementing=true;
        public $timestamps=false;
    }
?>