@extends('layaouts.base')

@section('content')

<div class="relative">
                <img src="images/programa.jpg" class="w-full h-auto">
</div>

<section class=" bg-blue-100">
            <div class=" xsm:w-full sm:container w-2/3 mx-auto md:flex justify-center items-center text-center py-6">
                <div class="left xl:w-1/3 lg:w-1/2">
                    <img src="images/logros.jpg" class="md:w-full" alt="">
                </div>    
                <div class="right xl:w-1/3 lg:w-1/2 p-5">
                    <h3 class="text-blue-800 font-black xsm:text-3xl sm:text-4xl">
                    ABRIENDO OPORTUNIDADES
                    </h3>

                    <p class="py-4 text-xl">
                    Abriendo Oportunidades es un programa centrado en niñas y adolescentes en áreas rurales de Guatemala. Busca proveerles de habilidades para la vida que les ayuden a transformar su realidad.   
                    </p>
                    <!--<p>
                        <a href="{{url('nosotras')}}" class="xl:text-2xl my-4 inline-block py-2 px-16 bg-amber-500  text-white font-black border-transparent border-8 rounded-3xl hover:border-blue-900  hover:bg-white hover:text-black transition duration-200 group">
                            Nosotras 
                            <span class="w-4 h-4 inline-block border-yellow-300 border-solid border-t-[5px] border-r-[5px] transition-all transform rotate-45 group-hover:border-orange-600 xl:group-hover:ml-4"></span>
                        </a>
                    </p>-->
                </div>
            </div>
</section>

<div class="p-8"></div>
<section class="container mx-auto p-6 bg-blue-100 rounded-lg shadow-md">
    <div class="text-blue-800 font-black text-center text-2xl md:text-3xl mb-4">
        COMUNIDADES DE MOMOSTENANGO
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="cursor-pointer transition-all duration-500 hover:translate-y-2 bg-neutral-50 rounded-lg shadow-xl flex flex-row items-center justify-evenly gap-4 p-4">
            <img src="icons/ubi.svg" alt="">
            <div>
                <span class="font-bold text-orange-600">Chopuerta</span>
                <!--<p class="line-clamp-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                </p>-->
            </div>
        </div>

        <div class="cursor-pointer transition-all duration-500 hover:translate-y-2 bg-neutral-50 rounded-lg shadow-xl flex flex-row items-center justify-evenly gap-4 p-4">
            <img src="icons/ubi.svg" alt="">
            <div>
                <span class="font-bold text-orange-600">Patziquiquim</span>
                <p class="line-clamp-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>

        <div class="cursor-pointer transition-all duration-500 hover:translate-y-2 bg-neutral-50 rounded-lg shadow-xl flex flex-row items-center justify-evenly gap-4 p-4">
            <img src="icons/ubi.svg" alt="">
            <div>
                <span class="font-bold text-orange-600">Caserio Pasuc</span>
                <p class="line-clamp-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>

        <div class="cursor-pointer transition-all duration-500 hover:translate-y-2 bg-neutral-50 rounded-lg shadow-xl flex flex-row items-center justify-evenly gap-4 p-4">
            <img src="icons/ubi.svg" alt="">
            <div>
                <span class="font-bold text-orange-600">Paraje Chucapja</span>
                <p class="line-clamp-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>

        <div class="cursor-pointer transition-all duration-500 hover:translate-y-2 bg-neutral-50 rounded-lg shadow-xl flex flex-row items-center justify-evenly gap-4 p-4">
            <img src="icons/ubi.svg" alt="">
            <div>
                <span class="font-bold text-orange-600">Paraje Patzaquibala</span>
                <p class="line-clamp-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>

        <div class="cursor-pointer transition-all duration-500 hover:translate-y-2 bg-neutral-50 rounded-lg shadow-xl flex flex-row items-center justify-evenly gap-4 p-4">
            <img src="icons/ubi.svg" alt="">
            <div>
                <span class="font-bold text-orange-600">Payak Juyub</span>
                <p class="line-clamp-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>

        <div class="cursor-pointer transition-all duration-500 hover:translate-y-2 bg-neutral-50 rounded-lg shadow-xl flex flex-row items-center justify-evenly gap-4 p-4">
            <img src="icons/ubi.svg" alt="">
            <div>
                <span class="font-bold text-orange-600">Choyocte</span>
                <p class="line-clamp-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>

        <div class="cursor-pointer transition-all duration-500 hover:translate-y-2 bg-neutral-50 rounded-lg shadow-xl flex flex-row items-center justify-evenly gap-4 p-4">
            <img src="icons/ubi.svg" alt="">
            <div>
                <span class="font-bold text-orange-600">Posito</span>
                <p class="line-clamp-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>
    </div>
</section>
<div class="p-8"></div>


@endsection