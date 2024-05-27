@extends('layaouts.base')

@section('content')

<div class="relative">
                <img src="images/redmi1.jpg" alt="" class="w-full h-auto">
</div>

<section class="bg-yellow-dots">
            <div class="bg-wave-pink bg-repeat-x h-6 relative -top-4"></div>
            <div class="xsm:w-full sm:container w-2/3 mx-auto md:flex justify-center items-center text-center py-6">
                <div class="right xl:w-1/3 lg:w-1/2">
                    <img src="images/redmi.jpg" class="md:w-full" alt="">
                </div>
                <div class="left xl:w-1/3 lg:w-1/2 p-5">
                    <h3 class="text-orange-600 font-black  xsm:text-3xl sm:text-4xl">
                    Asociacion <br> Redmi <br> Aq'ab'al
                    </h3>

                    <p class="py-4 text-xl">
                        We’re not kitten—transform into a cat-tastic new you!
                    </p>
                    <p>
                        <a href="{{url('contacto')}}" class="xl:text-2xl my-4 inline-block py-2 px-16 bg-amber-500  text-white font-black border-transparent border-8 rounded-3xl hover:border-blue-900  hover:bg-white hover:text-black transition duration-200 group">
                            Nosotras 
                            <span class="w-4 h-4 inline-block border-yellow-300 border-solid border-t-[5px] border-r-[5px] transition-all transform rotate-45 group-hover:border-orange-600 xl:group-hover:ml-4"></span>
                        </a>
                    </p>

                </div>

            </div>
        </section>
@endsection