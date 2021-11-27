@extends('layouts.fronted.productos')
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
                <li><a  class="active" href="{{ url('/productos')}}">CURSOS</a></li>
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

@section('products')
<div class="container pt-2">
    <div class="text-right">
        <a href="{{ url('/productos')}}" class="btn btn-outline-danger">
            <i class="fas fa-long-arrow-alt-left"></i> Atras
        </a>
    </div>
</div>
<div class="container mt-5 mb-5">
    <div class="row">
        @foreach($productos as $producto)
        <div class="col-md-4 col-sm-6">
            <div class="product-grid8">
                <div class="product-image8">
                    <a href="#">
                        <img  class="pic-1" src="{{asset('/img/productos/'.$producto->image)}}" alt="{{$producto->image}}">
                        <!--<img class="pic-2" src="https://via.placeholder.com/280x300/FFF5EE/000000">-->
                    </a>
                    <ul class="social">
                        <li><a href="" class="fa fa-search"></a></li>
                    </ul>
                    <span class="product-discount-label">{{$producto->visible == 1 ? "Disponible":"No Disponible"}}</span>
                </div>
                <div class="product-content">
                    <div class="price">{{$producto->name}}</div>
                    <div class="price">{{$producto->extract}}</div>
                    <!--<<span class="product-shipping">Free Shipping</span>-->
                    <h3 class="title"><a href="{{ route('searchCategory' ,$producto->categoria->name)}}">{{$producto->categoria->name}}</a></h3>
                    <a class="all-deals" href="{{route('product-details', $producto->slug)}}">Detalles<i class="fa fa-angle-right icon"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{$productos->links()}}
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