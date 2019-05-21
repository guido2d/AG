@extends('layouts.main')
@section('contenido')

<section class="section-spacing-text">
    <div class="container">
        <div class="row wow fadeInLeft">
            <div class="col-12">
                <h2>{{ $noticia->title }}</h2>
                <ul class="post-meta list-inline">
                    <li class="list-inline-item"><i class="fa fa-calendar"></i> Publicado el
                        {{ date( "d M, Y", strtotime($noticia->created_at)) }}</li>
                </ul>
            </div>
        </div>
        <div class="row img-post-separator wow fadeInLeft">
            <div class="col-12">
                <img src="{{ asset('/img/blog/'.$noticia->image) }}" alt="" class="img-responsive">
            </div>
        </div>

        <div class="row post-content">
            <div class="col-12">
                <p>
                    {!! $noticia->description !!}
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <a href="{{ asset('/blog') }}" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>
</section>
<!-- end blog-->

<section class="relations-post wow bounceInDown">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Más noticias</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    @foreach ($relacionadas as $n)
                    <div class="col-3">
                        <div class="item">
                            <div class="news-block">
                                <div class="news-thumb">
                                    <a href="{{ asset('/noticia/'.$n->slug) }}">
                                        <img src="{{ asset('img/blog/'.$n->image) }} " alt="">
                                    </a>
                                </div>
                                <div class="news-bottom">
                                    <ul class="post-meta list-inline">
                                        <li class="list-inline-item"><i class="fa fa-calendar"></i> Publicado el
                                            {{ date( "d M, Y", strtotime($n->created_at)) }}</li>
                                    </ul>
                                    <h3><a href="{{ asset('/noticia/'.$n->slug) }}">{{ $n->title }}</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection