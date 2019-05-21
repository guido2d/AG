@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Blog
                    <a href="/admin/blog/nueva-noticia" class="btn btn-secondary btn-sm float-right">Nueva Noticia</a>
                </div>

                <div class="card-body">
                    
                    @if (session('correcto'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('correcto') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Imagen</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Visible</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($novedades as $n)
                            <tr>
                                <th><img src="/img/blog/{{ $n->image }}" alt="" width="50"></th>
                                <td>{{ $n->title }}</td>
                                <td>{{ ($n->visible == 1) ? 'Visible' : 'Oculto' }}</td>
                                <td>
                                    <a href="/admin/blog/editar-noticia/{{ $n->id }}" class="btn btn-primary">Editar</a>
                                    <a href="/admin/blog/eliminar-noticia/{{ $n->id }}" class="btn btn-danger">Eliminar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row"><div class="col-12 text-center">{{ $novedades->links() }}</div></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('/js/app.js') }}" defer></script>
@endsection
