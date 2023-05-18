    <style>
      .bg-hero {
        overflow-x: hidden;
      }

      .slider-image {
        margin-right: -50px;
        margin-top: 40px;
      }

      @media (max-width: 480px) {
        .slider-image {
          margin-right: 0px;
          margin-top: 0px;
        }

      }
    </style>
    <section class="bg-hero banner bg-no-repeat bg-cover h-96 sm:h-auto relative 
    before:absolute before:content-[''] before:bg-black before:w-full before:h-full before:top-0 before:left-0 before:opacity-40 sm:before:opacity-10 ">
      <div class="container h-full">
        <div class="sm:grid sm:grid-cols-2 gap-0 grid h-full items-end w-full">
          <div class="sm:col-span-1 relative h-full flex items-center justify-end">
            <div class="slider-image text-right">
              {{--<img class="hidden sm:inline-block h-[100px] sm:h-[220px] " src="/images/offer-sitewide.png" alt="" />--}}
            </div>
          </div>
          <div class="sm:col-span-1 flex justify-end items-end grid-cols-2 text-center sm:block relative sm:mt-24 sm:mb-56">
            <div class="pt-3 pb-2 px-2 sm:p-0">
              {{--<h1 class="text-white mb-0 font-bold capitalize text-base sm:text-3xl text-center">Take Your Libido To</span></h1>--}}
              <h2 class="text-white mb-8 font-bold capitalize text-xl sm:text-3xl text-center">Achieve Optimal Sexual Performance with Horny Goat Max - Specially Formulated for Men Over 40!</h2>
              {{--<h2 class="text-white mb-4 sm:mb-6 font-bold capitalize text-base sm:text-3xl text-center">Formula On The Market!</span></h2>--}}
              <a href="{{ route('product.show',['product'=>'horny-goat-max','varienId'=>'1-bottle']) }}" class="inline-block uppercase bg-primary-400 hover:bg-primary-500  rounded-full text-sm sm:text-2xl px-5 py-2.5 ease-in duration-200 text-center text-white">Experience the difference today</a>
            </div>
            <div class="block">
              {{--<img class="relative -right-4 h-32 sm:max-w-md sm:h-auto inline-block" src="/images/slider-banner.png" alt="image description">--}}
            </div>
          </div>
        </div>
      </div>
    </section>
