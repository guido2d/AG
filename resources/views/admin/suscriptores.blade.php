@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Suscriptores
                    <a href="/admin/suscriptores/descargar-listado" class="btn btn-secondary btn-sm float-right">Descargar listado</a>
                </div>

                <div class="card-body">
                    
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Email</th>
                                <th scope="col">Fecha de alta</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($suscriptores as $s)
                            <tr>
                                <td>{{ $s->email }}</td>
                                <td>{{ $s->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row"><div class="col-12 text-center">{{ $suscriptores->links() }}</div></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('/js/app.js') }}" defer></script>
@endsection