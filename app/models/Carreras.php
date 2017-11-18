<?php
    use Illuminate\Database\Eloquent\Model;
    class Carreras extends Model
    {
        protected $table='carreras';

        protected $fillable=[
            'nombre',
            'categoria',
            'acreditada'
        ];

        public $incrementing=true;
        public $timestamps=false;
    }
?>