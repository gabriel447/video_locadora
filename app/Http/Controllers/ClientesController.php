<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clientes;

class ClientesController extends Controller
{
    public function index()
    {
        $data['clientes'] = Clientes::all();
        return view('clientes', $data);
    }

    public function cadastrarCliente(Request $req)
    {
        if ($req->has('nome')){
			$nome = $req->input('nome');
			$telefone = $req->input('telefone');
			$cep = $req->input('cep');
			$cpf = $req->input('cpf');

			$clientes = new Clientes();

			$clientes->nome = $nome;
			$clientes->telefone = $telefone;
			$clientes->cep = $cep;
			$clientes->cpf = $cpf;

			$clientes->save();

			echo '<script>alert("Inserido com sucesso!")</script>';
			echo '<script>location.href="'.BASE_USERS.'"</script>';

			die();
        }
	}

	public function apagarCliente($id)
	{
		Clientes::find($id)->delete();
		echo '<script>alert("Apagado com sucesso!")</script>';
		echo '<script>location.href="'.BASE_USERS.'"</script>';
	}
}

?>