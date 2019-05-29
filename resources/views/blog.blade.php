@extends('layouts.main')
@section('contenido')

<section class="inner-page-banner" style="background-image:url(img/banner/blog-banners.jpg)">
    <div class="page-banner-caption">
        <div class="container">
            <div class="row wow fadeInLeft">
                <div class="col-md-12">
                    <h1>Blog</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<section class="section-spacing">
    <div class="container">
        <div class="row">

                @foreach ($novedades as $n)
                <div class="col-4">
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
                            <p>{{ $n->short_description }}</p>
                            <a href="{{ asset('/noticia/'.$n->slug) }}" class="btn btn-link">Seguir leyenda <i
                                    class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach

                {{ $novedades->links() }}

        </div>
    </div>
</section>
<!-- end blog-->

@endsection
