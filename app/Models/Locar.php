<?php 

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Locar extends Model
    {
        protected $table = 'controle';
        protected $filmes = 'filmes';
        protected $clientes = 'clientes';
        public $timestamps = false;
    }
?>