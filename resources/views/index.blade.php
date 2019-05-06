@extends('layouts.main')
@section('contenido')

<!-- start banner -->
<section class="carousel slide" id="banner" data-ride="carousel" data-pause="false">
    <div class="carousel-inner">

        <!--SLIDE 1-->
        <div class="carousel-item active" style="background-image:url(img/banner/slide1.png)">
            <div class="banner-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="hero-text full-image">
                                <h6 class="animated fadeInDown">AG Representations</h6>
                                <h1 class="animated fadeInUp">Travel Marketing</h1>
                                <p class="animated fadeInUp">En AG Representations estamos a la vanguardia, es por eso que contamos con las plataformas adecuadas de IT que nos ayudan a gestionar toda la información necesaria para un excelente servicio: Sitio Web • E-mail Marketing • MSM Masivo • Mensajes masivos por Whatsapp.</p>
                                <a href="#" class="btn btn-primary animated fadeInUp">Contactanos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--SLIDE 2-->
        <div class="carousel-item" style="background-image:url(img/banner/slide2.png)">
            <div class="banner-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="hero-text full-image">
                                <h6 class="animated fadeInLeft">AG Representations</h6>
                                <h1 class="animated fadeInLeft">Cobertura Global</h1>
                                <p class="animated fadeInLeft">Seleccionamos los mejores operadores en los principales destinos. Receptivos en español para el mercado de España.</p>
                                <a href="#" class="btn btn-primary animated fadeInLeft">Contactanos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--SLIDE 3-->
        <div class="carousel-item" style="background-image:url(img/banner/slide3.png)">
            <div class="banner-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="hero-text full-image">
                                <h6 class="animated fadeInLeft">AG Representations</h6>
                                <h1 class="animated fadeInRight">Experiencias Extraordinarias</h1>
                                <p class="animated fadeInRight">Experiencias únicas en destinos extraordinarios. Encuentra el destino que más te guste y conviértela en una experiencia única.</p>
                                <a href="#" class="btn btn-primary animated fadeInRight">Contactanos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <ol class="carousel-indicators">
            <li data-target="#banner" data-slide-to="0" class="active"></li>
            <li data-target="#banner" data-slide-to="1"></li>
            <li data-target="#banner" data-slide-to="2"></li>
        </ol>
    </div>
</section>
<!-- end banner -->

{{-- BOTONES --}}
<section class="section-btn-spacing">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft">
            <a href="{{ asset('/quienes-somos') }}">
                    <div class="img-cont quienes-somos lineas">
                        <h2><span>Quienes somos</span></h2>
                    </div>
                </a>
            </div>
            <div class="col-md-6 wow fadeInRight">
                <a href="{{ asset('/servicios') }}">
                    <div class="img-cont servicios lineas fadeIn">
                        <h2><span>Servicios</span></h2>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!--DESTINOS-->
<section class="section-spacing inverse-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2><span>Destinos Populares</span></h2>
                    <p>AG Travel Destinations representa asociados en todos los destinos de América…solo imagine donde quiere ir y ahí lo llevaremos.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="destination-item wow fadeIn">
                    <a href="#">
                        <img src="{{ asset('img/destination/perito-moreno.png') }}" alt="">
                        <div class="destination-info">
                            <h2>Argentina</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="destination-item wow fadeIn">
                            <a href="#">
                                <img src="{{ asset('img/destination/cristo.png') }}" alt="">
                                <div class="destination-info">
                                    <h2>Brasil</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="destination-item wow fadeIn">
                            <a href="#">
                                <img src="{{ asset('img/destination/tayrona.png') }}" alt="">
                                <div class="destination-info">
                                    <h2>Colombia</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="destination-item wow fadeIn">
                            <a href="#">
                                <img src="{{ asset('img/destination/dominicana.png') }}" alt="">
                                <div class="destination-info">
                                    <h2>República Dominicana</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="destination-item wow fadeIn">
                            <a href="#">
                                <img src="{{ asset('img/destination/cancun.png') }}" alt="">
                                <div class="destination-info">
                                    <h2>México</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-6">
                <div class="destination-item wow fadeIn">
                    <a href="#">
                        <img src="{{ asset('img/destination/machu-pichu.png') }}" alt="">
                        <div class="destination-info">
                            <h2>Perú</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="text-center mt-40">
                    <a href="#" class="btn btn-primary">Todos los destinos</a>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- end destination -->
 
<!--ALOJAMIENTOS-->
<section class="section-spacing">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2><span>Alojamientos</span></h2>
                    <p>Hospedajes Rurales, Lodges, Haciendas, Estancias, Resort, Hoteles Boutique o temáticos…AG Travel Representations los representa, excelencia en alojamiento exclusivos.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-6">
                <div class="hotel-item wow fadeIn">
                    <div class="media">
                        <div class="thumb">
                            <a href="#">
                                <img src="{{ asset('img/hotel/1.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="media-body">
                            <div class="hotel-info">
                                <h3><a href="#">Herta Berlin Hotel</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing Suscipit tas aperiam.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hotel-item wow fadeIn">
                    <div class="media">
                        <div class="thumb">
                            <a href="#">
                                <img src="{{ asset('img/hotel/2.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="media-body">
                            <div class="tour-info">
                                <h3><a href="#">Herta Berlin Hotel</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing Suscipit tas aperiam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-12 col-xl-6">
                <div class="hotel-item wow fadeIn">
                    <div class="thumb">
                        <a href="#">
                            <img src="{{ asset('img/hotel/3.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="hotel-info">
                        <h3><a href="#">Herta Berlin Hotel</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing Suscipit tas aperiam Sorem ipsum dolor consectur adipisicing. Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end featured hotels -->

<!--NESLETTER-->
<section class="section-spacing inverse-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Suscribite a nuestro Newsletter</h2>
            </div>
            <div class="col-md-8">
                <form action="#">
                    <div class="row">
                        <div class="col-md-8">
                            <input type="email" class="form-control" placeholder="Ingrese su Email" style="margin-top:10px;">
                            <small>Acepto las <a href="#" style="color: #089000;">políticas de seguridad</a>. <input type="checkbox" name="politicas" checked></small>
                        </div>

                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary mt10 btn-block">Suscribirme</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

{{-- SEPARADOR --}}
<section class="galeria-separador">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 p0m0">
                <div class="thumb">
                    <div class="dark-overlay"></div>
                    <img src="img/separador/1.jpg" alt="">
                </div>
            </div>
            <div class="col-md-2 p0m0">
                <div class="thumb">
                    <div class="dark-overlay"></div>
                    <img src="img/separador/colombia.png" alt="">
                </div>
            </div>
            <div class="col-md-2 p0m0">
                <div class="thumb">
                    <div class="dark-overlay"></div>
                    <img src="img/separador/conzumel.png" alt="">
                </div>
            </div>
            <div class="col-md-2 p0m0">
                <div class="thumb">
                    <div class="dark-overlay"></div>
                    <img src="img/separador/belize.png" alt="">
                </div>
            </div>
            <div class="col-md-2 p0m0">
                <div class="thumb">
                    <div class="dark-overlay"></div>
                    <img src="img/separador/iguazu.png" alt="">
                </div>
            </div>
            <div class="col-md-2 p0m0">
                <div class="thumb">
                    <div class="dark-overlay"></div>
                    <img src="img/separador/peru.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection