// window.addEventListener('DOMContentLoaded', function() {
//     // your JavaScript code here
//     currentIndex = 1;

//     sliderElement = document.getElementById('slider');

//     totalSlides = sliderElement.childElementCount;
//     console.log(totalSlides);

//     function next() {
//         if( currentIndex < totalSlides ){
//             currentIndex++;
//             showSlide();
//         }
//     }

//     function prev() {
//         if( totalSlides > 1 ){
//             currentIndex--;
//             showSlide();
//         }
//     }

//     function showSlide(){
//         slides = document.getElementById('slider').getElementsByTagName('li')
//         for( let index = 0; index < totalSlides; index++ )
//         {
//             const element = slides[index]

//             if( currentIndex === index+1 )
//             {
//                 element.classList.remove('hidden')
//             } else{
//                 element.classList.add('hidden')
//             }
//         }
//     }
//   });
