@extends('layouts.fronted.contact')
@section('redes')
<div class="red">
    <div id="facebook">
        <a href="https://www.facebook.com/DITITuxtla/" target="none" class="fab fa-facebook-f "></a>
    </div>
    <div id="instagram">
        <a href="https://www.instagram.com/diti_tuxtla/" target="none" class="fab fa-instagram"></a>
    </div>
    <div id="twiter">
        <a href="https://twitter.com/DITI_Tuxtla/" target="none" class="fab fa-twitter-square"></a>
    </div>
    <div id="whatsaap">
        <a href="https://api.whatsapp.com/send?phone=529611398893/" target="none" class="fab fa-whatsapp"></a>
    </div>
    
   </div>
@endsection

@section('navbar_top')
<div class="header-top">
    <div class="container d-flex justify-content-between">
        <div class="d-inline-flex ml-auto">
            <div class="headcont">
                <i class="fas fa-2x fa-mobile-alt messenge"></i>
                +52 961-139-8893
            </div>
            <div class="headcont">
                <i class="fas fa-2x fa-envelope messenge"></i>
                publicidad@diti.com.mx
            </div>
        </div>
    </div>
</div>
@endsection

@section('navbar')
    <header>
    <a href="#" class="logo">
        <img  class="imgtamaño" src="{{ asset('img/diti.png')}}" alt="DITI ! Proyects">
        
    </a>
    <div class="menu-toggle" ></div>
        <nav>
            <ul>
                <li><a  href="{{ url('/')}}" >INICIO</a></li>
                <li><a  class="active" href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
                <li><a  href="{{ url('/productos')}}">CURSOS</a></li>
                <li><a  href="{{ url('/nosotros')}}">NOSOTROS</a></li>
                <li><a  href="https://moodle.org">AULA VIRTUAL</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
@endsection

@section('banner')
<div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-text">
                        <h4>Desarrollo e Innovaciones<span> Tecnológicas Inteligentes</span></h4>
						<br>
						<br>
                        {{-- <h1 class="tipeo1">COMUNÍCATE CON NOSOTROS</h1> --}}
                        <h1 class="tipeo2"><span class="type"></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 

@section('cards_service')
<div class="container_cards">
    <div class="row_cards">

        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fa fa-certificate" aria-hidden="true"></i>
                    <h4 class="title_services">Certificaciones</h4>
                    <p class="description_services">Cursos del conocer con fines de certificación</p><br>
                    <a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-xl2">Ver mas</a>  
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fa fa-code" aria-hidden="true"></i>
                    <h4 class="title_services">Cursos populares</h4>
                    <p class="description_services">Los mas solicitados</p><br>
                    <a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-x3">Ver mas</a>  
                </div>
            </div>
        </div>

  
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-thumbs-up fa-4x"></i>
                    <h4 class="title_services">Múltiples Formas de Pago</h4>
                    <p class="description_services">Diferentes tipos de pago</p>
                    <a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-xl">Ver mas</a>          
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-user-check fa-4x"></i>
                    <h4 class="title_services">Conocenos</h4>
                    <p class="description_services">Mas informacion</p>
                    <a href="{{ url('/nosotros')}}" class="btn_modal_wel mt-5">Ver mas</a>  
                </div>
            </div>
        </div>

    </div>

</div>

@endsection
@section('Content_messege')
<div class="conatiner">
    <div class="form">
        <div class="contact-info">
                <h3 class="contact_tittle">ESTAMOS UBICADOS EN</h3>
                <p class="contact_text">Un punto estratégico para una mejor atención a 
                    nuestros clientes para que puedan solicitar informacion o 
                    recoger sus productos.   
                </p>

            <div class="contactos_info">
                <div class="contact_information">
                    <i class="fas fa-2x fa-map-marker-alt"></i>
                    <p>Calle 5ta Oriente Sur #250, Barrio La Lomita, El Jobo, Tuxtla Gutiérrez, Chis. </p>
                </div>
                <div class="contact_information">
                <i class="fas fa-2x fa-phone-volume"></i>
                    <p>9611398893</p>
                </div>
                <div class="contact_information">
                    <i class="far fa-2x fa-envelope"></i>
                    <p>publicidad@diti.com.mx</p>
                </div>
            </div>
            <div class="social_media">
                <p>REDES SOCIALES</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/DITITuxtla/" target="none">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/diti_tuxtla/" target="none">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://twitter.com/DITI_Tuxtla/" target="none">
                        <i class="fab fa-twitter-square"></i>
                    </a>
                    
                </div>
            </div>
        </div>
        <div class="contact-form">
            <form action="" autocomplete="off">
                <h3 class="contact_tittle">COMUNÍCATE CON NOSOTROS</h3>
                <div class="input-container ">
                    <input type="text" name="name" class="contact_input" placeholder="NOMBRE">
                </div>
                <div class="input-container">
                    <input type="text" name="email" class="contact_input" placeholder="EMAIL">
                </div>
                <div class="input-container">
                    <input type="tel" name="celular" class="contact_input" placeholder="CELULAR">
                </div>
                <div class="input-container">
                    <textarea name="mensaje" class="contact_input" id="" placeholder="MENSAJE"></textarea>
                </div>
                <input type="submit" value="ENVIAR" class="contact_btn">
            </form>
        </div>
    </div>
</div>
@endsection

@section('footer')
<footer class="footer">
    <div class="l-footer">
        <img  class="footer_img" src="{{asset('img/di.jpeg')}}" alt="DITI | Proyectos">
        <h2 style="color: rgb(28, 96, 223)" class="footer_img">Desarrollo e Innovaciones Tecnológicas Inteligentes</h2>
    <p>Somos una organización emprendedora, que ofrece las herramientas tecnológicas para desempeñar trabajos con soluciones de vanguardia, ofreciendo a nuestros clientes venta de equipos e insumos, así como, servicio de mantenimiento.
    </p>
    
    </div>
        <ul class="r-footer">
            <li>
            <h2>Redes Sociales</h2>
                <ul class="box">
                    <li class="button_social">
                        <i class="fab mr-2 fa-facebook"></i>
                        <a href="https://www.facebook.com/DITITuxtla/" target="_blank">Facebook</a>
                    </li>

                    <li class="button_social">
                        <i class="fab mr-2 fa-twitter"></i>
                        <a href="https://twitter.com/DITI_Tuxtla/">Twitter</a>
                    </li>
                    
                    <li class="button_social">
                        <i class="fab mr-2 fa-instagram"></i>
                        <a href="https://www.instagram.com/diti_tuxtla/" target="_blank">Instagram</a>
                    </li>
                    
                </ul>
            </li>

            <li class="features">
            <h2>Contacto</h2>
            <ul class="box">
            <li>
                <a href="tel:+529611398893" target="none" class="fas fa-phone-alt"> 9611398893</a>
            </li>
                <a href="https://api.whatsapp.com/send?phone=529611398893/" target="none" class="fab fa-whatsapp"> Whatsapp</a>
            </ul>
            </li>

            <li class="features">
                <h2>Ubicacion</h2>
                <ul class="box">
                    <li><a type="button" href="https://g.page/DITITuxtla?share">Calle 5ta Oriente Sur #250, Barrio La Lomita, El Jobo, Tuxtla Gutiérrez, Chis.</a></li>
                </ul>
                </li>
            </ul>
        <div class="b-footer">
            <p>Todos los Derechos reservados by <a href="https://www.facebook.com/DITITuxtla/" target="_blank">©DITI2021</a></p>
          
        </div>
</footer>
@endsection
@section('title')
<div class="col-12">
		<div class="testimonial-title">
		{{-- 	<h5>CONOCE</h5> --}}
            <h3>NUESTROS CURSOS</h3>
            <hr class="style1">
	    </div>
</div>
@endsection
