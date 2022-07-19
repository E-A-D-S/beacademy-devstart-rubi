@extends('template.layout')
@section('title', 'Categorias')
@section ('content')
<main class="container w-50 mt-5">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: #efefef;">
        <div class="modal-body text-dark">
        
    <h1> Categorias</H1>
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                    </form>
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary">Nova Categoria</a>
    </div>
    </div>
  </div>
@endsection