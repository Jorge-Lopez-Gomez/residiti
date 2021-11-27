<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="imagenes" href="{{asset('img/diti.ico')}}">
    <title>DITI | INICIO</title>

    <!--LINNK-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Styles -->
    <link type="text/css" href="{{asset('css/style.css') }}" rel="stylesheet">
    <link type="text/css" href="{{asset('css/slick.css') }}" rel="stylesheet">
    <style>
        .swiper {
          width: 100%;
          padding-top: 50px;
          padding-bottom: 50px;
        }
  
        .swiper-slide {
          background-position: center;
          background-size: cover;
          width: 300px;
          height: 300px;
        }
  
        .swiper-slide img {
          display: block;
          width: 100%;
        }
      </style>
</head>
<body> 
    @yield('redes')
        <section id="headerSection">
            @yield('navbar_top')
            @yield('navbar')
            @yield('banner')
        </section>
    @yield('Proveedores')
    @yield('products')
    @yield('cards_service')
    @yield('title')
        <div class="body_cards">
            @yield('cards')
        </div>
    @yield('title2')
    @yield('colaboradores')
    @yield('footer')
    @yield('modals')
    <!--SCRIPT-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
	var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 10,
          stretch: 0,
          modifier: 1,
          slideShadows: true,
        },
        loop:true,
	    autoplay:{
			delay:3500,
			disableOnInteraction:false,
        },
        pagination: {
          el: ".swiper-pagination",
        },
      });
    </script>
    <script src="{{asset('js/hgnka.js') }}"></script>
    <script src="{{asset('js/security.js') }}"></script>
    <script src="{{asset('js/provee.js') }}"></script>
    <script src="{{asset('js/slick.min.js') }}"></script>
    <script src="{{asset('js/typed.js') }}"></script>
    <script>
        var typed = new Typed('.type', {
        strings: ['<span><i class="fas fa-book"></i></span> Cursos presenciales y en línea', 
                    '<span><i class="fas fa-user-friends"></i></span> Profesores capacitados'
                    ,'<span><i class="fas fa-toolbox"></i></span> Soporte constante'
                    ,'<span><i class="fas fa-cog"></i></span> Soporte'
                    ,'<span><i class="fas fa-coffee"></i></span> Clases de regulacion'],
        typeSpeed:60,backSpeed:60,loop:true});
    </script>
</body>
</html>