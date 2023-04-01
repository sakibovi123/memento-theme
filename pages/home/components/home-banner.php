<section class="" id="home-banner">
    <div class="relative">
        <ul id="slider">

        <li class="h-screen relative xs:h-[90vh] md:h-[85vh] lg:h-[85vh]">
            <img class="h-full w-full object-fill" src="assets/images/Project-management-2.jpg" alt="">
            <div class="absolute top-[30%] left-0 h-full w-full flex-col items-center justify-center my-[-70px]">
                <h2 class="text-2xl xs:text-3xl md:text-4xl lg:text-4xl xl:text-7xl font-bold text-white my-auto w-[100%] sm:w-[40%] mx-5 sm:mx-32 xs:mx-32 text-center sm:text-left">
                    Creating the Atelier of Dreams Creating the Atelier.
                </h2>
                <p class="px-5 mx-5 sm:mx-32 xs:px-32 w-full sm:w-[40%] my-7 text-base xs:text-xl md:text-xl text-white">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Suscipit voluptatibus vero est officiis quisquam hic sint deleniti
                    cum tempore atque autem temporibus unde numquam repudiandae,
                    recusandae laudantium tempora ratione distinctio!.
                </p>

                <button class="cursor-pointer px-5 mx-5 sm:mx-32 xs:mx-32 w-[50%] sm:w-[13%] p-2 my-7 rounded-3xl cursor-pointer text-xl xs:text-xl md:text-xl text-dark bg-slate-100 hover:bg-slate-300">
                    Learn More
                </button>
            </div>
        </li>



        <li class="h-screen relative hidden xs:h-[85vh] md:h-[85vh] lg:h-[85vh]">
            <img class="h-full w-full object-fill" src="assets/images/Template-2-.jpg" alt="">
            <div class="absolute top-[30%] left-0 h-full w-full flex-col items-center justify-center">
                <h2 class="text-2xl xs:text-3xl md:text-6xl font-bold text-white my-auto w-[100%] sm:w-[40%] mx-5 sm:mx-32 xs:mx-32 text-center sm:text-left">
                    Creating the Atelier of Dreams Creating the Atelier.
                </h2>
                <p class="px-5 mx-5 sm:mx-32 xs:px-32 w-full sm:w-[40%] my-7 text-base xs:text-xl md:text-2xl text-white">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Suscipit voluptatibus vero est officiis quisquam hic sint deleniti
                    cum tempore atque autem temporibus unde numquam repudiandae,
                    recusandae laudantium tempora ratione distinctio!.
                </p>
            </div>
        </li>



        <li class="h-screen relative hidden xs:h-[85vh] md:h-[85vh] lg:h-[85vh]">
            <img class="h-full w-full object-fill" src="assets/images/banner-3.jpg" alt="">
            <div class="absolute top-[30%] left-0 h-full w-full flex-col items-center justify-center">
                <h2 class="text-2xl xs:text-3xl md:text-6xl font-bold text-white my-auto w-[100%] sm:w-[40%] mx-5 sm:mx-32 xs:mx-32 text-center sm:text-left">
                    Creating the Atelier of Dreams Creating the Atelier.
                </h2>
                <p class="px-5 mx-5 sm:mx-32 xs:px-32 w-full sm:w-[40%] my-7 text-base xs:text-xl md:text-2xl text-white">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Suscipit voluptatibus vero est officiis quisquam hic sint deleniti
                    cum tempore atque autem temporibus unde numquam repudiandae,
                    recusandae laudantium tempora ratione distinctio!.
                </p>
            </div>
        </li>

        </ul>
        
        <div class="absolute px-5 flex h-full w-full top-0 left-0">
            <div class="my-auto w-full flex justify-between">
                <button onclick="prev()" class="bg-white p-3 rounded-full bg-opacity-80 shadow-lg">
                    <span class="iconify text-3xl text-gray-800" data-icon="material-symbols:arrow-circle-left-outline"></span>
                </button>

                <button onclick="next()" class="bg-white p-3 rounded-full bg-opacity-80 shadow-lg">
                    <span class="iconify text-3xl text-gray-800" data-icon="material-symbols:arrow-circle-right-outline-rounded"></span>
                </button>
            </div>
        </div>
    </div>
</section>

<script>
    currentIndex = 1;

    sliderElement = document.getElementById('slider');

    totalSlides = sliderElement.childElementCount;
    console.log(totalSlides);

    function next() {
        if( currentIndex < totalSlides ){
            currentIndex++;
            showSlide();
        }
    }

    function prev() {
        if( totalSlides > 1 ){
            currentIndex--;
            showSlide();
        }
    }

    function showSlide(){
        slides = document.getElementById('slider').getElementsByTagName('li')
        for( let index = 0; index < totalSlides; index++ )
        {
            const element = slides[index]

            if( currentIndex === index+1 )
            {
                element.classList.remove('hidden')
            } else{
                element.classList.add('hidden')
            }
        }
    }
</script>