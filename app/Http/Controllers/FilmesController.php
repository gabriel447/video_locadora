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
    
    public function cadastrarFilme(Request $req) 
    {
        if ($req->has('cadastrarfilme')){

            $nome = $req->input('nome');
            $genero = $req->input('genero');
            $ano = $req->input('ano');
            $cod = $req->input('cod');
            $disponivel = 0;
            
            DB::insert('insert into filmes (nome, genero, lancamento, disponivel, cod) values (?, ?, ?, ?, ?)', [$nome, $genero, $ano, $disponivel, $cod]);
     
            echo '<script>alert("Cadastrado com sucesso!")</script>';
		    echo '<script>location.href="'.BASE_MOVIES.'"</script>';
		    die();   
        }
    } 
}

?>