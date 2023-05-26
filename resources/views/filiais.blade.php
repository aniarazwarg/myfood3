@extends ('principal')
@section ('titulo','Filiais')
@section ('conteudo')
<h1>Filiais</h1>
<x-alert type='danger' message='Usuário e/ou senha inválidos!'/>
<ul>
    <li>SP</li>
    <li>RJ</li>
    <li>MG</li>
</ul>
@stop

<!-- essa é a pagina que será exibida, puxando o template pronto da principal.blade -->