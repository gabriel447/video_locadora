<?php 

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Devolver extends Model
    {
        protected $table = 'historico';
        protected $data = 'contole';
        protected $filmes = 'filmes';
        protected $clientes = 'clientes';
        public $timestamps = false;
    }
?>