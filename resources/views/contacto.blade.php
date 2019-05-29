@extends('layouts.main')
@section('contenido')

<!--HEADER SECTION-->
<section class="inner-page-banner" style="background-image:url(img/banner/contacto-banner.jpg)">
    <div class="page-banner-caption">
        <div class="container">
            <div class="row wow fadeInLeft">
                <div class="col-md-12">
                    <h1>Contacto</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                        <li class="breadcrumb-item active">Contacto</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-spacing">
    <div class="container">
        <div class="row wow wow bounceInUp">
            <div class="col-md-4">
                <div class="contact-info text-center">
                    <i class="fa fa-phone-square"></i>
                    <h3>Teléfono/Whatsapp</h3>
                    <p><a href="tel:+34658956082">+34 658 956 082</a></p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="contact-info text-center wow fadeIn">
                    <i class="fa fa-envelope-open-o"></i>
                    <h3>Correo</h3>
                    <p><a href="mailto:info@agrepresentations.com">info@agrepresentations.com</a> <br> </p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="contact-info text-center wow fadeIn">
                    <i class="fa fa-map-marker"></i>
                    <h3>Dirección</h3>
                    <p>Av. Cantabria 27 - 2B, CP 28042, Madrid</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2><span>Envianos tus consultas</span></h2>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12 col-lg-8 offset-lg-2">
                <form id="contactForm" class="contact-form wow fadeIn" data-toggle="validator" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input placeholder="Nombre completo" id="fname" class="form-control" name="fname" type="text" required data-error="Please enter your first name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input placeholder="Correo electrónico" id="email" class="form-control" name="email" type="email" required data-error="Please enter your valid email address"> 
                        <div class="help-block with-errors"></div>
                    </div>
                    
                    <div class="form-group">
                        <textarea placeholder="Mensaje" id="message" cols="20" rows="8" class="form-control" required data-error="Please enter your comments"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="text-center">
                        <input value="Enviar mensaje" name="submit" class="btn btn-primary" type="submit">
                        <div id="msgSubmit" class="hidden"></div>
                    </div>
                </form>
            </div>
            
        </div>
        
    </div>
</section>
<!-- end contact -->

@endsection