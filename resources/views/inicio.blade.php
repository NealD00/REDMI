@extends('layaouts.base')

@section('content')

<div class="relative">
                <img src="images/redmi1.jpg" alt="" class="w-full h-auto">
</div>

<!--bg-[url('/public/images/fondo1.png')]-->
<section class=" bg-cover bg-center bg-no-repeat">
            <div class=" xsm:w-full sm:container w-2/3 mx-auto md:flex justify-center items-center text-center py-6">
                <div class="left xl:w-1/3 lg:w-1/2 p-5">
                    <h3 class="text-orange-600 font-black xsm:text-3xl sm:text-4xl">
                    Asociacion <br> Redmi <br> Aq'ab'al
                    </h3>

                    <p class="py-4 text-xl">
                       
                    Una organización comprometida con brindar mentorías a niñas y jóvenes del departamento de Totonicapán, enfocada en el desarrollo de habilidades esenciales para su crecimiento social y personal.
                    </p>
                    <p>
                        <a href="{{url('nosotras')}}" class="xl:text-2xl my-4 inline-block py-2 px-16 bg-amber-500  text-white font-black border-transparent border-8 rounded-3xl hover:border-blue-900  hover:bg-white hover:text-black transition duration-200 group">
                            Nosotras 
                            <span class="w-4 h-4 inline-block border-yellow-300 border-solid border-t-[5px] border-r-[5px] transition-all transform rotate-45 group-hover:border-orange-600 xl:group-hover:ml-4"></span>
                        </a>
                    </p>
                </div>
                <div class="right xl:w-1/3 lg:w-1/2">
                    <img src="images/redmi.jpg" class="md:w-full" alt="">
                </div>
            </div>
</section>

<div class="bg-amber-500 p-8"></div>
<section class="bg-amber-500">
    <div class="container mx-auto flex justify-center">
        <div class="bg-amber-500 grid grid-cols-1 md:grid-cols-3 justify-items-center gap-6">
    
        <div class="max-w-xs overflow-hidden bg-white border border-gray-200 rounded-xl shadow-md transform transition-all duration-500 hover:shadow-lg hover:scale-105 relative group">
        <div class="absolute inset-0 bg-gradient-to-br from-gray-100 to-white opacity-0 transition-opacity duration-500 group-hover:opacity-30 blur-md">
        </div>
        <div class="p-6 relative z-10">
            <img src="images/empoderamiento.jpg" >
            <p class="text-xl font-semibold text-blue-800 text-center">EMPODERAMIENTO</p>
            <p class="mt-2 text-gray-600">
            El empoderamiento femenino se refiere al proceso mediante el cual las mujeres ganan poder y control sobre sus propias vidas y se convierten en participantes activas y decisivas en los ámbitos político, económico, social y personal.
            </p>
        </div>
        </div>


        <div class="max-w-xs overflow-hidden bg-white border border-gray-200 rounded-xl shadow-md transform transition-all duration-500 hover:shadow-lg hover:scale-105 relative group">
        <div class="absolute inset-0 bg-gradient-to-br from-gray-100 to-white opacity-0 transition-opacity duration-500 group-hover:opacity-30 blur-md">   
        </div>
        <div class="p-6 relative z-10">
            <img src="images/salud.jpg" >
            <p class="text-xl font-semibold text-blue-800 text-center">SALUD Y BIENESTAR</p>
            <p class="mt-2 text-gray-600">
            Promover el acceso a servicios de salud adecuados, incluyendo la salud reproductiva y el bienestar emocional y mental, lo que tiene efectos positivos a largo plazo en la sociedad.
            </p>
        </div>
        </div>

        <div class="max-w-xs overflow-hidden bg-white border border-gray-200 rounded-xl shadow-md transform transition-all duration-500 hover:shadow-lg hover:scale-105 relative group">
        <div class="absolute inset-0 bg-gradient-to-br from-gray-100 to-white opacity-0 transition-opacity duration-500 group-hover:opacity-30 blur-md">           
        </div>
        <div class="p-6 relative z-10">
            <img src="images/manos.jpg" >
            <p class="text-xl font-semibold text-blue-800 text-center">PARTICIPACION SOCIAL</p>
            <p class="mt-2 text-gray-600">
            Fomentar la participación activa de las mujeres en la comunidad y en organizaciones sociales para que puedan influir en las decisiones que afectan sus vidas y las de sus familias.
            </p>
        </div>
        </div>
  
        </div>
    </div>
    <div class="bg-amber-500 p-8"></div>
</div>

<section>
    <div class="bg-[url('/public/images/fondo1.png')] p-11"></div>
</section>
@endsection

