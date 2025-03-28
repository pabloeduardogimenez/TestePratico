<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class ControleUsuarioPolicy
{
   public function acessoAPaginaUsuario(User $user) {
    if ( $user->permissao_do_usuario == "Administrador" ) {
        return true;
    }

    return false;
   }
   public function acessoProdutos(User $user) {
    if ($user->acesso_usuario == "produtos" || 
        $user->acesso_usuario == "total"  &&
        $user->permissao_do_usuario !== "Administrador" ) {
        return true;
    } 

    return false;
   }
   public function acessoMarcas(User $user) {
    if ($user->acesso_usuario == "marcas"  || 
    $user->acesso_usuario == "total"  &&
    $user->permissao_do_usuario !== "Administrador" ) {
        $marcas = true;
    } else  {
        return false;
    }
    
   
   }
   public function acessoCategoria(User $user) {
    if ($user->acesso_usuario == "categorias"  || 
        $user->acesso_usuario == "total"  &&
    $user->permissao_do_usuario !== "Administrador" ) {
        return true;
    } 

    return false;
   }


}