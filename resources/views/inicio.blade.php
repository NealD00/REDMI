@extends('layaouts.base')

@section('content')

<div class="relative">
                <img src="images/redmi1.jpg" alt="" class="w-full h-auto">
</div>

<section class="bg-[url('/public/images/fondo1.png')] bg-cover bg-center bg-no-repeat">
            <div class=" xsm:w-full sm:container w-2/3 mx-auto md:flex justify-center items-center text-center py-6">
                <div class="left xl:w-1/3 lg:w-1/2 p-5">
                    <h3 class="text-orange-600 font-black xsm:text-3xl sm:text-4xl">
                    Asociacion <br> Redmi <br> Aq'ab'al
                    </h3>

                    <p class="py-4 text-xl">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, molestiae! Laboriosam, molestias magnam! Eos, tenetur temporibus? Odit maiores ipsum officia asperiores tenetur consequuntur eos ab dignissimos quo. Eaque, dignissimos quos.
                    </p>
                    <p>
                        <a href="{{url('contacto')}}" class="xl:text-2xl my-4 inline-block py-2 px-16 bg-amber-500  text-white font-black border-transparent border-8 rounded-3xl hover:border-blue-900  hover:bg-white hover:text-black transition duration-200 group">
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
    <div class="container mx-auto ">
        <div class="bg-amber-500 grid grid-cols-1 md:grid-cols-3 gap-6">

            
            <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                <img src="images/empoderamiento.jpg" alt="Ingresar" class="mb-4">
                <h3 class="font-bold">EMPOWER</h3>
                <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, fugit illum debitis pariatur modi magni rerum in quidem quis expedita quas eum illo aut est. At nemo aut optio obcaecati.</h1>
            </div>

            <!-- Second Division -->
            <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                <img src="images/salud.jpg" alt="Imprimir" class="mb-4">
                <h3 class="font-bold">SALUD SEXUAL Y REPRODUCTIVA</h3>
                <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum facilis, harum vel quam reiciendis minus dolore repellendus sed ullam neque placeat labore nobis quibusdam hic, perferendis facere quaerat. Harum, delectus!</h1>
            </div>

            <!-- Third Division -->
            <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                <img src="images/manos.jpg" alt="Crear" class="mb-4">
                <h3 class="font-bold">MANUALIDADES</h3>
                <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis aperiam enim mollitia voluptatum, officiis odio quia praesentium sunt quae, voluptate hic atque! Quia, molestias esse pariatur animi cumque laborum reprehenderit!</h1>
            </div>

        </div>
    </div>
    <div class="bg-amber-500 p-8"></div>


<section class="testimony bg-[url('/public/images/fondo1.png')] bg-cover bg-center bg-no-repeat p-10">
            <div class="testimony__container container">
                <img src="icons/leftarrow.svg" class="testimony__arrow" id="before">
                
                <section class="testimony__body testimony__body--show" data-id="1">
                     <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Jordan Alexander, <span class="testimony__course">estudiante de CSS</span></h2>
                        <p class="testimony__review">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque facere enim, eum ipsa est, neque natus sint nisi quaerat nobis, quibusdam consequatur porro nemo recusandae temporibus magni inventore consequuntur? Rerum?</p>
                     </div>

                     <figure class="testimony__picture">
                        <img src="/images/face1.jpg" class="testimony__img">
                     </figure>
                </section>

                <section class="testimony__body" data-id="2">
                    <div class="testimony__texts">
                       <h2 class="subtitle">Mi nombre es Mishell Smith, <span class="testimony__course">estudiante de git</span></h2>
                       <p class="testimony__review">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque facere enim, eum ipsa est, neque natus sint nisi quaerat nobis, quibusdam consequatur porro nemo recusandae temporibus magni inventore consequuntur? Rerum?</p>
                    </div>

                    <figure class="testimony__picture">
                       <img src="/images/face2.jpg" class="testimony__img">
                    </figure>
               </section>

               <section class="testimony__body" data-id="3">
                <div class="testimony__texts">
                   <h2 class="subtitle">Romeo Santos, <span class="testimony__course">estudiante de HTML</span></h2>
                   <p class="testimony__review">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque facere enim, eum ipsa est, neque natus sint nisi quaerat nobis, quibusdam consequatur porro nemo recusandae temporibus magni inventore consequuntur? Rerum?</p>
                </div>

                <figure class="testimony__picture">
                   <img src="/images/face3.jpg" class="testimony__img">
                </figure>
                    </section>

                <img src="icons/rightarrow.svg" class="testimony__arrow" id="next">

            </div>

        </section>

<script>
    const sliders = [...document.querySelectorAll('.testimony__body')];
     const buttonNext=document.querySelector('#next');
     const buttonBefore=document.querySelector('#before');
     let value;
     
     buttonNext.addEventListener('click',()=>{
       changePosition(1);
     });

     buttonBefore.addEventListener('click',()=>{
        changePosition(-1);
     });
    
     const changePosition=(add)=>{
        const currentTestimony = document.querySelector('.testimony__body--show').dataset.id;
        value = Number(currentTestimony);
        value+= add;
        
        sliders[Number(currentTestimony)-1].classList.remove('testimony__body--show');
        if(value == sliders.length+1 || value === 0){
          value = value === 0 ? sliders.length : 1;
        }

        sliders[value-1].classList.add('testimony__body--show');

     }
</script>

@endsection

