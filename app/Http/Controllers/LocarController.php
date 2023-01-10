<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Locar;
use App\Models\Filmes;
use App\Models\Clientes;

use Illuminate\Support\Facades\DB;

class LocarController extends Controller
{
    public function index()
    {
        $filmes['filmes'] = Filmes::all();
        $clientes['clientes'] = Clientes::all();
        $table['controle'] = locar::all();
        return view('locar', $table, $filmes, $clientes);
    }

    public function CadastrarLocacao(Request $req) {
        if ($req->has('locar')){

            $cod = $req->input('cod');
            $cpf = $req->input('cpf');
            date_default_timezone_set('America/Sao_Paulo');
            $data = date('Y-m-d');
            
            $nome_cliente = DB::table('clientes')->where('cpf', $cpf)->value('nome');
            $nome_filme = DB::table('filmes')->where('cod', $cod)->value('nome');

            DB::update('update filmes set disponivel = 1 where cod = ?', [$cod]);
            DB::insert('insert into controle (nome_cliente, nome_filme, cod_filme, cpf_cliente, data_locado) values (?, ?, ?, ?, ?)', [$nome_cliente, $nome_filme, $cod, $cpf, $data]);
            
            echo '<script>alert("Cadastrado com sucesso!")</script>';
		    echo '<script>location.href="'.BASE_LOCAR.'"</script>';
		    die();   
        }
    }
}

?>