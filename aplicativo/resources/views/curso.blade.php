@extends('layout')

@section('titulo', 'Cursos')


@section('cabecalho')
  <h2>Cursos Cadastrados:</h2>
@stop


@section('listagem')
<table class='table'>
<tr>
  <th>Id</th>
  <th>Nome</th>
  <th>Data de início</th>
  <th>Data de término</th>
  <th>Escola_Id</th>
  <th>Ações</th>
</tr>

  @foreach($curso as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->nome}}</td>
    <td>{{$item->data_inicio}}</td>
    <td>{{$item->data_fim}}</td>
    <td>{{$item->escola_id}}</td>
    <td>
      <a href="{{ action('CursoController@editar', $item->id) }}">Editar</a>
      <a href="{{ action('CursoController@deletar', $item->id) }}">Excluir</a>
    </td>
</tr>
  @endforeach

</table>
@stop