@extends('layouts.master')

@section('title', 'Edição do livro')

@section('page-header-content', 'Edição do livro')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Ações</h3>
        </div>
        <div class="panel-body">
          <a href="/livros">
            <span class="glyphicon glyphicon-th-list"> Livros</span>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <form action="/livros/{{ $livro->id }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('patch') }}
        <div class="form-group">
          <label for="titulo">Título</label>
          <input value="{{ $livro->titulo }}" type="text" class="form-control" name="titulo" id="titulo">
        </div>
        <div class="form-group">
          <label for="preco">Preço</label>
          <input value="{{ $livro->preco }}" type="text" class="form-control" name="preco" id="preco">
        </div>
        <div class="form-group">
          <label for="editora_id">Editora</label>
          <select name="editora_id" id="editora_id" class="form-control">
          @foreach($editoras as $editora)
              <option value="{{ $editora->id }}" {{ $livro->editora->is($editora) ? 'selected="selected"' : '' }} >{{ $editora->nome }}</option>
          @endforeach
          </select>
        </div>
        <button class="btn btn-primary" type="submit">Salvar</button>
      </form>
    </div>
  </div>

@endsection
