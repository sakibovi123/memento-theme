<section class="" id="home-banner">
    <div class="relative">
        <ul id="slider">
            <li class="h-[80vh] relative">
                <img class="h-full w-full object-fill" src="assets/images/banner-1.jpg" alt="">
                <div class="absolute top-[30%] left-0 h-full w-full flex-col items-center justify-center">
                    <h2 class="text-xl sm:text-6xl font-bold text-white my-auto w-[100%] sm:w-[50%] px-32 text-center sm:text-left">
                        Creating the Atelier of Dreams Creating the Atelier.
                    </h2>
                    <p class="px-32 w-full sm:w-[50%] my-7 text-xl text-white">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Suscipit voluptatibus vero est officiis quisquam hic sint deleniti
                          cum tempore atque autem temporibus unde numquam repudiandae,
                           recusandae laudantium tempora ratione distinctio!.
                    </p>
                </div>
            </li>

            <li class="h-[80vh] relative hidden">
                <img class="h-full w-full object-fill" src="assets/images/banner-2.jpg" alt="">
                <div class="absolute top-[30%] left-0 h-full w-full flex-col items-center justify-center">
                    <h2 class="text-xl sm:text-6xl font-bold text-white my-auto w-[100%] sm:w-[50%] px-32 text-center sm:text-left">
                        Creating the Atelier of Dreams Creating the Atelier.
                    </h2>
                    <p class="px-32 w-full sm:w-[50%] my-7 text-xl text-white">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Suscipit voluptatibus vero est officiis quisquam hic sint deleniti
                          cum tempore atque autem temporibus unde numquam repudiandae,
                           recusandae laudantium tempora ratione distinctio!.
                    </p>
                </div>
            </li>

            <li class="h-[80vh] relative hidden">
                <img class="h-full w-full object-fill" src="assets/images/banner-3.jpg" alt="">
                <div class="absolute top-[30%] left-0 h-full w-full flex-col items-center justify-center">
                    <h2 class="text-xl sm:text-6xl font-bold text-white my-auto w-[100%] sm:w-[50%] px-32 text-center sm:text-left">
                        Creating the Atelier of Dreams Creating the Atelier.
                    </h2>
                    <p class="px-32 w-full sm:w-[50%] my-7 text-xl text-white">
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
                <button onclick="prev()" class="bg-white p-3 rounded-full bg-oopacity-80 shadow-lg">
                    <span class="iconify text-2xl" data-icon="material-symbols:arrow-circle-left-outline"></span>
                </button>

                <button onclick="next()" class="bg-white p-3 rounded-full bg-oopacity-80 shadow-lg">
                    <span class="iconify text-2xl" data-icon="material-symbols:arrow-circle-right-outline-rounded"></span>
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