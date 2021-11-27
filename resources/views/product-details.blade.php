@extends('layouts.fronted.product-details')
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

@section('content')
<div class="container pt-2">
    <div class="text-right">
        <a href="javascript:history.back()" class="btn btn-outline-danger">
            <i class="fas fa-long-arrow-alt-left"></i> Atras
        </a>
    </div>
</div>
<main class="container_product">
    <div class="left-column">
        <img data-image="red" class="active" src="{{asset('/img/productos/'.$producto->image)}}">
    </div>
    <!-- Right Column -->
    <div class="right-column">
    <!-- Product Description -->
    <div class="product-description">
        <span>{{$producto->visible == 1 ? "Disponible":"No Disponible"}}</span>
        <h1>{{$producto->name}}</h1>
        <p>{{$producto->extract}}</p>
    </div>

    <!-- Product Configuration -->
    <div class="product-configuration">
        <!-- Cable Configuration -->
        <div class="cable-config">
            <span>Categoría: </span><br>
                <div class="cable-choose">
                    <button>
                        <a href="{{ route('searchCategory' , $producto->categoria->slug)}}">
                            {{$producto->categoria->name}}
                        </a>
                    </button>
                </div>
        </div>
    </div>
    <h3>MXN {{$producto->price}}</h3>
    <!-- Product Pricing -->
    <h3>Mas Información</h3>
    <div class="product-price">
            <a target="none" href="https://wa.me/529611398893?text=Hola+interesad%40+en+el+Producto%3A+{{$producto->extract}}" class="btn btn-success  btn-lg mt-2">
                <i class="fab fa-whatsapp mr-2"></i>
            </a>
    </div>
    <a href="publicidad@diti.com.mx" class="btn btn-info  btn-lg mt-2">
        <i class="fas fa-envelope-open-text mr-2"></i></a>
    </div>
</main><br><br>
<div class="container">
<div class="media">
    <div class="media-body">
      <h5 class="mt-0">Descripción:</h5>
      <p>{{$producto->descriptions}}</p>
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