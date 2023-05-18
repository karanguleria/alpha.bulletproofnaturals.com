@extends('layout.master')
@section('title')
Best Natural Supplements to Boost Libido
@endsection
@section('content')
<x-global.header />

<!--Start Checkout details -->
@php
$states = array('AK' => 'Alabama','AK' => 'Alaska','AZ' => 'Arizona','AR' => 'Arkansas','CA'=> 'California',
'CO' => 'Colorado','CT' => 'Connecticut','DE' => 'Delaware','DC'=>'District Of Columbia','FL' => 'Florida',
'GA'=> 'Georgia','HI' => 'Hawaii','ID'=> 'Idaho','IN' => 'Indiana','IA'=> 'Iowa','KS'=> 'Kansas','KY'=> 'Kentucky',
'LA'=> 'Louisiana','ME' => 'Maine','MD' => 'Maryland','MA'=> 'Massachusetts','MI' => 'Michigan','MN' => 'Minnesota',
'MS'=> 'Mississippi','MO'=> 'Missouri','MT'=> 'Montana','NE'=> 'Nebraska','NV'=> 'Nevada','NH'=> 'New Hampshire','NJ'=> 'New Jersey','NM'=> 'New Mexico'
,'NJ'=> 'New Jersey','NM'=> 'New Mexico','NY'=> 'New York','NC'=> 'North Carolina','ND'=> 'North Dakota','OH'=> 'Ohio',
'OK' => 'Oklahoma','OR' => 'Oregon','PA' => 'Pennsylvania','RI' => 'Rhode Island','SC'=> 'South Carolina','SD'=> 'South Dakota','TN'=> 'Tennessee','TX'=> 'Texas',
'UT'=> 'Utah','VT'=> 'Vermont','VA'=> 'Virginia','WA'=> 'Washington','WV'=> 'West Virginia','WI'=> 'Wisconsin','WY'=> 'Wyoming'
);

@endphp
<script src="https://cdn.paddle.com/paddle/paddle.js"></script>
<section class="py-2 border-t border-gray-200">
    <div class="container">
        <ul class="flex flex-row font-semibold">
            <li><a class="pr-1 text-dark hover:text-primary-400" href="{{url('/')}}">Home /</a></li>
            <li class="text-gray-400">Checkout</li>
        </ul>
    </div>
</section>
<form id="paymentForm" method="post" action="{{route('buyer.create')}}">
    {{ csrf_field() }}
    <section class="py-10">
        <div class="container">
            <div class="grid gap-4 sm:gap-4 sm:grid-cols-3 px-4 sm:px-0">
                <div class="col-span-1 sm:col-span-2">
                    <h3 class="font-black text-lg">Customer Information</h3>
                    <h6 class="mt-2 font-black" id="billing-pay-title">Billing Details</h6>
                    <div class="mt-2">
                        <input class="block w-full px-2 py-2 bg-white border border-black-300 rounded-md text-md shadow-sm placeholder:text-slate-600 focus:outline-none focus:border-primary-500 focus:ring-1 focus:ring-primary-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-black-500 invalid:text-primary-600 focus:invalid:border-primary-500 focus:invalid:ring-primary-500" id="email" name="email" type="text" value="{{$buyer->email}}" placeholder="Email Address" aria-label="Email">
                        @error('email')
                        <div class="mt-2 peer-invalid:visible text-red-600 text-sm errorDiv" id="emailErr">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="inline-block mt-2 w-1/2 pr-1">
                        <input value="{{$buyer->fname}}" class="block w-full px-2 py-2 bg-white border border-black-300 rounded-md text-md shadow-sm placeholder:text-slate-600 focus:outline-none focus:border-primary-500 focus:ring-1 focus:ring-primary-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-black-500 invalid:text-primary-600 focus:invalid:border-primary-500 focus:invalid:ring-primary-500" id="name" name="fname" type="text" value="{{$buyer->fname}}" placeholder="First name" aria-label="first_name">
                        @error('fname')
                        <div class="mt-2 peer-invalid:visible text-red-600 text-sm errorDiv" id="FnameError">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                        <input value="{{$buyer->lname}}" class="block w-full px-2 py-2 bg-white border border-black-300 rounded-md text-md shadow-sm placeholder:text-slate-600 focus:outline-none focus:border-primary-500 focus:ring-1 focus:ring-primary-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-black-500 invalid:text-primary-600 focus:invalid:border-primary-500 focus:invalid:ring-primary-500" id="lname" name="lname" type="text" placeholder="Last name" value="{{$buyer->lname}}" aria-label="last_name">
                        @error('lname')
                        <div class="mt-2 peer-invalid:visible text-red-600 text-sm errorDiv" id="LnameError">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mt-2">
                        <input value="{{$buyer->street}}" class="block w-full px-2 py-2 bg-white border border-black-300 rounded-md text-md shadow-sm placeholder:text-slate-600 focus:outline-none focus:border-primary-500 focus:ring-1 focus:ring-primary-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-black-500 invalid:text-primary-600 focus:invalid:border-primary-500 focus:invalid:ring-primary-500" id="location" name="street" type="text" placeholder="Street address" aria-label="street_address" />
                        @error('street')
                        <div class="mt-2 peer-invalid:visible text-red-600 text-sm errorDiv" id="StreetError">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mt-2">
                        <input class="block w-full px-2 py-2 bg-white border border-black-300 rounded-md text-md shadow-sm placeholder:text-slate-600 focus:outline-none focus:border-primary-500 focus:ring-1 focus:ring-primary-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-black-500 invalid:text-primary-600 focus:invalid:border-primary-500 focus:invalid:ring-primary-500" id="apartment" name="apartment" type="text" placeholder="Apartment, suite, unit etc. (optional)" aria-label="apartment">
                    </div>
                    <div class="inline-block mt-2 w-1/3 pr-2">
                        <input value="{{$buyer->city}}" class="block w-full px-2 py-2 bg-white border border-black-300 rounded-md text-md shadow-sm placeholder:text-slate-600 focus:outline-none focus:border-primary-500 focus:ring-1 focus:ring-primary-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-black-500 invalid:text-primary-600 focus:invalid:border-primary-500 focus:invalid:ring-primary-500" id="city" name="city" type="text" placeholder="City" aria-label="City">
                        @error('city')
                        <div class="mt-2 peer-invalid:visible text-red-600 text-sm errorDiv" id="CityError">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="inline-block mt-2 -mx-1 pr-2 w-1/3">
                        <select id="province" name="state" class="block w-full px-2 py-2 bg-white border border-black-300 rounded-md text-md shadow-sm placeholder:text-slate-600 focus:outline-none focus:border-primary-500 focus:ring-1 focus:ring-primary-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-black-500 invalid:text-primary-600 focus:invalid:border-primary-500 focus:invalid:ring-primary-500">
                            <option selected="selected" disabled><strong>Select State</strong></option>
                            @foreach($states as $key=>$state_name)
                            <option {{ $buyer->state == $key ? 'selected' : '' }} value="{{$key}}">{{$state_name}}</option>
                            @endforeach
                        </select>
                        @error('state')
                        <div class="mt-2 peer-invalid:visible text-red-600 text-sm errorDiv" value="old('state')" id="StateError">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="inline-block mt-2 w-1/3">
                        <input value="{{$buyer->zip}}" class="block w-full px-2 py-2 bg-white border border-black-300 rounded-md text-md shadow-sm placeholder:text-slate-600 focus:outline-none focus:border-primary-500 focus:ring-1 focus:ring-primary-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-black-500 invalid:text-primary-600 focus:invalid:border-primary-500 focus:invalid:ring-primary-500" type="text" minlength="5" maxlength="5" onkeypress="return isNumberKey(this, event);" id="postalcode" name="zip" placeholder="Postcode / Zip" aria-label="postcode">
                        @error('zip')
                        <div class="mt-2 peer-invalid:visible text-red-600 text-sm errorDiv" id="ZipError">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mt-2">
                        <input value="{{$buyer->zip}}" class="block w-full px-2 py-2 bg-white border border-black-300 rounded-md text-md shadow-sm placeholder:text-slate-600 focus:outline-none focus:border-primary-500 focus:ring-1 focus:ring-primary-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-black-500 invalid:text-primary-600 focus:invalid:border-primary-500 focus:invalid:ring-primary-500" type="text" minlength="5" maxlength="10" onkeypress="return isNumberKey(this, event);" name="phone" placeholder="Phone" pattern=".{10}" title="Add 10 digit phone number">
                        @error('phone')
                        <div class="mt-2 peer-invalid:visible text-red-600 text-sm errorDiv" id="PhoneError">{{$message}}</div>
                        @enderror
                    </div>
                    {{--<div id="diff_address" class="different_info mt-4">
                        <input type="checkbox" id="different_check" name="different" class="w-4 h-4 text-primary-600 bg-gray-100 rounded border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" /> <span class="pl-3 mt-2 text-gray-800 font-black" onclick="myFunction()">Different Shipping Address</span>

                    </div>--}}
                    <div class="different_address" style="display: none;">
                        <div class="inline-block mt-2 w-1/2 pr-1">
                            <input class="block w-full px-2 py-2 bg-white border border-black-300 rounded-md text-md shadow-sm placeholder:text-slate-600 focus:outline-none focus:border-primary-500 focus:ring-1 focus:ring-primary-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-black-500 invalid:text-primary-600 focus:invalid:border-primary-500 focus:invalid:ring-primary-500 unchk" id="s_fname" name="s_fname" type="text" placeholder="First name" aria-label="s_first_name">
                        </div>
                        <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                            <input class="block w-full px-2 py-2 bg-white border border-black-300 rounded-md text-md shadow-sm placeholder:text-slate-600 focus:outline-none focus:border-primary-500 focus:ring-1 focus:ring-primary-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-black-500 invalid:text-primary-600 focus:invalid:border-primary-500 focus:invalid:ring-primary-500 unchk" id="s_lname" name="s_lname" type="text" placeholder="Last name" aria-label="last_name">
                        </div>
                        <div class="mt-2">
                            <input class="block w-full px-2 py-2 bg-white border border-black-300 rounded-md text-md shadow-sm placeholder:text-slate-600 focus:outline-none focus:border-primary-500 focus:ring-1 focus:ring-primary-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-black-500 invalid:text-primary-600 focus:invalid:border-primary-500 focus:invalid:ring-primary-500 unchk" id="s_street" name="s_street" type="text" placeholder="Street address" aria-label="street_address" />
                        </div>
                        <div class="mt-2">
                            <input class="block w-full px-2 py-2 bg-white border border-black-300 rounded-md text-md shadow-sm placeholder:text-slate-600 focus:outline-none focus:border-primary-500 focus:ring-1 focus:ring-primary-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-black-500 invalid:text-primary-600 focus:invalid:border-primary-500 focus:invalid:ring-primary-500 unchk" id="s_apartment" name="s_apartment" type="text" placeholder="Apartment, suite, unit etc. (optional)" aria-label="apartment">
                        </div>
                        <div class="inline-block mt-2 w-1/3 pr-2">
                            <input class="block w-full px-2 py-2 bg-white border border-black-300 rounded-md text-md shadow-sm placeholder:text-slate-600 focus:outline-none focus:border-primary-500 focus:ring-1 focus:ring-primary-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-black-500 invalid:text-primary-600 focus:invalid:border-primary-500 focus:invalid:ring-primary-500 unchk" id="s_city" name="s_city" type="text" placeholder="City" aria-label="City">
                        </div>
                        <div class="inline-block mt-2 -mx-1 pr-2 w-1/3">
                            <select id="s_state" name="s_state" class="block w-full px-2 py-2 bg-white border border-black-300 rounded-md text-md shadow-sm placeholder:text-slate-600 focus:outline-none focus:border-primary-500 focus:ring-1 focus:ring-primary-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-black-500 invalid:text-primary-600 focus:invalid:border-primary-500 focus:invalid:ring-primary-500 uncheck">
                                <option selected="selected" disabled><strong>Select State</strong></option>
                                @foreach($states as $key=> $state_name)
                                <option value="{{$key}}">{{$state_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="inline-block mt-2 w-1/3">
                            <input class="block w-full px-2 py-2 bg-white border border-black-300 rounded-md text-md shadow-sm placeholder:text-slate-600 focus:outline-none focus:border-primary-500 focus:ring-1 focus:ring-primary-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-black-500 invalid:text-primary-600 focus:invalid:border-primary-500 focus:invalid:ring-primary-500" type="text" minlength="5" maxlength="5" onkeypress="return isNumberKey(this, event);" id="postalcode" name="postalcode" placeholder="Postcode / Zip" aria-label="postcode">
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <h3 class="font-black text-lg">Product Information</h3>
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-md text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th colspan="2" scope="col" class="py-2 px-2">
                                    Product image
                                </th>

                                <th scope="col" class="py-2 px-2">
                                    QUANTITY
                                </th>
                                <th scope="col" class="py-2 px-2">
                                    UNIT PRICE
                                </th>

                            </tr>
                        </thead>
                        @foreach(Cart::instance('default')->content() as $item)
                        <tbody>
                            <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row">
                                    <img class="w-[100px]" src="/images/hgmlatest.png" alt="product" />
                                </th>
                                <td class="py-2 px-2">
                                    <h3 class="text-dark text-md font-semibold">{{ $item->options->variant_name }} Pack - {{ $item->options->varient_tablets }} Tablets Only ${{ number_format(preg_replace('/\s+/', '', $item->subtotal), 2, '.', ',') }}
                                </td>
                                <td class="py-2 px-2">
                                    <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                                        <button type="button" class="border border-gray-200 inline-block px-6 py-2.5 bg-white text-dark font-medium text-md leading-tight uppercase transition duration-150 ease-in-out">{{ $item->qty }}</button>
                                    </div>
                                </td>
                                <td class="py-2 px-2">
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
                    <div class="mt-4 update_information">
                        @php
                        $options = [
                            'product' => 37099,
                            'postcode' => $buyer->zip,
                            ];
                        @endphp
                        
                       {{--<x-paddle-checkout :override="$payLink" class="w-full" height="500" />--}}
                        
                        @if(isset($payLink) && $payLink != '')
                        <x-paddle-button :url="$payLink" class="px-6 py-3 bg-dark text-white font-md text-md uppercase rounded-3xl shadow-md hover:bg-primary-500 hover:shadow-lg focus:bg-primary-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-500 active:shadow-lg transition duration-150 ease-in-out text-center">Pay Now</x-paddle-button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>


<!--Start Checkout Details -->
<x-global.footer />
