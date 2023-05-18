<style>
  .product-items .group:last-child .group div>a{
    background-color: rgb(167 124 0 / var(--tw-bg-opacity));
  }
  </style>
<section class="mb-2 pb-2 md:pb-10 md:mb-8">
  <div class="container">
    <div class="sm:grid sm:grid-cols-1 gap-2">
      <div class="col-span-1 mb-8">
        <h2 class="font-black text-2xl sm:text-4xl text-dark text-center px-4 sm:px-0">Maximize your performance today!</h2>
        <p class="font-black mt-4 sm:mt-0 text-dark text-lg sm:text-2xl text-center">Select the option that works best for you.</p>
      </div>
    </div>
    <div class="w-full mt-4">
      <div class="sm:grid sm:grid-cols-4 gap-2 product-items">
        @forelse ($productVariant as $item)
        @php
        $getProduct =\App\Models\Product::where('id',$item->product_id)->first();
        @endphp
        <div class="text-center px-5 mb-10 sm:mb-0 group {{ (@$item->best_pack) ? "best-pack" : "" }}">
          <div class="group-last:border-primary-400 text-center border border-t-8 border-black pb-9 sm:pb-0 pt-9 relative hover:border-primary-400 ease-in duration-200 cursor-pointer group">
            @if(@$item->best_pack)
            <p class="bg-primary-400 text-white font-bold py-1 text-lg text-center absolute w-full top-0 left-0">Best Value</p>
            @endif 
            <p class="text-2xl font-black py-2 text-dark">{{ $item->name }}</p>
            <p class="text-2xl font-black text-dark"> ({{ $item->tablets }} Capsules)</p>
            <p class="text-2xl font-black text-dark"> Promotional Price:</p>            
            <p class="text-5xl text-primary-400 font-black py-2">${{ $item->total_price }}</p>
            <p class="text-2xl font-black text-dark"> (${{ $item->capsule }}/capsule)</p>
            <p class="text-base py-4 sm:py-8 text-gray-500 font-black">with Free Delivery</p>
            <div class="w-full text-center absolute bottom-[-18px] left-0">
              <a href="{{ route('product.show', ['product' => $getProduct->slug,'varienId' =>($item->slug)]) }}" class="uppercase bg-gray-400 group-hover:bg-primary-400 ease-in duration-200 rounded-full text-xl px-5 py-2.5 text-center text-white">order now</a>
            </div>
          </div>
        </div>
        @empty
        @endforelse
      </div>
    </div>
  </div>
</section>
