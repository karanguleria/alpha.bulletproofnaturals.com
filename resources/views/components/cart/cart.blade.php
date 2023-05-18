
<section class="py-2 border-t border-gray-200">
  <div class="container">
    <ul class="flex flex-row font-semibold">
      <li><a class="pl-3 text-dark hover:text-primary-400" href="{{url('/')}}">Home <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 inline-block">
  <path fillRule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clipRule="evenodd" />
</svg> </a></li>
      <li class="text-gray-400">Cart</li>
    </ul>
  </div>
</section>
<section class="mb-10">
  <div class="container-full">
    <div class="grid grid-cols-1">
      <div class=" text-center py-4 bg-gray-100">
        <h1 class="text-dark text-3xl font-black uppercase">CART TOTAL: $59.99</h1>
        <p>Shipping Free</p>

      </div>
    </div>
  </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="overflow-x-auto relative">
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th colspan="2" scope="col" class="py-3 px-6">
              Product image
            </th>

            <th scope="col" class="py-3 px-6">
              QUANTITY
            </th>
            <th scope="col" class="py-3 px-6">
              UNIT PRICE
            </th>

          </tr>
        </thead>
        @foreach(Cart::instance('default')->content() as $item)
        <tbody>
          <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              <img class="w-[100px]" src="/images/hgmlatest.png" alt="product" />
            </th>
            <td class="py-4 px-6">
              <h3 class="text-dark text-2xl font-semibold uppercase">{{ $item->options->variant_name }} Pack - {{ $item->options->varient_tablets }} Tablets Only ${{ number_format(preg_replace('/\s+/', '', $item->subtotal), 2, '.', ',') }}
            </td>
            <td class="py-4 px-6">
              <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                <button type="button" class="border border-gray-200 rounded-l inline-block px-6 py-2.5 bg-gray-100 text-dark font-medium text-md leading-tight uppercase hover:bg-gray-200 focus:bg-gray-300 focus:outline-none focus:ring-0 active:bg-gray-300 transition duration-150 ease-in-out">-</button>
                <button type="button" class="border border-gray-200 inline-block px-6 py-2.5 bg-white text-dark font-medium text-md leading-tight uppercase transition duration-150 ease-in-out">{{ $item->qty }}</button>
                <button type="button" class="border border-gray-200 rounded-r inline-block px-6 py-2.5 bg-gray-100 text-dark font-medium text-md leading-tight uppercase hover:bg-gray-200 focus:bg-gray-300 focus:outline-none focus:ring-0 active:bg-gray-300 transition duration-150 ease-in-out">+</button>
              </div>
            </td>
            <td class="py-4 px-6">
              ${{ number_format(preg_replace('/\s+/', '', $item->subtotal), 2, '.', ',') }}
            </td>
          </tr>
          <tr class="border-0">
            <th scope="py-2">

            </th>
            <td class="py-2 px-6">

            </td>
            <td class="py-2 px-6">

            </td>
            <td class="py-2 px-6 text-xl font-extrabold">
              <a href="#" class="uppercase text-gray-400 text-sm font-normal">remove</a>
            </td>
          </tr>
          @endforeach

          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-t">
            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">

            </th>
            <td class="py-4 px-6">

            </td>
            <td class="py-4 px-6 text-xl">
              <h4>Total:</h4>
            </td>
            <td class="py-4 px-6 text-xl font-extrabold">
              <h4>{{preg_replace('/\s+/', '', presentPrice($newSubtotal))}}</h4>
            </td>
          </tr>



        </tbody>
      </table>
    </div>

  </div>
  <div class="container-full">
    <div class="bg-gray-100 text-center">
      <a class="inline-block py-5 " href="#"><img src="/images/paypal-new.png" alt="paypal" /></a>
    </div>
  </div>
</section>
