<?php 

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Filmes;
use Illuminate\Support\Facades\DB;

class FilmesController extends Controller
{
    public function index()
    {
        $data['filmes'] = Filmes::all();
        return view('filmes', $data);
    }   
    
    public function cadastrarLocacao(Request $req) 
    {
        if ($req->has('cadastrar')){

            $cod = $req->input('cod');
            $cpf = $req->input('cpf');
            $data = date('Y/m/d');

            DB::update('update filmes set disponivel = 1 where cod = ?', [$cod]);
            DB::insert('insert into locados (cod_filme, cpf_cliente, data_locado) values (?, ?, ?)', [$cod, $cpf, $data]);
             
            echo '<script>alert("Locado com sucesso!")</script>';
		    echo '<script>location.href="'.BASE_MOVIES.'"</script>';
		    die();   
        }
    } 
}

?>