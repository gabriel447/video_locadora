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
		if (isset($_POST['acao'])) {
			$nome = $req->input('nome');
			$telefone = $req->input('telefone');
			$cep = $req->input('cep');
			$cpf = $req->input('cpf');

			$check_cel = preg_match("/^[0-9]{2}\s[0-9]{5}-[0-9]{4}$/", $telefone);
			$check_cep = preg_match("/^[0-9]{5}-[0-9]{3}$/", $cep);
			$check_cpf = preg_match("/^[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}$/", $cpf);

			if ($check_cel) {
				if ($check_cep) {
					if ($check_cpf) {

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

					} else {
						echo 'cpf inválido';
						die();
					}
				} else {
					echo 'cep inválido';
					die();
				}
			} else {
				echo 'celular inválido';
				die();
			}
		}
	}
}
