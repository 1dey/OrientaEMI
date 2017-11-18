<?php
    use Illuminate\Database\Eloquent\Model;
    class Usuarios extends Model
    {
        protected $table='usuarios';

        protected $fillable=[
            'email',
            'password',
            'fecha_creacion',
            'tipo'
        ];

        public $incrementing=true;
        public $timestamps=false;
    }
?>