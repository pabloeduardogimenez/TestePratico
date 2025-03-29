@extends('dashboard')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Adicionar Usuarios</h1>
</div>

<form class="form" method="POST" action="{{ route('usuarios.create.post') }}">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
        @if ($errors->has('name'))
            <div class="invalid-feedback"> {{ $errors->first('name') }} </div>
        @endif
    </div>    
    <div class="mb-3">
        <label class="form-label">E-mail</label>
        <input type="text" class="form-control @error('password') is-invalid @enderror" name="email">
        @if ($errors->has('email'))
            <div class="invalid-feedback"> {{ $errors->first('email') }} </div>
        @endif
    </div>
    <div class="mb-3">
        <label class="form-label">Senha</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
        @if ($errors->has('password'))
            <div class="invalid-feedback"> {{ $errors->first('password') }} </div>
        @endif
    </div>
    <div class="mb-3">
        <label class="form-label">Permissao</label>
        <select name="permissao_do_usuario" class="form-select" aria-label="Clique para selecionar">
            <option value="Administrador">Administrador</option>
            <option value="Comum">Comum</option>
          </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Acessos dos Usuários</label>
        <select name="acesso_usuario" class="form-select" aria-label="Clique para selecionar">
            <option value="Produtos">Gestão de Produtos</option>
            <option value="Marcas">Gestão de Marcas</option>
            <option value="Categorias">Gestão de Categorias</option>
            <option value="Total">Acesso Total</option>
          </select>
    </div>    

    <button type="submit" class="btn btn-success"> Gravar </button>
</form>

@endsection
