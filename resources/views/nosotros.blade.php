@extends('layouts.fronted.nosotros')
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
                <li><a  href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
                <li><a  href="{{ url('/productos')}}">CURSOS</a></li>
                <li><a class="active" href="{{ url('/nosotros')}}">NOSOTROS</a></li>
                <li><a href="https://moodle.org">AULA VIRTUAL</a></li>
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
                        <h1 class="tipeo1">COMUNÍCATE CON NOSOTROS</h1>
                        <h1 class="tipeo2"><span class="type"></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 

@section('foda')
<div class="nosotros_body">
<div class="nosotros_container">
    <div class="nosotros_card">
        <div class="nosotros_imbBx"  data-text="¿Quienes Somos?">
            <i class="fas fa-5x fa-question"></i>
        </div>
        <div class="nosotros_content">
            <div>
                <h3>¿Quienes somos?</h3>
                <p align = "justify">Somos una organización emprendedora, que ofrece las herramientas tecnológicas para desempeñar trabajos con soluciones de vanguardia, 
                    ofreciendo a nuestros clientes venta de equipos e insumos, así como, servicio de mantenimiento.   
                    <a href="https://www.facebook.com/DITITuxtla/" target="_blank">Ver mas</a>
                </p>
                
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-xl2" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div id="contenedor" class="row_p">
                <div id="naranja" class="">
                    <img class="popou_img"src="{{ asset('img/entrega.jpg')}}" alt="">
                </div>       
                <div id="verde" class="content_pagos"> 
                    <h2 class=" frm_pagos text-center">Aqui va otra vista</h2>  
                    <hr class="style3">   
                    <h5>Falta ua vista</h5>                   
                </div>
            </div>
        </div>
    </div>

    <div class="nosotros_card">
        <div class="nosotros_imbBx" data-text="¿Nuestra Misión?">
            <i class="fas fa-5x fa-user-friends"></i>
        </div>
        <div class="nosotros_content">
            <div>
                <h3>Nuestra Misión</h3>
                <p align = "justify">Somos una organización emprendedora, que ofrece las herramientas tecnológicas para desempeñar trabajos con soluciones de vanguardia, ofreciendo a nuestros clientes venta de equipos e insumos, así como, servicio de mantenimiento. 
                    <a href="https://www.facebook.com/DITITuxtla/" target="_blank">Ver mas</a>
                </p>
            </div>
        </div>
    </div>

    <div class="nosotros_card">
        <div class="nosotros_imbBx" data-text="¿Nuestra Visión?">
            <i class="fas fa-5x fa-chart-bar"></i>
        </div>
        <div class="nosotros_content">
            <div>
                <h3>Nuestra Visión</h3>
                <p align = "justify">Establecemos alianzas estratégicas con diferentes instituciones educativas y privadas de la región con el ánimo de compartir nuestros conocimientos y servicios que ofrecemos, mediante proyectos de interés común y el intercambio académico de personal y estudiantes.
                    <a href="https://www.facebook.com/DITITuxtla/" target="_blank">Ver mas</a>
                </p>
            </div>
        </div>
    </div>

    <div class="nosotros_card">
        <div class="nosotros_imbBx" data-text="¿Porque escogernos?">
            <i class="fas fa-5x fa-money-bill-wave"></i>
        </div>
        <div class="nosotros_content">
            <div>
                <h3>Nuestros Valores</h3>
                <p align = "justify">Nuestros valores sobre los que se sostiene esta estrategia de crecimiento y diferenciación en el servicio es la innovación y mejora continua: Nos damos cuenta de la importancia de mirar hacia el futuro, por tanto ofrecemos lo último del mercado para dar un apoyo y servicio óptimo a nuestros clientes. 
                    <a href="https://www.facebook.com/DITITuxtla/" target="_blank">Ver mas</a>
                </p>
            </div>
        </div>
    </div>
    <div class="nosotros_card">
        <div class="nosotros_imbBx" data-text="Organigrama">
            <i class="fas fa-5x fa-sitemap"></i>
        </div>
        <div class="nosotros_content">
            <div>
                <h3>Organigrama</h3>
                <p align = "justify">Nuestros valores sobre los que se sostiene esta estrategia de crecimiento y diferenciación en el servicio es la innovación y mejora continua: Nos damos cuenta de la importancia de mirar hacia el futuro, por tanto ofrecemos lo último del mercado para dar un apoyo y servicio óptimo a nuestros clientes. 
                    <a href="https://www.facebook.com/DITITuxtla/" target="_blank">Ver mas</a>
                </p>
            </div>
        </div>
    </div>
    <div class="nosotros_card">
        <div class="nosotros_imbBx" data-text="¿Que ofrecemos??">
            <i class="fas fa-5x fa-hand-holding"></i>
        </div>
        <div class="nosotros_content">
            <div>
                <h3>¿Que ofrecemos?</h3>
                <p align = "justify">Nuestros valores sobre los que se sostiene esta estrategia de crecimiento y diferenciación en el servicio es la innovación y mejora continua: Nos damos cuenta de la importancia de mirar hacia el futuro, por tanto ofrecemos lo último del mercado para dar un apoyo y servicio óptimo a nuestros clientes. 
                    <a href="https://www.facebook.com/DITITuxtla/" target="_blank">Ver mas</a>
                </p>
            </div>
        </div>
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

{{-- @section('title')
<div class="col-12">
		<div class="testimonial-title">
			<h5>NOSTROS </h5>
            
            <hr class="style1">
	    </div>
</div>
@endsection --}}

@section('title2')
<div class="col-12">
		<div class="testimonial-title">
			{{-- <h5>CONOCENOS</h5> --}}
            <h3>NOSOTROS</h3>
            <hr class="style1">
	    </div>
</div>
@endsection