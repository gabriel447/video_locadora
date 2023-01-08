<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Locar;
use App\Models\Filmes;
use Illuminate\Support\Facades\DB;

class LocarController extends Controller
{
    public function index()
    {
        $filmes['filmes'] = Filmes::all();
        $table['controle'] = locar::all();
        return view('locar', $filmes, $table);
    }

    public function CadastrarLocacao(Request $req) {
        if ($req->has('cadastrarlocacao')){

            $cod = $req->input('cod');
            $cpf = $req->input('cpf');
            $data = date('Y/m/d');

            DB::update('update filmes set disponivel = 1 where cod = ?', [$cod]);
            DB::insert('insert into controle (cod_filme, cpf_cliente, data_locado) values (?, ?, ?)', [$cod, $cpf, $data]);
            
            echo '<script>alert("Cadastrado com sucesso!")</script>';
		    echo '<script>location.href="'.BASE_LOCAR.'"</script>';
		    die();   
        }
    }
}

?>