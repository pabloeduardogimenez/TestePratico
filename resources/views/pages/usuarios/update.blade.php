@extends('dashboard')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Atualizar Usuarios</h1>
</div>

<form class="form" method="POST" action="{{ route('usuarios.update.put', $findUser->id) }}">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label class="form-label">Nome</label>
        <input value="{{ $findUser->nome }}" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome">
        @if ($errors->has('nome'))
            <div class="invalid-feedback"> {{ $errors->first('nome') }} </div>
        @endif
    </div>
    <div class="mb-3">
        <label class="form-label">Telefone</label>
        <input value="{{ $findUser->numero }}" id="telefoneMask" type="text" class="form-control" name="numero">
    </div>
    <div class="mb-3">
        <label class="form-label">E-mail</label>
        <input value="{{ $findUser->email }}" type="text" class="form-control" name="email">
    </div>

    <button type="submit" class="btn btn-success"> Gravar </button>
</form>

@endsection
