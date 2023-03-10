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

            $query = DB::table('filmes')->where('cod', $cod)->value('cod');

            if (!$query) {
                if ($check_cod) {
                    if ($check_ano) {

                        $disponivel = 0;

                        DB::insert('insert into filmes (nome, genero, lancamento, disponivel, cod) values (?, ?, ?, ?, ?)', [$nome, $genero, $ano, $disponivel, $cod]);

                        echo '<script>alert("Cadastrado com Sucesso!")</script>';
                        echo '<script>location.href="' . BASE_MOVIES . '"</script>';
                        die();
                    } else {
                        echo '<script>alert("insira o ano com apenas 4 caractéres!")</script>';
                        echo '<script>location.href="' . BASE_MOVIES . '"</script>';
                        die();
                    }
                } else {
                    echo '<script>alert("Insira um código com apenas 7 caractéres!")</script>';
                    echo '<script>location.href="' . BASE_MOVIES . '"</script>';
                    die();
                }
            } else {
                echo '<script>alert("Já existe um Filme cadastrado com esse código!")</script>';
                echo '<script>location.href="' . BASE_MOVIES . '"</script>';
                die();
            }
        }
    }
}
