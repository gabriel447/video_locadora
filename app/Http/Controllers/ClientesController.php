<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clientes;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
	public function index()
	{
		$data['clientes'] = Clientes::all();
		return view('clientes', $data);
	}

	public function cadastrarCliente(Request $req)
	{
		if ($req->has('nome')) {
			$nome = $req->input('nome');
			$telefone = $req->input('telefone');
			$verifica = preg_match('/^[1-9]{2}|[0-9]{5}-[0-9]{4}$/', $telefone);
		} else {
			echo 'telefone INVÁLIDO!';
			echo '<br>';
		}

		if ($verifica) {
			$cep = $req->input('cep');
			$verifica = preg_match('/[0-9]{5}-[0-9]{3}$/', $cep);
		} else {
			echo 'CEP INVÁLIDO!';
			echo '<br>';
		}

		if ($verifica) {
			$cpf = $req->input('cpf');
			$verifica = preg_match('/[0-9]{11}$/', $cpf);
		} else {
			echo 'CPF INVÁLIDO!';
			echo '<br>';
		}

		if ($verifica) {

			$query = DB::table('clientes')->where('cpf', $cpf)->value('cpf');

			if (!$query) {

				$clientes = new Clientes();

				$clientes->nome = $nome;
				$clientes->telefone = $telefone;
				$clientes->cep = $cep;
				$clientes->cpf = $cpf;

				$clientes->save();

				echo '<script>alert("Inserido com sucesso!")</script>';
				echo '<script>location.href="' . BASE_USERS . '"</script>';

				die();
			} else {
				echo '<script>alert("Esse CPF já está cadastrado!")</script>';
				echo '<script>location.href="' . BASE_USERS . '"</script>';
			}
		}
	}
}
