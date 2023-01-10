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
        if (isset($_POST['cadastrarfilme'])) {

            $nome = $req->input('nome');
            $genero = $req->input('genero');
            $ano = $req->input('ano');
            $cod = $req->input('cod');

            $check_cod = preg_match('/^[1-9]{7}$/', $cod);
            $check_ano = preg_match('/^[0-9]{4}$/', $ano);

            if ($check_cod) {
                if ($check_ano) {

                    $disponivel = 0;

                    DB::insert('insert into filmes (nome, genero, lancamento, disponivel, cod) values (?, ?, ?, ?, ?)', [$nome, $genero, $ano, $disponivel, $cod]);

                    echo '<script>alert("Cadastrado com sucesso!")</script>';
                    echo '<script>location.href="' . BASE_MOVIES . '"</script>';
                    die();

                } else {
                    echo 'insira o ano com apenas 4 caractéres!';
                }
            } else {
                echo 'insira o código com apenas 7 caractéres!';
            }
        }
    }
}
