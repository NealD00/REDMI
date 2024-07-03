@extends('layaouts.base')

@section('content')

<div class="relative">
                <img src="images/presentacion.jpg" class="w-full h-auto">
</div>

<section class=" bg-cover bg-center bg-no-repeat">
            <div class=" xsm:w-full sm:container w-2/3 mx-auto md:flex justify-center items-center text-center py-6">
                <div class="center xl:w-1/3 lg:w-1/2">
                    <img src="images/redmi.jpg" class="md:w-full" alt="">
                </div>
            </div>
</section>

<section class="bg-white">
  <div class="container mx-auto p-6 bg-blue-100 rounded-lg shadow-md">
    <h3 class="text-blue-800 font-black text-center text-2xl md:text-3xl mb-4">
      ASOCIACIÓN RED DE MUJERES INDÍGENAS <br> ABRIENDO OPORTUNIDADES AQ'AB'AL ONG
    </h3>
    <h2 class="text-justify text-gray-700 text-lg md:text-xl leading-relaxed">
      Una organización comprometida con brindar mentorías a niñas y jóvenes del departamento de Totonicapán, enfocada en el desarrollo de habilidades esenciales para su crecimiento social y personal. Nuestro objetivo es empoderarlas para que puedan enfrentar los desafíos de la vida con confianza, conocimiento y resiliencia. A través de programas de tutoría personalizados, proporcionamos herramientas educativas, apoyo emocional y oportunidades de liderazgo que fomentan su autodescubrimiento y potencial pleno. Creemos en la importancia de crear un entorno inclusivo y seguro donde cada participante pueda prosperar y contribuir positivamente a su comunidad.
    </h2>
  </div>
</section>

<div class="bg-white p-8"></div>
<div class="bg-blue-800 p-8"></div>
<section class="bg-blue-800">
    <div class="container mx-auto flex justify-center">
        <div class="bg-blue-800 grid grid-cols-1 md:grid-cols-2 justify-items-center gap-10">
    
        <div class="max-w-xs overflow-hidden bg-blue-50 border border-gray-200 rounded-xl shadow-md transform transition-all duration-500 hover:shadow-lg hover:scale-105 relative group ">
        <div class="absolute inset-0 bg-gradient-to-br from-gray-100 to-blue-500 opacity-0 transition-opacity duration-500 group-hover:opacity-30 blur-md">
        </div>
        <div class="p-6 relative z-10">
            <p class="text-xl font-black text-blue-900 text-center">MISION</p>
            <p class="mt-2 text-gray-600 text-justify">
            Facilitar espacios de formación continua en estrategias de tutoría a niñas, adolescentes y mujeres en comunidades rurales que les permite tener oportunidades. 

            </p>
            <img src="images/mision.jpg" >
        </div>
        </div>


        <div class="max-w-xs overflow-hidden bg-blue-50 border border-gray-200 rounded-xl shadow-md transform transition-all duration-500 hover:shadow-lg hover:scale-105 relative group">
        <div class="absolute inset-0 bg-gradient-to-br from-gray-100 to-blue-500 opacity-0 transition-opacity duration-500 group-hover:opacity-30 blur-md">   
        </div>
        <div class="p-6 relative z-10">
            <p class="text-xl font-black text-blue-900 text-center">VISION</p>
            <p class="mt-2 text-gray-600 text-justify">
            Promovemos acciones con actores para el cumplimiento de los derechos primordiales de niñas, adolescentes y mujeres en las comunidades rurales con el fin tener una calidad de vida.

            </p>
            <img src="images/ardui.jpg" >
        </div>
        </div>
  
        </div>
    </div>
    <div class="bg-blue-800 p-9"></div>
</section>

<section class=" mx-auto p-6 bg-blue-800 shadow-md">
        <!--<h2 class="text-2xl font-bold mb-6">Carrusel de Fotos</h2>-->
        <div class="relative">
            <div class="carousel">
                <div class="carousel-item active">
                    <img src="images/redmi2.jpg" alt="Foto 1" class="w-full h-auto rounded-lg">
                </div>
                <div class="carousel-item">
                    <img src="images/mujer.jpg" alt="Foto 2" class="w-full h-auto rounded-lg">
                </div>
                <div class="carousel-item">
                    <img src="images/vision.jpg" alt="Foto 3" class="w-full h-auto rounded-lg">
                </div>
                <div class="carousel-item">
                    <img src="images/prograAO.jpg" alt="Foto 4" class="w-full h-auto rounded-lg">
                </div>
            </div>
            <button id="prev" class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-amber-600 text-white p-2 rounded-full"><img src="icons/leftarrow.svg"></button>
            <button id="next" class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-amber-600 text-white p-2 rounded-full"><img src="icons/rightarrow.svg"></button>
        </div>
    </section>
    <div class="bg-blue-800 p-5"></div>

<section class=" mx-auto p-6 bg-blue-50 rounded-lg shadow-md">
        <h2 class="text-2xl text-orange-600 text-center font-black mb-6">Preguntas Frecuentes</h2>
        
        <div id="faq-container">
            <div class="faq-item p-4 mb-4 border border-gray-200 rounded-lg bg-yellow-50">
                <p class="faq-question text-lg font-semibold text-blue-700">¿Para quienes fue creado el programa?</p>
                <p class="faq-answer hidden mt-2 text-blue-900">Para involucrar a las niñas y adolescentes como protagonistas en todas las actividades que se realicen en la promoción de sus derechos. 
                </p>
            </div>
            <div class="faq-item p-4 mb-4 border border-gray-200 rounded-lg bg-yellow-50">
                <p class="faq-question text-lg font-semibold text-blue-700">¿Cuál es el Objetivo del Programa?</p>
                <p class="faq-answer hidden mt-2 text-blue-900">Intercambiar expericiencias positivas entre las organizaciones aliadas a Ellas al Frente, para fortalecer nuestras acciones que desarrollamos con niñas y adolescentes. 
                .</p>
            </div>
            <div class="faq-item p-4 mb-4 border border-gray-200 rounded-lg bg-yellow-50">
                <p class="faq-question text-lg font-semibold text-blue-700">¿Cuál es el Rango de Edad de las participantes del Programa?</p>
                <p class="faq-answer hidden mt-2 text-blue-900">Existen dos categorias de participacion: Niñas de 7 a 12 años y Adolescentes de 12 años en adelante.
                .</p>
            </div>
            <div class="faq-item p-4 mb-4 border border-gray-200 rounded-lg bg-yellow-50">
                <p class="faq-question text-lg font-semibold text-blue-700">¿Cuales son los metodos que utilizan?</p>
                <p class="faq-answer hidden mt-2 text-blue-900">Mentoría a través sesiones semanales en Espacios Seguros, tutoría, visitas personalizadas, sesiones enfocado al tema de manejo de emociones, epacios de formación, estudio y práctica de sesiones.

                .</p>
            </div>
        </div>
</section>

<div class="bg-amber-500 p-8">
    <h3 class="text-blue-900 text-center font-black xsm:text-3xl sm:text-4xl">Contactanos</h3>
</div>
<div class="flex items-center gap-12 bg-amber-500 mx-auto justify-center">
  <div class="social-button">
    <button class="relative w-20 h-20 rounded-full group">
      <div
        class="floater w-full h-full absolute top-0 left-0 bg-green-600 rounded-full duration-300 group-hover:-top-8 group-hover:shadow-2xl"
      ></div>
      <div
        class="icon relative z-10 w-full h-full flex items-center justify-center border-2 border-green-600 rounded-full"
      >
      <a href="https://www.google.com">
        <img src="icons/ws.svg" class="group-hover:fill-[#171543] fill-white duration-300">
      </a> 
      </div>
    </button>
  </div>

  <div class="social-button">
    <button class="relative w-20 h-20 rounded-full group">
      <div
        class="floater w-full h-full absolute top-0 left-0 bg-blue-500 rounded-full duration-300 group-hover:-top-8 group-hover:shadow-2xl"
      ></div>
      <div
        class="icon relative z-10 w-full h-full flex items-center justify-center border-2 border-blue-500 rounded-full"
      >
      <a href="https://www.facebook.com/REDMIaqabal2008%20">
        <img src="icons/face.svg" class="group-hover:fill-[#171543] fill-white duration-300">
      </a> 
      </div>
    </button>
  </div>


  <div class="social-button">
    <button class="relative w-20 h-20 rounded-full group">
      <div
        class="floater w-full h-full absolute top-0 left-0 bg-red-400 rounded-full duration-300 group-hover:-top-8 group-hover:shadow-2xl"
      ></div>
      <div
        class="icon relative z-10 w-full h-full flex items-center justify-center border-2 border-red-400 rounded-full"
      >
      <a href="https://www.google.com">
        <img src="icons/yutu.svg" class="group-hover:fill-[#171543] fill-white duration-300">
      </a> 
      </div>
    </button>
  </div>

  <div class="social-button">
    <button class="relative w-20 h-20 rounded-full group">
      <div
        class="floater w-full h-full absolute top-0 left-0 bg-slate-900 rounded-full duration-300 group-hover:-top-8 group-hover:shadow-2xl"
      ></div>
      <div
        class="icon relative z-10 w-full h-full flex items-center justify-center border-2 border-slate-900 rounded-full"
      >
      <a href="https://www.google.com">
        <img src="icons/email.svg" class="group-hover:fill-[#171543] fill-white duration-300">
      </a> 
      </div>
    </button>
  </div>
</div>


<div class="bg-amber-500 p-8"></div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const faqItems = document.querySelectorAll(".faq-item");

            faqItems.forEach(item => {
                item.addEventListener("click", function() {
                    const answer = this.querySelector(".faq-answer");
                    answer.classList.toggle("hidden");
                });
            });
        });
    </script>


<script>
        document.addEventListener("DOMContentLoaded", function() {
            const items = document.querySelectorAll('.carousel-item');
            let currentItem = 0;

            document.getElementById('prev').addEventListener('click', () => {
                items[currentItem].classList.remove('active');
                currentItem = (currentItem === 0) ? items.length - 1 : currentItem - 1;
                items[currentItem].classList.add('active');
            });

            document.getElementById('next').addEventListener('click', () => {
                items[currentItem].classList.remove('active');
                currentItem = (currentItem === items.length - 1) ? 0 : currentItem + 1;
                items[currentItem].classList.add('active');
            });
        });
  </script>

@endsection