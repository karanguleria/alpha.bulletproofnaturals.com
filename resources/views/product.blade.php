 @extends('layout.master')
 @section('title')
 Horny Goat Max - Libido Booster
 @endsection
 @section('content')
 <x-global.header />
<style>
    .splide__arrow--prev {
    left: -1em;
}
.splide__arrow--next {
    right: -1em;
}
#main-slider-list .splide__slide{
        padding:0 7%;
    }
@media (max-width: 480px) {
    .splide__arrow--prev {
        left: 1em; 
    }
    .splide__arrow--next {
        right: 1em; 
    }
 
}
</style>
 <section class="py-2 border-t border-gray-200">
     <div class="container">
         <ul class="flex flex-row font-semibold">
             <li><a class="pl-3 text-dark hover:text-primary-400" href="{{ route('index') }}">Home <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 inline-block">
  <path fillRule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clipRule="evenodd" />
</svg> </a></li>
             <li class="text-gray-400">Product</li>
         </ul>
     </div>
 </section>

 @php
 $varentId = base64_decode(request()->route('varienId'));
 if(request()->route('varienId') == '3-mega-bottles'):
 $varentId = 4;
 elseif (request()->route('varienId') == '1-mega-bottle'):
 $varentId = 2;
 elseif (request()->route('varienId') == '3-regular-bottles'):
 $varentId = 3;
 else:
 $varentId = 1;
 endif;

 @endphp
 {{-- @include('partials.success-error') --}}
 @if(@$productVarients)
 @foreach($productVarients as $productVarient)
 @php
 $lastVarientId = $productVarient->id ;
 $lastVarientPrice = $productVarient->price ;
 $lastVarientTotalPrice = $productVarient->total_price ;
 $lastVarientMonths = $productVarient->months ;
 $lastVarienttablets = $productVarient->tablets ;
 @endphp
 @endforeach
 @endif
 <section class="mb-10 py-10">
     <div class="container">
         <div class="block gap-6 sm:grid sm:gap-6 sm:grid-cols-7">
             <div class="col-span-3">
                 <div id="main-slider" class="splide" data-splide='{"type":"loop","pagination":false}'>
                     <div class="splide__track">
                         <ul class="splide__list">
                             <li class="splide__slide">
                                 <img class="w-full" src="{{Storage::url($product->image)}}" alt="How to increase Libido" title="how to increase libido" />
                             </li>
                             @if ($images)
                             @php
                             $images_alt = array("sex life", "best supplements for libido", "supplements for libido", "libido booster","maca root","low libido","larginine");
                             $images_title = array("Sex Life","Best Supplements for Libido","Supplements for Libido","Libido Booster","Maca Root","Low Libido","Larginine");
                             @endphp
                             @foreach ($images as $image)

                             <li class="splide__slide">
                                 <img class="w-full" src="{{Storage::url($image->path)}}" alt="{{$image->alt}}" title="{{$image->title}}" />
                                 {{-- <img class="w-full" src="{{Storage::url($image->path)}}" alt="" title="" />--}}
                             </li>
                             @endforeach
                             @endif
                             @if($product->vedios)
                             <div id="slide-video" class="splide__slide">
                                 <video width="600px" id="theVideo">
                                     <source src="{{ $product->vedios }}" />
                                 </video>
                             </div>
                             @endif
                         </ul>
                     </div>
                 </div>

                 <ul id="thumbnails" class="thumbnails flex flex-row">
                     <li class="thumbnail p-4">
                         <img src="{{Storage::url($product->image)}}" alt="How to increase Libido" title="how to increase libido" />
                     </li>
                     @if ($images)

                     @foreach ($images as $image)
                     <li class="thumbnail p-4">
                         <img src="{{Storage::url($image->path)}}" alt="{{Storage::url($product->alt)}}" title="{{Storage::url($product->alt)}}">
                         {{-- <img src="{{ $image }}" alt="{{ @$images_alt[$key] }}" title="{{ @$images_title[$key] }}"> --}}
                     </li>
                     @endforeach
                     @endif
                     @if($product->vedio_image)
                     <li class="thumbnail p-4">
                         <img class="img-fluid" src="{{ url('storage/'.$product->vedio_image) }}" />
                     </li>
                     @endif
                 </ul>
             </div>
             <div class="col-span-4 px-4 sm:px-0">
                 <h2 class="font-black text-2xl sm:text-4xl">{{ $product->name }} - <span id="total-caps">90 Capsules</span></h2>
                 @php
                 $reviews = App\Models\Review::where('product_id',$product->id)->where('status','Approved')->orderBy('id', 'desc')->get();
                 $review_count = App\Models\Review::where('product_id',$product->id)->where('status','Approved')->orderBy('id', 'desc')->count();
                 $avg_rating = App\Models\Review::where('product_id',$product->id)->where('status','Approved')->avg('rating');
                 $avg_rating_1 = App\Models\Review::where('product_id',$product->id)->where('status','Approved')->where('rating',1)->count();
                 $avg_rating_2 = App\Models\Review::where('product_id',$product->id)->where('status','Approved')->where('rating',2)->count();
                 $avg_rating_3 = App\Models\Review::where('product_id',$product->id)->where('status','Approved')->where('rating',3)->count();
                 $avg_rating_4 = App\Models\Review::where('product_id',$product->id)->where('status','Approved')->where('rating',4)->count();
                 $avg_rating_5 = App\Models\Review::where('product_id',$product->id)->where('status','Approved')->where('rating',5)->count();
                 $avg_rat = round($avg_rating,2) ;
                 @endphp
                 <div class="pt-2 text-center flex flex-row">
                     <div class="flex items-center justify-center text-primary-400">
                         @php for($i=1; $i<$avg_rat; $i++){ @endphp 
                            <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                             <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                             <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                             </svg>
                                @php } @endphp

                                <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M288 376.4l.1-.1 26.4 14.1 85.2 45.5-16.5-97.6-4.8-28.7 20.7-20.5 70.1-69.3-96.1-14.2-29.3-4.3-12.9-26.6L288.1 86.9l-.1 .3V376.4zm175.1 98.3c2 12-3 24.2-12.9 31.3s-23 8-33.8 2.3L288.1 439.8 159.8 508.3C149 514 135.9 513.1 126 506s-14.9-19.3-12.9-31.3L137.8 329 33.6 225.9c-8.6-8.5-11.7-21.2-7.9-32.7s13.7-19.9 25.7-21.7L195 150.3 259.4 18c5.4-11 16.5-18 28.8-18s23.4 7 28.8 18l64.3 132.3 143.6 21.2c12 1.8 22 10.2 25.7 21.7s.7 24.2-7.9 32.7L438.5 329l24.6 145.7z"/></svg>
                          
                     </div>
                     <strong><?php echo "&nbsp;" . $avg_rat . " out of 5"; ?></strong>
                 </div>
                 <div>
                     <p><?php echo $review_count; ?> global ratings</p>
                 </div>
                 <div class="pt-8">
                     <p>{{ strip_tags($product->details) }}</p>
                 </div>
                 <div class="mt-4">
                     <h3 class="font-black text-lg mb-2">Select an option:</h3>
                     @if(@$lastVarientPrice)
                     <div class="grid grid-cols-2 gap-2 sm:gap-4">
                         @foreach($productVarients as $productVarient)
                         <div class="relative w-full h-90 sm:h-70">
                             <input class="absolute w-full h-full left-0 top-0 opacity-0 z-20 varientRdo" type="radio" data-price="{{ $productVarient->price }}" data-tablets="{{ $productVarient->tablets }}" data-months="{{ $productVarient->months }}" data-total_price="{{ $productVarient->total_price }}" name="radio" value="{{ $productVarient->id }}" {{ (@$productVarient->id == $varentId) ? 'checked' : '' }}>
                             <label class="text-[15px] label-checked:bg-primary-400 label-checked:text-white label-checked:border-primary-400 absolute w-full h-full z-10 bg-gray-200 border border-gray-300 text-gray-500 p-2">
                                 {{$productVarient->name}} - {{ $productVarient->tablets }} capsules for ${{$productVarient->total_price}} (${{ $productVarient->capsule }}/Capsule) {{$productVarient->save_text}}</label>
                         </div>
                         @php $varientLast = $productVarient->id @endphp
                         @endforeach
                     </div>
                     @endif
                 </div>
                 <div class="flex items-center justify-between my-5">
                     <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                         <button type="button" class="quantity-left-minus border border-gray-200 rounded-l inline-block px-6 py-2.5 bg-gray-100 text-dark font-medium text-md leading-tight uppercase hover:bg-gray-200 focus:bg-gray-300 focus:outline-none focus:ring-0 active:bg-gray-300 transition duration-150 ease-in-out">-</button>
                         <input id="quantity" type="button" class="border border-gray-200 inline-block px-6 py-2.5 bg-white text-primary-400 font-medium text-md leading-tight uppercase transition duration-150 ease-in-out" onkeypress="return false;" value="1" min="1" max="1000" />
                         <button type="button" class="quantity-right-plus border border-gray-200 rounded-r inline-block px-6 py-2.5 bg-gray-100 text-dark font-medium text-md leading-tight uppercase hover:bg-gray-200 focus:bg-gray-300 focus:outline-none focus:ring-0 active:bg-gray-300 transition duration-150 ease-in-out">+</button>
                     </div>
                     <span class="text-black font-black text-2xl total_price uppercase">Total: $59.99</span>
                 </div>
                 <div class="space-x-2">
                     {{-- <button type="button"
                             class="w-full px-6 py-3 bg-primary-400 text-white font-md text-md leading-tight uppercase rounded shadow-md hover:bg-primary-500 hover:shadow-lg focus:bg-primary-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-500 active:shadow-lg transition duration-150 ease-in-out">Add
                             to cart</button> --}}
                     <form action="{{ route('checkout.store', $product) }}" method="POST">
                         {{ csrf_field() }}
                         <button type="submit" class="w-full px-6 py-4 bg-primary-400 text-white font-md font-bold text-md leading-tight uppercase rounded shadow-md hover:bg-primary-500 hover:shadow-lg focus:bg-primary-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-500 active:shadow-lg transition duration-150 ease-in-out">add to cart</button>
                         <input type="hidden" class="varient-selected" name="varient" value="{{ $varentId }}">
                         <input type="hidden" name="quantityCount" id="quantityCount" value="1">
                     </form>
                 </div>
             </div>
         </div>
         <x-product.tabs :product="$product" />
     </div>
 </section>

 <style type="text/css">
     .splide__slide {
         opacity: 0.3;
     }

     .splide__slide.is-active {
         opacity: 1;
     }
 </style>

 {{-- <x-product.content /> --}}
 {{-- <x-home.subscribe /> --}}
 <x-global.footer />
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script>
     $(document).ready(function() {
         var selectedVar = $(".varientRdo:checked").val();
         // var total_count = $("#quantity").val();
         console.log(selectedVar);
         if (selectedVar == null) {
             $('.varientRdo').attr('checked', true);
             var checkVal = $(".varientRdo:checked").val();
             $('.varient-selected').val(checkVal);
             $(".total_price").html("total: $" + Number($(".varientRdo:checked").data('total_price')).toFixed(2));
             $(".price-time").html("<span>$" + Number($(".varientRdo:checked").data('total_price')).toFixed(2) + "</span> for " + $(".varientRdo:checked").data('months') + " Month");
             $("#total-caps").html($(".varientRdo:checked").data('tablets') + " Capsules");
         } else {
             $(".total_price").html("total: $" + Number($(".varientRdo:checked").data('total_price')).toFixed(2));
             $(".price-time").html("<span>$" + Number($(".varientRdo:checked").data('total_price')).toFixed(2) + "</span> for " + $(".varientRdo:checked").data('months') + " Month");
             $("#total-caps").html($(".varientRdo:checked").data('tablets') + " Capsules");
             $('.varient-selected').val(selectedVar);
         }
         // change on click of plus minus 
         $(".quantity-right-plus").click(function(e) {
             e.preventDefault();
             var n = parseInt($(this).siblings("input").val());
             $(this).siblings("input").val(n + 1), $(this).siblings("input").trigger("change")
         });
         $(".quantity-left-minus").click(function(e) {
             e.preventDefault();
             var n = parseInt($(this).siblings("input").val());
             n > 1 && ($(this).siblings("input").val(n - 1), $(this).siblings("input").trigger("change"))
         });

         // on change of quanity change the values
         $('#quantity').on('change', function() {
             var get_total_count = $("#quantity").val();
             $('#quantityCount').val(get_total_count);
             var price_total = $(".varientRdo:checked").data('total_price');
             var price_count = (get_total_count * price_total).toFixed(2);
             $(".total_price").html("Total: $" + formatNumber(price_count));
         });

         // Function to format the numerbers
         function formatNumber(num) {
             return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
         }

         // variant on change updated value
         $('.varientRdo').on('change', function() {
             var getSeletedVal = $(".varientRdo:checked").val();
             $('.varient-selected').val(getSeletedVal);
             $("#quantity").val(1);
             $('#quantityCount').val(1);
             $(this).closest("div").find(".option").removeClass("selected");
             if ($(this).is(':checked')) {
                 $(this).closest(".option").addClass("selected");
             } else
                 $(this).closest(".option").removeClass("selected");
             $("#quantity").val(1);
             $('#quantityCount').val(1);
             $(".total_price").html("Total: $" + Number($(".varientRdo:checked").data('total_price')).toFixed(2));
             $("#total-caps").html($(".varientRdo:checked").data('tablets') + " Capsules");
         });
         var comment_length = $(".comments_wrap_start").length;
         //console.log(comment_length);
         $(".comments_wrap_start").slice(0, 10).show();
         if ($(".comments_wrap_start:hidden").length != 0) {
             $("#loadMore").show();
         }
         $("#loadMore").on('click', function(e) {
             e.preventDefault();
             $(".comments_wrap_start:hidden").slice(0, 10).slideDown();
             if ($(".comments_wrap_start:hidden").length == 0) {
                 $("#loadMore").fadeOut('slow');
             }
         });


     });
 </script>
 <script>
     var isChecked = 0;
     $('#custom-review').on('click', function() {
         if (isChecked) {
             $(this).prop('checked', false);
             $('#review-add-custom').css('display', 'none');
             isChecked = 0;
         } else {
             $(this).prop('checked', true);
             $('#review-add-custom').css('display', 'block');
             $('html, body').animate({
                 scrollTop: ($("#review-add-custom").offset().top - $('.nav-header-new').height() - 20)

             }, 1000);
             isChecked = 1;
         }
     });
 </script>

 <script>
     var radioValue = $("input[name='ratings']:checked").val();
     if (radioValue == 5) {
         $("#radio4").addClass("active-d");
     }
 </script>

 <script>
     function myFunction() {
         $('#reviewed').trigger('click');
         $('html, body').animate({
             scrollTop: ($("#reviewed").offset().top - $('.nav-header-new').height() - 20)
         }, 1000);
     }
 </script>
 @endsection
