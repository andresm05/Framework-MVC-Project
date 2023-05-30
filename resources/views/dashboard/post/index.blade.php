@extends('layouts.app')

@section('content')
<a href="{{ route('posts.create') }}" class="btn btn-success my-3">Crear Publicación</a>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Título</th>
            <th>Categoria</th>
            <th>Posted</th>
            <th colspan="2">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $p)
        <tr>
            <td>{{ $p->title }}</td>
            <td>{{ $p->category_id->name }}</td>
            <td>{{ $p->posted }}</td>
            <td>
                <a href="{{ route('post.edit', $p) }}" class="btn btn-primary">Editar</a>
                <a href="{{ route('post.show', $p) }}" class="btn btn-primary">Ver</a>
                <form action="{{ route('posts.destroy', $p) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $posts->links() }}
@endsection
