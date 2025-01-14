@extends('layouts.admin')
@section('css', 'admin/InsertAdm')
@section('js', 'admin/InsertAdm')
@section('title')@parent Inserir Administrador @stop


@section('content')

    {{-- Exibição de erros --}}
    @if ($errors->any())
        <div class="container-error">
            <i class="fa-sharp fa-solid fa-circle-exclamation" style="color: #FFFF;"></i>
            @foreach ($errors->all() as $error)
                <p id="txt-error">
                    {{ $error }}
                </p>
            @endforeach
        </div>
    @endif

    <main class="content-adm">

        <form action="{{ route('post-userAdm') }}" method="POST">
            @csrf
            <h2 class="title">Inclusão de usuário administrador</h2>

            <label class="label-field">Nome</label>
            <input type="text" name="name" data-js="text" required class="input-field" placeholder="Nome">

            <label class="label-field">Email</label>
            <input type="email" name="email" data-js="email" required class="input-field" placeholder="Email">

            <label class="label-field">Senha</label>
            <span class="password-container">
                <input type="password" required data-js="text" name="password" id="inputSenha" placeholder="Digite a Senha">
                <i id="openEye" onclick="functionEye()" class="fa-solid fa-eye"></i>
                <i id="closeEye" onclick="functionEye()" class="fa-solid fa-eye-slash"></i>
            </span>

            <label class="label-field">Confirme a senha</label>
            <input type="password" required name="senhaConfirm" data-js="text" class="input-field" placeholder="Senha">

            <label class="label-field">Poder</label>
            <select class="select-field" name="poder">
                <option value="9">9 - Sysadmin</option>
                <option value="8">8 - Gerente</option>
                <option value="7">7 - SAC</option>
                <option value="6">6 - Repositor</option>
            </select>

            <label class="label-field">Status</label>
            <select class="select-field" name="status">
                <option value="1">1 - Ativo</option>
                <option value="0">0 - Inativo</option>
            </select>

            <div class="box-buttons">
                <button type="submit" class="btn-submit">Cadastrar</button>
                <button type="button" onclick="window.location.href=`{{ route('page-listAdm') }}`"
                    class="btn-cancel">Cancelar</button>
            </div>
        </form>
    </main>

@endsection
