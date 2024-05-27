<!DOCTYPE html>
<html lang="es">
<head>
    <!--{% load static %}-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title>{% block title %} {% endblock %}</title>-->
    <title>Redmi Aq'ab'al</title>
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
            
            <div class="links lg:block hidden w-1/6 md:w-4/6">
                <ul class="flex menu text-amber-500   items-center justify-center gap-5">
                    <li><a href="{{url('/')}}"class="link hover:text-white"><img src="icons/start.svg" class=" inline-block mr-2" alt="">INICIO</a></li><br>
                    <li><a href="#" class="link hover:text-white "><img src="icons/calendar.svg" class="inline-block mr-2" alt="">EVENTOS</a></li><br>
                    <li><a href="{{url('inscribirse')}}" class="link hover:text-white"><img src="icons/fem.svg" class="inline-block mr-2" alt="">PROGRAMA</a></li><br>
                    <li><a href="{{url('contacto')}}"class="link hover:text-white"><img src="icons/contact.svg" class="inline-block mr-2" alt="">ACERCA DE</a></li><br>
                    <li><a href="{{url('admin/login')}}"class="link hover:text-white"><img src="icons/login.svg" class="inline-block mr-2" alt="">INGRESAR</a></li><br>
                    
                   </ul>
            </div>

            <div class="block lg:hidden w-1/6 lg:w-4/6">
                <a href="#" class="link" id="mobile-menu"><img src="icons/menu.svg" class="items-center" alt=""></a>

                <ul class="mobile-links hidden w-full absolute z-50 left-0 text-center bg-violet-500">
                    <li><a href="{{url('/')}}" class="link"><img src="icons/start.svg" class="inline-block mr-2" alt="">Inicio</a></li><br>
                    <li><a href="#" class="link"><img src="icons/calendar.svg" class="inline-block mr-2" alt="">Eventos</a></li><br>
                    <li><a href="{{url('inscribirse')}}" class="link"><img src="icons/fem.svg" class="inline-block mr-2" alt="">Programas</a></li><br>
                    <li><a href="{{url('contacto')}}" class="link"><img src="icons/contact.svg" class="inline-block mr-2" alt="">Acerca de</a></li><br>
                    <li><a href="#"class="link"><img src="icons/login.svg" class="inline-block mr-2" alt="">Ingresar</a></li><br>
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
                <li><a href="#" class="block py-2 hover:text-white"><img src="icons/calendar.svg" class="inline-block mr-2" alt="">EVENTOS</a></li>
                <li><a href="{{url('inscribirse')}}" class="block py-2 hover:text-white"><img src="icons/fem.svg" class="inline-block mr-2"  alt="">PROGRAMA</a></li>
                <li><a href="{{url('contacto')}}"class="block py-2 hover:text-white"><img src="icons/contact.svg" class="inline-block mr-2" alt="">ACERCA DE</a></li>
                <li><a href="#" class="block py-2 hover:text-white"><img src="icons/login.svg" class="inline-block mr-2" alt="">INGRESAR</a></li>
            </ul>
        </div>
        <div class="logo flex-initial p-2 w-1/6">
                <img src="images/umg.png" width="100" alt="">
            </div>
        <div class="flex-1 mb-4">
            <p class="text-sm text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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

<script src="{% static 'js/gestionCursos.js' %}"></script>

</body>
</html>