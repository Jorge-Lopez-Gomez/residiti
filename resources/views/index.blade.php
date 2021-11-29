@extends('layouts.fronted.index')
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
        <h2 style="color: white" class="imgtamaño"></h2>
        
    </a>
    <div class="menu-toggle" ></div>
        <nav>
            <ul>
                <li><a  class="active" href="{{ url('/')}}" >INICIO</a></li>
                <li><a  href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
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

@section('navbar')
    <header>
    <a href="#" class="logo">
        <h2 style="color: white" class="imgtamaño"></h2>
        <img  class="imgtamaño" src="{{ asset('img/fondito.jpg')}}" alt="DITI">
    </a>

    <div class="menu-toggle" ></div>
        <nav>
            <ul>
                <li><a href="" class="active">INICIO</a></li>
                <li><a href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
                <li><a href="{{ url('/productos')}}">CURSOS</a></li>
                <li><a href="{{ url('/nosotros')}}">NOSOTROS</a></li>
                <li><a href="https://moodle.org/" target="_blank">AULA VIRTUAL</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
@endsection

{{-- @section('banner')
<div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-text">
                        <h4><span></span></h4>
						<br>
						<br>
                        <h1 class="tipeo1">DITI</h1>
                        <h1 class="tipeo2"><span class="type"></span></h1>
                        <div class="botonesinfo">
                        <a href="" class="btn hero-btn">MAS INFORMACIÓN</a>
                        <a href="{{ url('/productos')}}" class="btn hero-btn2 btn1">VER PRODUCTOS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection  --}}

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

<!--CATEGORIAS-->
@section('cards')
<div class="container_cards">    
    <div class="row_cards text-center">
        <div class="col">
            <div class="single-content">
                <img src="{{ asset('img/categoria/certificate.png')}}" alt="Categorias Higienika Oficce diti">
                <div class="text-content">
                    <h3>Cursos del CONOCER con fines de certificación</h3>
                    <hr class="style2">
                    <h5>EC0217, EC0305, EC0076.</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="single-content">
                <img src="{{ asset('img/categoria/desarollo.png')}}" alt="Categorias Higienika Oficce diti">
                <div class="text-content">
                    <h3>Desarrollo</h3>
                    <hr class="style2">
                    <h5>Ven con nosotros, diseñamos tu aplicación.</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="single-content">
                <img src="{{ asset('img/categoria/diseño.png')}}" alt="Categorias Higienika Oficce diti">
                <div class="text-content">
                    <h3>Diseño</h3>
                    <hr class="style2">
                    <h5>Haz tu sueño realidad, le damos vida a tus ideas.</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('title5')
<div class="col-12 pt-2" style="background: #FF8525">
	{{-- 	<div class="proveedor-title">
			<h5 style="color: black">CONOCE A</h5>
            <h3 style="color: white">NUESTROS PROVEEDORES</h3>
            <hr class="style5">
	    </div> --}}
</div>
@endsection
@section('Proveedores')
<div class="container_prove">
    <div class="carousel_prove">
        <div class="buttons_prove">
            <span class="prev"> &#8592; </span>
            <span class="next"> &#8594; </span>
        </div>
        @foreach($proveedores as $proveedore)
        <div class="item">
            <div class="img">
                <img src="{{asset('/img/proveedore/'.$proveedore->image)}}" alt="">
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
@section('title2')
<div class="col-12">
		<div class="testimonial-title">
            <h3>NUESTROS COLABORADORES</h3>
            <hr class="style1">
	    </div>
</div>
@endsection
@section('colaboradores')
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        @foreach($clientes as $cliente)
        <div class="swiper-slide">
            <img src="{{asset('/img/clientes/'.$cliente->image)}}" />
        </div>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
</div>
@endsection 
@section('products')
<div class="producst_body autoplay ">
    @foreach($productos as $producto)
    <div class="wrapper">
        <div class="container">
            <img class="top"src="{{asset('/img/productos/'.$producto->image)}}" alt="{{$producto->image}}">
          <div class="bottom">
            <div class="left">
              <div class="details">
                <h2 class="txt_products">{{$producto->name}}</h2>
                <p>MXN {{$producto->price}}</p>
              </div>
              <div class="buy text-center">
                <a href="{{route('product-details', $producto->slug)}}">
                    <i class="fas fa-eye"></i>
                </a>  
            </div>
            </div>
          </div>
        </div>
        <div class="inside">
          <div class="icon"><i class="fas fa-plus"></i></div>
          <div class="contents">
            <h1>{{$producto->extract}}</h1>
            <h5 style="color: white">{{$producto->descriptions}}</h5>
          </div>
        </div>
      </div>
    @endforeach 
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
<!--MODALS-->
@section('modals')
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" style="max-width: 1440px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-center modal-title" id="exampleModalCenterTitle">Metodos de pagos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="principalPagos">
                    <div id="contenedor" class="row_p">
                        <div id="naranja" class="">
                            <img class="popou_img"src="{{ asset('img/pagos.jpg')}}" alt="">
                        </div>       
                        <div id="verde" class="content_pagos"> 
                            <h2 class=" frm_pagos text-center">FORMAS DE PAGO</h2>
                <hr class="style3"> 

                <div id="price">
                    <!--price tab-->
                    <div class="plan">
                      <div class="plan-inner">
                        <div class="entry-title">
                          <h3>Banamex</h3>
                          <div class="price"><i class="mt-3 fa-2x fas fa-credit-card"></i>
                          </div>
                        </div>
                        <div class="entry-content">
                          <ul>
                            <li>Número de cuenta</li>
                            <li>******************</li>
                            <li>N° de cta. interbancaria</li>
                            <li>*********************</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- end of price tab-->
                    <!--price tab-->
                    <div class="plan basic">
                      <div class="plan-inner">
                        <div class="entry-title">
                          <h3>BBVA</h3>
                          <div class="price"><i class="mt-3 fa-2x fas fa-credit-card"></i>
                          </div>
                        </div>
                        <div class="entry-content">
                          <ul>
                            <li>Número de cuenta</li>
                            <li>*******************</li>
                            <li>N° de cta. interbancaria</li>
                            <li>**********************</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- end of price tab-->
                    <!--price tab-->
                    <div class="plan standard">
                      <div class="plan-inner">
                        <div class="entry-title">
                          <h3>Oxxo</h3>
                          <div class="price"><i class="mt-3 fa-2x fas fa-mobile-alt"></i>
                          </div>
                        </div>
                        <div class="entry-content">
                          <ul>
                            <li>Número de Billetera Electronica</li>
                            <li>999 086 095</li>
                            <li>.</li>
                            <li>.</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- end of price tab--> 
                </div>
                        </div>
                    </div>
                </div> 
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

<div class="modal fade modal fade bd-example-modal-x3" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 1640px">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="text-center modal-title" id="exampleModalCenterTitle">OFERTAS DEL DÍA</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="principal">
                @foreach($ofertas as $oferta)
                <div id="contenedor" class="row_p">
                    <div id="naranja" class="">
                        <img class="popou_img"src="{{asset('/img/ofertas/'.$oferta->image)}}" alt="{{$oferta->image}}">
                    </div>       
                    <div id="verde" class="content_pagos"> 
                        <strong>
                            <h2 class="frm_pagos text-center">{{$oferta->titulo}}</h2>
                        </strong>  
                        <div class="row">
                            <div class="col">
                              <div class="card">
                                <div class="card-content">
                                    <div class="card-body" style="height: 93px;padding: 1.1rem;">
                                      <div class="media d-flex">
                                        <div class="media-body text-left">
                                          <h4 class="text-dark m-0">MXN {{number_format($oferta->precio,2)}}</h4>
                                          <small class="text-muted text-dark"><span class="text-dark">Precio de oferta</span></small>
                                        </div>
                                        <div class="align-self-center">
                                          <i class="fas fa-money-bill-wave-alt float-right fa-3x text-success"></i>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="card">
                                <div class="card-content">
                                    <div class="card-body" style="height: 93px;padding: 1.1rem;">
                                      <div class="media d-flex">
                                        <div class="media-body text-left">
                                          <h4 class="text-dark m-0">{{$oferta->fech_fin}}</h4>
                                          <small class="text-muted text-dark"><span class="text-dark">valido hasta la fecha</span></small>
                                        </div>
                                        <div class="align-self-center">
                                          <i class="fas fa-calendar float-right fa-3x text-warning"></i>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <br>   
                        <h4>{{$oferta->texto}}</h4>  
                        <button type="button" class="btnwssp btn btn-outline-success btn-lg" style="text-decoration: none">
                            <a target="none" href="https://wa.me/529611398893?text=Hola%2CEstoy+interesad%40+en+la+oferta%3A+{{$oferta->titulo}}">
                               Preguntar
                            </a>
                        </button> 
                    </div>
                </div>
                @endforeach  
            </div> 
        </div>
    </div>
    <div class='icon-scroll'></div> 
    <h6 style="color: white" class="text-center">Si hay más promociones por favor siga bajando</h6>     
</div>
@endsection
