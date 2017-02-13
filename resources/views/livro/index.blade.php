@extends('layouts.master')

@section('title', 'Livros')

@section('page-header-content', 'Livros')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Ações</h3>
        </div>
        <div class="panel-body"><a href="/livros/cria"><span class="glyphicon glyphicon-plus"></span> Livros</a></div>
      </div>
    </div>
    <div class="col-md-6">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Preço</th>
            <th>Editora</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($livros as $livro)
            <tr>
              <td>{{ $livro->id }}</td>
              <td>{{ $livro->titulo }}</td>
              <td>{{ $livro->preco }}</td>
              <td>{{ $livro->editora->nome }}</td>
              <td>
                <a href="/livros/{{ $livro->id }}/edita">
                  <span class="glyphicon glyphicon-edit"></span>
                </a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
