@extends('layouts.master')

@section('title', 'Cadastro de livro')

@section('page-header-content', 'Cadastro de livro')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Ações</h3>
        </div>
        <div class="panel-body">
          <a href="/livros">
            <span class="glyphicon glyphicon-th-list"></span> Livros
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <form action="/livros" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="titulo">Título</label>
          <input type="text" name="titulo" id="titulo" class="form-control" />
        </div>
        <div class="form-group">
          <label for="preco">Preço</label>
          <input type="text" name="preco" id="preco" class="form-control" />
        </div>
        <div class="form-group">
          <label for="editora_id">Editora</label>
          <select name="editora_id" id="editora_id" class="form-control">
            <option></option>
            @foreach($editoras as $editora)

              <option value="{{ $editora->id }}">{{ $editora->nome }}</option>
            @endforeach
          </select>
        </div>
        <button class="btn btn-primary" type="submit">Salvar</button>
      </form>
    </div>
  </div>

@endsection
