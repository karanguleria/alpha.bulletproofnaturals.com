 <style>
  .splide__arrow:hover svg{
    fill: #a87c00; 
  }
  .splide__pagination{
    display:none;
  }
  @media (max-width: 480px) {
    .splide__arrow{
      width: 1.5rem;
      height: 1.5rem;
      }
      .splide__arrow svg{
        width: 0.7rem;
        height: 0.7rem;
      }
    }
 </style>
 <section id="testimonials" class="my-14 pt-20">
      <div class="container">
        <div class="flex justify-center">
          <div class="w-full">
            <h2 class="font-black text-dark text-2xl sm:text-4xl text-center px-4 sm:px0">Real Results from Our Customers </h2>
          </div>
        </div>
        <div id="testimonials-carousel" class="splide pb-4" aria-label="Beautiful Images" data-splide='{"autoplay":"true","speed":1000}'>
          <div class="splide__track">
            <ul class="splide__list">
              @forelse ($testimonials as $item) 
              <li class="splide__slide md:px-4" data-splide-interval="2000">
                <div class="grid grid-cols-6 px-12">
                  <div class="col-start-2 col-span-4 py-4">
                    <div class="p-2 text-center">
                      <div class="flex items-center justify-center text-yellow-500">
                        @php for($i =1 ; $i<= $item->rating ; $i++){ @endphp
                                     <svg class="w-4 h-4 sm:w-6 sm:h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                      </svg>
                        @php }  @endphp
                      </div>
                    </div>
                    @php
                    $name = @$item->name;
                    $separate = explode(" ", $name);
                    $last = array_pop($separate);
                    $finalname = implode(' ', $separate)." ".$last[0].".";
                    @endphp
                    <div class="mt-4 md:px-4">
                      <p class="text-gray-500 md:px-4"><em>
                          {!! strip_tags($item->description) !!}
                        </em></p>
                      <p class="mt-8 text-lg font-semibold text-center">{{ @$finalname }}<span class="w-full block text-primary-400">{{ $item->tag_line }}</span></p>
                    </div>
                  </div>
                </div>

              </li>
               @empty
                    <p>NO data found !</p>
                @endforelse
             
            </ul>
          </div>          
        </div>
      </div>  
      <div class="container">
      <div class="sm:flex sm:justify-center sm:items-center my-4">
            <img class="w-full" src="images/line.png" alt="Line">
          </div>
      </div>
    </section>
