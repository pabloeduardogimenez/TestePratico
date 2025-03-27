<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\FormRequestUsuarios;
use Illuminate\Support\Facades\Hash;

class usuariosController extends Controller
{
    public function __construct(User $user) {
        $this->user = $user;
    }

    public function index (Request $request) {
        $pesquisar = $request->pesquisar;
        $findUser = $this->user->getFiltrosPaginate(search: $pesquisar ?? "");

        return view('pages.usuarios.index', compact('findUser'));
    }
    
    public function delete($idUser) {
        $buscaRegistro = User::find($idUser);
        $buscaRegistro->delete();

        return back();
    }

    public function create(FormRequestUsuarios $request) {
        if ($request->method() == "POST") {
            $data = $request->all();         
                User::create(
                [
                    "name" => $data['name'],
                    "email" => $data['email'],
                    "permissao_do_usuario" => $data['permissao_do_usuario'],
                    "password" => Hash::make($data['password']),
                ]
                );

            return redirect('/usuarios');
        }

        return view('pages.usuarios.create');
    }
}
