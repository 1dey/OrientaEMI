<?php
    use Illuminate\Database\Eloquent\Model;
    class PruebasAptitud extends Model
    {
        protected $table='pruebasaptitud';

        protected $fillable=[
            'id_estudiante',
            'res_EP',
            'res_MC',
            'res_PE',
            'res_VE',
            'res_V',
            'res_CB',
            'res_C',
            'res_CA',
            'res_A',
            'res_CI'
        ];

        public $incrementing=true;
        public $timestamps=false;
    }
?>