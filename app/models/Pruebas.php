<?php
    use Illuminate\Database\Eloquent\Model;
    class Pruebas extends Model
    {
        protected $table='pruebas';

        protected $fillable=[
            'id_estudiante',
            'res_TI',
            'res_MP',
            'res_DC',
            'res_CQI',
            'res_COM',
            'res_MA',
            'res_CP',
            'res_CA',
            'res_AR',
            'res_CT'
        ];

        public $incrementing=true;
        public $timestamps=false;
    }
?>