<header x-data="{showMenu: false, scrolledFromTop: false}" x-init="window.pageYOffset > 80 ? scrolledFromTop = true : scrolledFromTop = false" @scroll.window="window.pageYOffset > 80 ? scrolledFromTop = true : scrolledFromTop = false">
   
   <nav class="bg-white z-50 top-0 left-0 w-full transition-all duration-200" :class="{'sticky': !scrolledFromTop, 'fixed': scrolledFromTop, 'border-b': scrolledFromTop}">
   <div class="bg-black text-white px-4 p-1 font-black sm:font-bold text-xs sm:text-sm text-center">
      <div class="container">
         <p>FREE SHIPPING ON ALL ORDERS |
            <a class="hover:underline ease-in duration-200" href="https://www.getdrip.com/forms/701515030/submissions/new" data-drip-show-form="701515030">SUBSCRIBE &
               SAVE $10!</a>
               {{--<a class="hover:underline ease-in duration-200" href="https://www.getdrip.com/forms/312870547/submissions/new" data-drip-show-form="312870547">SUBSCRIBE &
               SAVE $10!</a>--}} 
         </p>
      </div>
   </div>   
   <div class="container py-2 px-4 sm:px-4 flex flex-wrap justify-between items-center" x-data="{showMenu : false}">
         <button @click="showMenu = !showMenu" class="inline-flex items-center py-2 ease-in duration-200 text-md text-dark md:hidden hover:bg-transparent focus:outline-none focus:bg-transparent dark:text-gray-400 " type="button" aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Open main menu</span>
            <svg class="w-10 h-10" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
         </button>
         <a href="{{ route('index') }}" class="flex items-center">
            <img src="{{asset('/images/logo.png')}}" class="mr-3 h-8 sm:h-[46px]" alt="Bulletproof Naturals Logo" />
         </a>
         <span class="md:hidden">
            <a href="{{ (Cart::instance('default')->count()) ? route('cart.index') : route('product.show',['product'=>'horny-goat-max','varienId'=>'1-bottle']) }}" class="block py-3 sm:py-0 px-1 text-base uppercase font-black text-gray-700 hover:text-primary-400 ease-in duration-200 relative"><img src="/images/cart.png" alt="cart" /><span class="animate-ping w-[20px] h-[20px] absolute top-[6px] sm:top-[-8px] right-[-6px] sm:right-[4px] rounded-full bg-dark opacity-75"></span><span class="w-[20px] h-[20px] bg-dark text-sm rounded-full text-white leading-5 text-center absolute top-[6px] sm:top-[-8px] right-[-6px] sm:right-[4px]"><?php echo Cart::instance('default')->count(); ?></span></a>

         </span>
         <div class="w-full md:block md:w-auto transition duration-200" id="navbar-default" :class="{ 'transition-all duration-200 block z-10 absolute top-24 left-0 border-b bg-white w-full px-2': showMenu, 'hidden': !showMenu}" id="navbar-main" x-cloak>
            <ul class="flex flex-col items-left p-4 mt-4 md:flex-row md:space-x-4 md:mt-0 md:text-sm md:font-medium md:border-0 text-center">
               <li>
                  <a href="{{ route('index') }}#ingredients-wrap" class="block py-3 sm:py-0 px-1 text-base uppercase font-black text-gray-700 hover:text-primary-400 ease-in duration-200">About</a>
               </li>
               <li>
                  <a href="{{ route('index') }}#faq" class="block py-3 sm:py-0 px-1 text-base uppercase font-black text-gray-700 hover:text-primary-400 ease-in duration-200">Faq</a>
               </li>
               <li>
                  <a href="{{ route('index') }}#testimonials" class="block py-3 sm:py-0 px-1 text-base uppercase font-black text-gray-700 hover:text-primary-400 ease-in duration-200">Testimonials</a>
               </li>
               <li>
                  <a href="{{ route('product.show',['product'=>'horny-goat-max','varienId'=>'1-bottle']) }}" class="block py-3 sm:py-0 px-1 text-base uppercase font-black text-gray-700 hover:text-primary-400 ease-in duration-200">Product</a>
               </li>
               <li>
                  <a href="https://bulletproofnaturals.com/blog" class="block py-3 sm:py-0 px-1 text-base uppercase font-black text-gray-700 hover:text-primary-400 ease-in duration-200">Blog</a>
               </li>
               <li class="hidden md:block">
                  <a href="{{ (Cart::instance('default')->count()) ? route('cart.index') : route('product.show',['product'=>'horny-goat-max','varienId'=>'1-bottle']) }}" class="block py-3 sm:py-0 px-1 text-base uppercase font-black text-gray-700 hover:text-primary-400 ease-in duration-200 relative"><img src="/images/cart.png" alt="cart" /><span class="animate-ping w-[20px] h-[20px] absolute top-[6px] sm:top-[-8px] right-[-6px] sm:right-[4px] rounded-full bg-dark opacity-75"></span><span class="w-[20px] h-[20px] bg-dark text-sm rounded-full text-white leading-5 text-center absolute top-[6px] sm:top-[-8px] right-[-6px] sm:right-[4px]"><?php echo Cart::instance('default')->count(); ?></span></a>
               </li>
            </ul>
         </div>
      </div>
   </nav>
</header>
