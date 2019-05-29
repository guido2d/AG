@extends('layouts.main')
@section('contenido')

<!--HEADER SECTION-->
<section class="inner-page-banner" style="background-image:url(img/banner/servicios-banner.jpg)">
    <div class="page-banner-caption">
        <div class="container">
            <div class="row wow fadeInLeft">
                <div class="col-md-12">
                    <h1>Servicios</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                        <li class="breadcrumb-item active">Servicios</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-spacing">
    <div class="container">
        <div class="row wow bounceInUp">
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="service-item text-center">
                    <div class="servicios">
                        <img src="img/icons/handshake.svg" alt="" width="80">
                    </div>
                    <h3>Representación</h3>
                    <p>Representación de empresas turísticas en el mercado español, ofreciendo soluciones rentables, especificas e integrales.</p>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="service-item text-center wow fadeIn">
                    <div class="servicios">
                        <img src="img/icons/mkt.svg" alt="" width="80">
                    </div>
                    <h3>Marketing</h3>
                    <p>Online Marketing en Redes Sociales, newsletters, Sales Calls, Workshops y Representación en FITUR, IBTM y LON para clientes potenciales.</p>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="service-item text-center wow fadeIn">
                    <div class="servicios">
                        <img src="img/icons/relaciones_publicas.svg" alt="">
                    </div>
                    <h3>Relaciones Públicas</h3>
                    <p>Creativas e innovadoras campañas de relaciones públicas en turismo. Amplia cobertura: prensa, online y de difusión.</p>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="service-item text-center wow fadeIn">
                    <div class="servicios">
                        <img src="img/icons/seminario.svg" alt="">
                    </div>
                    <h3>Formación</h3>
                    <p>Organización de seminarios online y presenciales para presenciar la compañía y destino de una forma directa a las Agencias Españolas.</p>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="service-item text-center wow fadeIn">
                    <div class="servicios">
                        <img src="img/icons/calendario.svg" alt="">
                    </div>
                    <h3>Eventos</h3>
                    <p>Organización de eventos diseñados a medida para potenciar ventas y contactos con Agencias Españolas.</p>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="service-item text-center wow fadeIn">
                    <div class="servicios">
                        <img src="img/icons/marketing.svg" alt="">
                    </div>
                    <h3>Social Media</h3>
                    <p>Las Redes Sociales son el presente y futuro de las empresas. La comunicación dinámica y fresca con los seguidores en diferentes Redes Sociales incrementará una relación más estrecha con clientes potenciales.</p>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection