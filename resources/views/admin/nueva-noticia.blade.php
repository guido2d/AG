@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Nueva Noticia
                </div>

                <div class="card-body">

                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <h4 class="alert-heading">Ups!, se presentaron algunos errores.</h4>
                        <ul class="listnone">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form method="post" action="/admin/blog/guardar-noticia" id="frmNewNews" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Título</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Ingrese el titulo de la noticia">
                        </div>
                        
                        <div class="form-group">
                            <div class="form-group">
                                <label for="visible">Visible</label>
                                <select name="visible" class="form-control" id="visible">
                                  <option value="1">Visible</option>
                                  <option value="0">Oculto</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="description">Descripción corta</label>
                            <textarea name="short_description" id="" cols="30" rows="8" class="form-control"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <input type="hidden" name="description" id="description">
                            <div class="summernote"></div>
                        </div>
                        
                        <div class="form-group">
                            <label for="name">Imágen de la noticia</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        
                        <button type="button" class="btn btn-primary" id="btnSaveNews">Guardar Noticia</button>
                        <a href="/admin/blog" class="btn btn-danger">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 

@section('css')

<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
<script src="{{ asset('js/summernote-es-ES.js') }}"></script>

@endsection 

@section('js')

<script>
    $(document).ready(function() {
         
    });
    
    $('.summernote').summernote({
            height: 400,
            lang: 'es-ES',
            toolbar: [
                ['style', ['bold', 'italic', 'underline']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['picture', 'link', 'video']]
            ]
        });   

    $('#btnSaveNews').on('click', function(e) {
        var description = $('.summernote').eq(0).summernote('code');
        
        $('#description').val(description);
        
        $('#frmNewNews').submit();
        
    });

</script>

@endsection