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

    public function CadastrarLocacao(Request $req)
    {
        if (isset($_POST['locar'])) {

            $cod = $req->input('cod');
            $cpf = $req->input('cpf');
            date_default_timezone_set('America/Sao_Paulo');
            $data = date('Y-m-d');

            $check_cod = preg_match('/^[1-9]{7}$/', $cod);
            $check_cpf = preg_match("/^[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}$/", $cpf);

            if ($check_cod) {
                if ($check_cpf) {

                    $check = DB::table('filmes')->where('cod', $cod)->value('cod');
                    $info  = DB::table('clientes')->where('cpf', $cpf)->value('cpf');
                    $query = DB::table('controle')->where('cod_filme', $cod)->value('cod_filme');
                    if ($check) {
                        if ($info) {
                            if (!$query) {

                                $nome_cliente = DB::table('clientes')->where('cpf', $cpf)->value('nome');
                                $nome_filme = DB::table('filmes')->where('cod', $cod)->value('nome');

                                DB::update('update filmes set disponivel = 1 where cod = ?', [$cod]);
                                DB::insert('insert into controle (nome_cliente, nome_filme, cod_filme, cpf_cliente, data_locado) values (?, ?, ?, ?, ?)', [$nome_cliente, $nome_filme, $cod, $cpf, $data]);

                                echo '<script>alert("Cadastrado com Sucesso!")</script>';
                                echo '<script>location.href="' . BASE_LOCAR . '"</script>';
                                die();
                            } else {
                                echo '<script>alert("Esse Filme já foi locado!")</script>';
                                echo '<script>location.href="' . BASE_LOCAR . '"</script>';
                                die();
                            }
                        } else {
                            echo '<script>alert("Esse CPF não está cadastrado!")</script>';
                            echo '<script>location.href="' . BASE_LOCAR . '"</script>';
                            die();
                        }
                    } else {
                        echo '<script>alert("Esse Filme não foi cadastrado!")</script>';
                        echo '<script>location.href="' . BASE_LOCAR . '"</script>';
                        die();
                    }
                } else {
                    echo '<script>alert("CPF inválido!")</script>';
                    echo '<script>location.href="' . BASE_LOCAR . '"</script>';
                    die();
                }
            } else {
                echo '<script>alert("O Código precisa ter apenas 7 dígitos!")</script>';
                echo '<script>location.href="' . BASE_LOCAR . '"</script>';
                die();
            }
        }
    }
}
