<?php
    use Illuminate\Database\Eloquent\Model;
    class Fuzzy extends Model
    {
        protected $table='fuzzy';

        protected $fillable=[
            'id_estudiante',
            'carrera',
            'valor'
        ];

        public $incrementing=true;
        public $timestamps=false;
    }
?>