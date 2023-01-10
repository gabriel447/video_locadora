<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Devolver;

use Illuminate\Support\Facades\DB;

class DevolverController extends Controller
{
    public function index()
    {
        $table['historicos'] = Devolver::all();
        return view('devolver', $table);
    }

    public function cadastrarEntrega(Request $req)
    {
        if ($req->has('devolver')) {
            $cpf = $req->input('cpf');
            $cod = $req->input('cod');

            $data_locado  = DB::table('controle')->where('cod_filme', $cod)->value('data_locado');
            date_default_timezone_set('America/Sao_Paulo');
            // $data_devolucao = date('Y-m-d');
            $data_devolucao = date('2023-01-17');

            $data_inicio = date_create($data_locado);
            $data_fim = date_create($data_devolucao);

            // Resgata diferença entre as datas
            $interval = date_diff($data_inicio, $data_fim);

            $valor = 10.0;
            $multa = 3.0;
            $dias = $interval->days;

            if ($dias > 4) {

                $dias = $dias - 4;
                $res = $dias * $multa;

                $valor_total = $res + $valor;

                DB::update('update filmes set disponivel = 0 where cod = ?', [$cod]);
                DB::insert('insert into historicos (cpf_cliente, cod_filme, data_devolucao, valor, multa, valor_total) values (?, ?, ?, ?, ?, ?)', [$cpf, $cod, $data_fim, $valor, $multa, $valor_total]);
                DB::delete('delete from controle where cpf_cliente = ? and cod_filme = ?', [$cpf, $cod]);

                echo '<script>alert("Devolução com multa!")</script>';
                echo '<script>location.href="' . BASE_DEVOL . '"</script>';
                die();
            } else {
                $multa = 0;
                $valor_total = $valor + $multa;

                DB::update('update filmes set disponivel = 0 where cod = ?', [$cod]);
                DB::insert('insert into historicos (cpf_cliente, cod_filme, data_devolucao, valor, multa, valor_total) values (?, ?, ?, ?, ?, ?)', [$cpf, $cod, $data_fim, $valor, $multa, $valor_total]);
                DB::delete('delete from controle where cpf_cliente = ? and cod_filme = ?', [$cpf, $cod]);

                echo '<script>alert("Devolução Realizada com Sucesso!")</script>';
                echo '<script>location.href="' . BASE_DEVOL . '"</script>';
            }
        }
    }
}
