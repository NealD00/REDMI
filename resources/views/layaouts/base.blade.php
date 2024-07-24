<!DOCTYPE html>
<html lang="es">
<head>
    <!--{% load static %}-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logoblue.png" type="image/x-icon">
    <!--<title>{% block title %} {% endblock %}</title>-->
    <title>Redmi Aq'ab'al</title>
    <style>
        .faq-item {
            cursor: pointer;
        }
        .carousel-item {
            display: none;
        }
        .carousel-item.active {
            display: block;
        }
        .carousel img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
    </style>
    @vite('resources/css/app.css')
</head>
<body>
<div class=" xsm:w-full mx-auto">
        <nav class="bg-blue-900 flex justify-between lg:justify-start items-center">
            <div class="logo flex-initial p-2 w-1/6">
                <img src="images/logored.png" alt="">
            </div>

            <div class="text-white font-extrabold tracking-tight">
                <h2>MOMOSTENANGO</h2>
                <h2 >TOTONICAPAN</h2>
            </div>
            
            <div class="links lg:block  font-extrabold hidden w-1/6 md:w-4/6 ">
                <ul class="flex menu text-amber-500   items-center justify-center gap-5">
                    <li><a href="{{url('/')}}"class="link hover:text-white"><img src="icons/start.svg" class=" inline-block mr-2" alt="">INICIO</a></li><br>
                    <li><a href="{{url('eventos')}}" class="link hover:text-white "><img src="icons/calendar.svg" class="inline-block mr-2" alt="">EVENTOS</a></li><br>
                    <li><a href="{{url('programas')}}" class="link hover:text-white"><img src="icons/fem.svg" class="inline-block mr-2" alt="">PROGRAMA</a></li><br>
                    <li><a href="{{url('nosotras')}}"class="link hover:text-white"><img src="icons/contact.svg" class="inline-block mr-2" alt="">NOSOTRAS</a></li><br>
                    <li><a href="{{url('admin/login')}}"class="link hover:text-white"><img src="icons/login.svg" class="inline-block mr-2" alt="">INGRESAR</a></li><br>
                    
                   </ul>
            </div>

            <div class="block lg:hidden w-1/6 lg:w-4/6">
                <a href="#" class="link" id="mobile-menu"><img src="icons/menu.svg" class="items-center" alt=""></a>

                <ul class="mobile-links hidden w-full absolute z-50 left-0 text-center bg-blue-950">
                    <li><a href="{{url('/')}}" class="link text-amber-500 "><img src="icons/start.svg" class="inline-block mr-2" alt="">Inicio</a></li><br>
                    <li><a href="{{url('eventos')}}" class="link text-amber-500 "><img src="icons/calendar.svg" class="inline-block mr-2" alt="">Eventos</a></li><br>
                    <li><a href="{{url('programas')}}" class="link text-amber-500 "><img src="icons/fem.svg" class="inline-block mr-2" alt="">Programas</a></li><br>
                    <li><a href="{{url('nosotras')}}" class="link text-amber-500 "><img src="icons/contact.svg" class="inline-block mr-2" alt="">Nosotras</a></li><br>
                    <li><a href="{{url('admin/login')}}"class="link text-amber-500 "><img src="icons/login.svg" class="inline-block mr-2" alt="">Ingresar</a></li><br>
                </ul>
            </div>

            
        </nav>
</div>
    
@yield('content')
    
<footer class="bg-blue-900 text-amber-500  py-8">
    <div class="container mx-auto flex flex-wrap justify-between items-center">
        <div class="flex-1 mb-4">

            <h4 class="text-lg font-semibold mb-2">Redmi Aq'ab'al</h4>
            <ul>

                <li><a href="{{url('/')}}" class="block py-2 hover:text-white"><img src="icons/start.svg" class="inline-block mr-2" alt="">INICIO</a></li>
                <li><a href="{{url('eventos')}}"class="block py-2 hover:text-white"><img src="icons/calendar.svg" class="inline-block mr-2" alt="">EVENTOS</a></li>
                <li><a href="{{url('programas')}}" class="block py-2 hover:text-white"><img src="icons/fem.svg" class="inline-block mr-2"  alt="">PROGRAMA</a></li>
                <li><a href="{{url('nosotras')}}"class="block py-2 hover:text-white"><img src="icons/contact.svg" class="inline-block mr-2" alt="">NOSOTRAS</a></li>
                <li><a href="#" class="block py-2 hover:text-white"><img src="icons/login.svg" class="inline-block mr-2" alt="">INGRESAR</a></li>
            </ul>
        </div>
        <div class="logo flex-initial p-2 w-1/6">
                <img src="images/umg.png" width="100" alt="">
            </div>
        <div class="flex-1 mb-4">
            <p class="text-sm text-white">Una organización comprometida con brindar mentorías a niñas y jóvenes del departamento de Totonicapán, enfocada en el desarrollo de habilidades esenciales para su crecimiento social y personal.</p>
        </div>
        <div class="flex-1 mb-4 text-right">
            <h4 class="text-lg font-semibold mb-2">Redes Sociales</h4>
            <ul>
                <li class="inline-block mx-2"><a href="#" class="text-gray-300 hover:text-white"><img src="icons/fb.svg" alt=""></a></li>
                <li class="inline-block mx-2"><a href="#" class="text-gray-300 hover:text-white"><img src="icons/wsp.svg" alt=""></a></li>
                <li class="inline-block mx-2"><a href="#" class="text-gray-300 hover:text-white"><img src="icons/tw.svg" alt=""></a></li>
                <!--<li class="inline-block mx-2"><a href="#" class="text-gray-300 hover:text-white"><img src="icons/yt.svg" alt=""></a></li>-->            
            </ul>
        </div>
    </div>
</footer>

<script>
        const menuButton = document.querySelector('#mobile-menu');

        menuButton.addEventListener('click', e  => {
            const menu = document.querySelector('.mobile-links');

            menu.classList.toggle('hidden');
        });
</script>

</body>
</html>