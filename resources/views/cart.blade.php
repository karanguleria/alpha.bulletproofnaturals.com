@extends('layout.master')
@section('title')
Best Natural Supplements to Boost Libido
@endsection
@section('content')
 
<style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap');

    .font-oswald {
        font-family: 'Oswald', sans-serif;
    }

    .font-lato {
        font-family: "Lato", sans-serif;
    }

    .card-payment {
        height: 476px;
        margin: 0 auto;
        position: relative;
        width: 100%;
    }

    h3 {
        font-size: 30px;
        line-height: 50px;
        margin: 0 0 28px;
        text-align: center;
    }

    ol,
    ul {
        list-style: outside none none;
    }

    ul,
    h4 {
        border: 0 none;
        font: inherit;
        margin: 0;
        padding: 0;
        vertical-align: baseline;
    }

    #paymentSection h4 {
        color: #2E92CD;
        font-size: 16px;
        font-weight: bold;
    }

    #paymentSection {
        background-color: #f9f9f7;
        border: 1px solid #fff;
        border-radius: 5px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
        left: 0;
        margin: 0 auto;
        padding: 10px 10px;
        max-width: 320px;
    }

    form {
        float: none;
    }

    form li {
        margin: 8px 0;
    }

    form label {
        color: #555;
        display: block;
        font-size: 14px;
        font-weight: 400;
    }

    form #card_number {
        background-image: url("images.png"), url("images.png");
        background-position: 2px -121px, 260px -61px;
        background-repeat: no-repeat;
        background-size: 120px 361px, 120px 361px;
        padding-left: 54px;
        width: 225px;
    }

    form input {
        background-color: #fff;
        border: 1px solid #e5e5e5;
        color: #333;
        display: block;
        font-size: 18px;
        height: 32px;
        padding: 0 5px;
        width: 275px;
        outline: none;
    }

    form input::-moz-placeholder {
        color: #ddd;
        opacity: 1;
    }

    .payment-btn {
        width: 100%;
        height: 34px;
        padding: 0;
        font-weight: bold;
        color: white;
        text-align: center;
        cursor: pointer;
        text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
        border: 1px solid;
        border-color: #005fb3;
        background: #0092d1;
        border-radius: 4px;
    }

    .payment-btn:disabled {
        opacity: 0.2;
    }

    form li .help {
        color: #aaa;
        display: block;
        font-size: 11px;
        font-weight: 400;
        line-height: 14px;
        padding-top: 14px;
    }

    .vertical {
        overflow: hidden;
    }

    .vertical li {
        float: left;
        width: 95px;
    }

    .vertical input {
        width: 68px;
    }


    .list {
        color: #767670;
        font-size: 16px;
        list-style: outside none disc;
        margin-bottom: 28px;
        margin-left: 25px;
    }

    .card-payment .numbers {
        background-color: #fff;
        border: 1px solid #bbc;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        /*left: 460px;*/
        margin-bottom: 28px;
        padding: 14px 20px;
        /*position: absolute;*/
        /*top: 139px;*/
        z-index: 10;
    }

    .card-payment .numbers p {
        margin-bottom: 0;
        margin-top: 0;
    }

    .card-payment .numbers .list {
        margin-bottom: 0;
        margin-left: 0px;
    }

    .required {
        border: 1px solid #EA4335;
    }

    .status-msg {
        font-size: 16px;
        padding: 10px;
        border: 1px dashed;
        margin-bottom: 5px;
        margin-top: 0;
    }

    .status-msg.error {
        color: #EA4335;
    }

    .status-msg.success {
        color: #34A853;
    }

    p.status-msg span {
        color: #FB4314;
    }

    .bg-green-alert {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
        position: relative;
        z-index: 1;
        padding: 0.75rem 1.25rem;
        margin-bottom: 1rem;
        border-radius: 0.25rem;
    }

    .bg-danger-alert {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
        position: relative;
        padding: 0.75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: 0.25rem;
    }
    .edit_checkout  [type='text']:focus{
        border-color: #A77C00;
        box-shadow:none;

    }
    .custom_pay_ {
    max-width: 280px;
    margin: 0 auto;
}
.custom_pay_ > form > button{
    border-radius: 4px;
    width: 100%;
    margin-bottom: 16px;
    font-size: 20px;
}

    @media (max-width: 767px) {
        .custom_pay_ > form > button {   
    font-size: 16px;
}
        .cart-inc * {
            height: 30px;
            padding: 0px;
        }

        .cart-inc button {
            padding-left: 5px;
            padding-right: 5px;
        }

        .mb-none {
            display: none !important;
        }

        tr.cart_item {
            margin-bottom: 50px !important;

            position: relative;
        }

        th.product-thumbnail,
        td.product-quantity {
            width: 33% !important;
            border-width: 0 !important;
            float: left;
            text-align: left;
            clear: both;
            padding: 10px 15px;
        }

        td.product-name,
        td.product-subtotal {
            width: 50% !important;
            border-width: 0 !important;
            float: left;
            text-align: right;
            min-width: auto;
            padding: 10px 15px;
            position: relative;
            right: -88px;
        }

        .product_cart th:empty,
        .product_cart td:empty {
            visibility: hidden;
            display: none !important;
        }

        .pro_total td {
            width: 48% !important;
            float: left;
        }

        .pro_total_pri {
            position: relative;
            right: -120px;
        }
    }
</style>
<x-global.header />
{{--<x-cart.cart />--}}
<section class="py-2 border-t border-gray-200">
    <div class="container">
        <ul class="flex flex-row font-semibold">
            <li><a class="pl-3 text-dark hover:text-primary-400" href="{{url('/')}}">Home  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 inline-block">
  <path fillRule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clipRule="evenodd" />
</svg> </a>
           

        </li>
            <li class="text-gray-400">Cart</li>
        </ul>
    </div>
</section>
<section class="mb-10">
    <div class="container-full">
        <div class="grid grid-cols-1">
            <div class=" text-center py-4 bg-gray-100">
                <h1 class="text-dark text-3xl font-black uppercase font-oswald">CART TOTAL: {{preg_replace('/\s+/', '', presentPrice($newSubtotal))}}</h1>
                <p>Shipping Free</p>
            </div>
        </div>
    </div>
    </div>
</section>
<section>
    <div class="container">
        @if (session()->has('success_message'))
        <div class="bg-green-alert px-4 py-3 shadow-md mb-2" role="alert">
            <div class="flex">
                <div>
                    <p class="font-bold">{{ session()->get('success_message') }}</p>
                    <!-- <p class="text-sm">Make sure you know how these changes affect you.</p> -->
                </div>
            </div>
        </div>
        @endif
        @forelse ($errors->all() as $error)
        <div class="bg-danger-alert px-4 py-3 shadow-md mb-2" role="alert">
            <div class="flex">
                <div>
                    <p class="font-bold">{!! $error !!}</p>
                </div>
            </div>
        </div>
        @empty

        @endforelse
    </div>
</section>
<section>
    <div class="container">
        <div class="overflow-hidden sm:overflow-x-auto relative">
            <table class="w-full text-sm text-left text-black font-normal font-oswald">
                <thead class="text-xl text-black uppercase mb-none">
                    <tr>
                        <th colspan="2" scope="col" class="py-3 px-6 font-normal">
                            Product
                        </th>
                        <th scope="col" class="py-3 px-6 font-normal">
                            QUANTITY
                        </th>
                        <th scope="col" class="py-3 px-6 font-normal">
                            UNIT PRICE
                        </th>
                    </tr>
                </thead>
                @foreach(Cart::instance('default')->content() as $item)
                <tbody>
                    <tr class="bg-white cart_item">
                        <th class="py-4 sm:px-6 product-thumbnail font-medium text-gray-900 whitespace-nowrap">
                            <img class="w-[80px] sm:w-[100px]" src="/images/hgmlatest.png" alt="product" />
                        </th>
                        <td class="py-4 px-6 product-name">
                            <h3 class="text-dark text-base sm:text-2xl font-normal uppercase mb-0">{{ $item->options->variant_name }} Pack - {{ $item->options->varient_tablets }} Tablets Only ${{ number_format(preg_replace('/\s+/', '', $item->subtotal), 2, '.', ',') }}
                        </td>
                        <td class="py-4 px-6 product-quantity">
                            <div class="inline-flex items-center cart-inc" role="group">
                                <button type="button" data-id="{{ $item->rowId }}" data-type="minus" data-qty="{{ $item->qty }}" class="minusBtn border border-transparent rounded-r inline-block px-1 py-1 bg-transparent text-dark font-extrabold text-2xl leading-3 uppercase hover:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 active:bg-transparent transition duration-150 ease-in-out">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                        <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />
                                    </svg>

                                </button>
                                {{--<button type="button" class="border border-gray-200 inline-block px-1 py-2 sm:px-6 sm:py-2.5 bg-white text-dark font-medium text-md uppercase transition duration-150 ease-in-out">{{ $item->qty }}</button>--}}
                                <input class="leading-3 px-1 py-2 text-center text-primary-400 w-14 border border-gray-200" type="text" id="quantity" name="quantity" value="{{ $item->qty }}" min="1" max="1000" data-id="{{ $item->rowId }}" />
                                <button type="button" data-id="{{ $item->rowId }}" data-type="plus" data-qty="{{ $item->qty }}" class="plusBtn border border-transparent rounded-r inline-block px-1 py-1 bg-transparent text-dark font-extrabold text-2xl leading-3 uppercase hover:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 active:bg-transparent transition duration-150 ease-in-out">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                        <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                        <td class="py-4 px-6 text-2xl font-normal font-lato product-subtotal">
                            ${{ number_format(preg_replace('/\s+/', '', $item->subtotal), 2, '.', ',') }}
                        </td>
                    </tr>
                    <tr class="border-0 product_cart">
                        <th scope="py-2 mb-none">
                        </th>
                        <td class="py-2 px-6 mb-none">
                        </td>
                        <td class="py-2 px-6 mb-none">
                        </td>
                        <td class="py-2 px-6 text-xl font-extrabold relative sm:static right-8 sm:right-0">
                            <form class="remove_" method="POST" action="{{ route('checkout.destroy',$item->rowId)}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="uppercase text-gray-400 text-sm font-sans font-light tracking-widest">Remove</button>
                            </form>
                            {{--<a href="#" class="uppercase text-gray-400 text-sm font-sans font-light tracking-widest">remove</a>--}}
                        </td>
                    </tr>

                    @endforeach
                    @if (!session()->has('coupon'))
                    <tr class="bg-white border-b border-t">
                        <td class="py-2 px-4 sm:px-0 text-right" colspan="4">
                          
                            <form class="edit_checkout animate-floating-labels mb-2 inline-block" action="{{ route('coupon.store') }}" method="post">
                                <div class="py-2">
                                    {{ csrf_field() }}
                                    <div class="block sm:flex items-center ">
                                        <h4 class="mr-2 mb-0 font-normal uppercase text-lg ">Enter Coupon Code</h4>
                                        <input type="text" name="coupon_code" placeholder="Gift Card or Discount Code" autocomplete="off" aria-required="true" size="30" id="checkout_reduction_code_apply" class="w-[220px] sm:w-80 font-lato my-2 sm:mx-0 mr-0 sm:mr-2 h-10 block border border-gray-400 focus:outline-none px-3 leading-10" placeholder="Gift Card or Discount Code" />
                                        <button name="button" type="submit" class="font-lato px-6 py-2 bg-dark text-white font-md text-md uppercase rounded-3xl shadow-md hover:bg-primary-500 hover:shadow-lg focus:bg-primary-500 focus:shadow-lg focus:outline-none focus:ring-0 focus:ring-transparent active:bg-primary-500 active:shadow-lg transition duration-150 ease-in-out" aria-busy="false"> Apply Coupon</button>
                                    </div>
                                </div>
                            </form>
                          
                        </td>
                        <!-- <td class="py-2 px-6 mb-none" colspan="2">
                        </td> -->
                    </tr>
                    @endif
                    @if (session()->has('coupon'))
                    <tr class="cart-order text-left border-t">
                        <td class="mb-none"></td>
                        <td class="mb-none"></td>
                        <td class="capitalize px-3 py-2 text-right text-2xl">
                            <i class="fa fa-tags text-theme"></i>
                            <strong class="mx-2">({{ session()->get('coupon')['name'] }}) </strong>
                            <form action="{{ route('coupon.destroy') }}" method="POST" style="display:inline-block;">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button type="submit" class="btn btn-sm btn-dark">Remove:</button>
                            </form>
                        </td>
                        <td class="capitalize px-3 bold py-2 text-2xl">-{{preg_replace('/\s+/', '', presentPrice($discount))}}</td>
                    </tr>
                    <tr>
                        <td class="mb-none"></td>
                        <td class="mb-none"></td>
                        <td class="capitalize px-3 py-2 text-right text-2xl">New Subtotal:</td>
                        <td class="capitalize px-3 bold py-2 text-2xl">{{preg_replace('/\s+/', '', presentPrice(@$newSubtotal))}}</td>
                    </tr>
                    @endif
                    <tr class="pro_total">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white mb-none">
                        </th>
                        <td class="py-4 px-6 mb-none">
                        </td>
                        <td class="capitalize px-3 py-2 text-right text-2xl font-extrabold ">
                            <h4>Total:</h4>
                        </td>
                        <td class="font-extrabold capitalize px-3 bold py-2 text-2xl">
                            <h4>{{preg_replace('/\s+/', '', presentPrice($newSubtotal))}}</h4>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>
    {{--<div class="container-full">
        <form method="POST" action="{{ url('charge') }}">
    {{ csrf_field() }}
    <div class="form-container">
        <div class="personal-information">
            <h1>Payment Information</h1>
        </div> <!-- end of personal-information -->

        <ul>
            <li>
                <label>Card number</label>
                <input type="text" placeholder="1234 5678 9012 3456" maxlength="20" id="card_number" name="card_number">
            </li>
            <li class="vertical">
                <ul>
                    <li>
                        <label>Expiry month</label>
                        <input type="text" placeholder="MM" maxlength="5" id="expiry_month" name="expiry_month">
                    </li>
                    <li>
                        <label>Expiry year</label>
                        <input type="text" placeholder="YYYY" maxlength="5" id="expiry_year" name="expiry_year">
                    </li>
                    <li>
                        <label>CVV</label>
                        <input type="text" placeholder="123" maxlength="3" id="cvv" name="cvv">
                    </li>
                </ul>
            </li>
            <li>
                <label>Name on card</label>
                <input type="text" placeholder="John Doe" id="name_on_card" name="name_on_card">
            </li>
            <li>
                <input type="hidden" name="card_type" id="card_type" value="" />
                <input type="button" name="card_submit" id="cardSubmitBtn" value="Proceed" class="payment-btn" disabled="true">
            </li>
    </div>
    </form>

    </div>--}}
    <div class="container-full">

        <div class="bg-gray-100 text-center py-10">
            <div class="custom_pay_">
            <form id="form-form" action="{{route('buyer.create')}}" method="POST" class="d-none">
                <button type="submit" class="px-6 py-2 bg-dark text-white font-md text-md rounded-3xl shadow-md hover:bg-primary-500 hover:shadow-lg focus:bg-primary-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-500 active:shadow-lg transition duration-150 ease-in-out">Checkout</button>
                @csrf
            </form>
            <div id="paypal-checkout-button-container"></div>
            {{-- <div x-data="PaypalCheckoutButtons" id="paypal-checkout-button-container"></div> --}}
                <script src="https://www.paypal.com/sdk/js?client-id=AY-FcXdXvBz8RT5kK-IoLpa9evQtslWFDxaR43V7KbwHocYL68dqhG_bisr6Svm9U8YSqbnoQ72wMZ3X&currency=USD"></script>
            @vite(['resources/js/app.js'])
        </div>
        </div>
        </div>
    </div>
</section>
{{--<x-home.subscribe />--}}
<x-global.footer />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
    function cardFormValidate() {
        var cardValid = 0;

        // Card number validation
        $('#card_number').validateCreditCard(function(result) {
            console.log(result);
            var cardType = (result.card_type == null) ? '' : result.card_type.name;
            if (cardType == 'Visa') {
                var backPosition = result.valid ? '2px -163px, 260px -87px' : '2px -163px, 260px -61px';
            } else if (cardType == 'MasterCard') {
                var backPosition = result.valid ? '2px -247px, 260px -87px' : '2px -247px, 260px -61px';
            } else if (cardType == 'Maestro') {
                var backPosition = result.valid ? '2px -289px, 260px -87px' : '2px -289px, 260px -61px';
            } else if (cardType == 'Discover') {
                var backPosition = result.valid ? '2px -331px, 260px -87px' : '2px -331px, 260px -61px';
            } else if (cardType == 'Amex') {
                var backPosition = result.valid ? '2px -121px, 260px -87px' : '2px -121px, 260px -61px';
            } else {
                var backPosition = result.valid ? '2px -121px, 260px -87px' : '2px -121px, 260px -61px';
            }
            $('#card_number').css("background-position", backPosition);
            if (result.valid) {
                $("#card_type").val(cardType);
                $("#card_number").removeClass('required');
                cardValid = 1;
            } else {
                $("#card_type").val('');
                $("#card_number").addClass('required');
                cardValid = 0;
            }
        });

        // Card details validation
        var cardName = $("#name_on_card").val();
        var expMonth = $("#expiry_month").val();
        var expYear = $("#expiry_year").val();
        var cvv = $("#cvv").val();
        var regName = /^[a-z ,.'-]+$/i;
        var regMonth = /^01|02|03|04|05|06|07|08|09|10|11|12$/;
        var regYear = /^2017|2018|2019|2020|2021|2022|2023|2024|2025|2026|2027|2028|2029|2030|2031$/;
        var regCVV = /^[0-9]{3,3}$/;
        if (cardValid == 0) {
            $("#card_number").addClass('required');
            $("#card_number").focus();
            return false;
        } else if (!regMonth.test(expMonth)) {
            $("#card_number").removeClass('required');
            $("#expiry_month").addClass('required');
            $("#expiry_month").focus();
            return false;
        } else if (!regYear.test(expYear)) {
            $("#card_number").removeClass('required');
            $("#expiry_month").removeClass('required');
            $("#expiry_year").addClass('required');
            $("#expiry_year").focus();
            return false;
        } else if (!regCVV.test(cvv)) {
            $("#card_number").removeClass('required');
            $("#expiry_month").removeClass('required');
            $("#expiry_year").removeClass('required');
            $("#cvv").addClass('required');
            $("#cvv").focus();
            return false;
        } else if (!regName.test(cardName)) {
            $("#card_number").removeClass('required');
            $("#expiry_month").removeClass('required');
            $("#expiry_year").removeClass('required');
            $("#cvv").removeClass('required');
            $("#name_on_card").addClass('required');
            $("#name_on_card").focus();
            return false;
        } else {
            $("#card_number").removeClass('required');
            $("#expiry_month").removeClass('required');
            $("#expiry_year").removeClass('required');
            $("#cvv").removeClass('required');
            $("#name_on_card").removeClass('required');
            $('#cardSubmitBtn').prop('disabled', false);
            return true;
        }
    }
    $(document).ready(function() {

        $('#paymentForm input[type=text]').on('keyup', function() {
            cardFormValidate();
        });
        $("#quantity").blur(function() {

            var qty = $(this).val();
            console.log(qty);
            if (qty < 1001 && qty > 0) {
                $.ajax({
                    type: 'PATCH',
                    url: '<?php echo url("/"); ?>/checkout/' + $(this).data('id'),
                    data: {
                        '_token': '<?php echo csrf_token() ?>',
                        'quantity': qty
                    },
                    success: function(data) {
                        window.location.href = "{{ route('cart.index') }}"
                    }
                });
            } else {
                var qty = 1;
                $('#quantity').val(1);
                $.ajax({
                    type: 'PATCH',
                    url: '<?php echo url("/"); ?>/checkout/' + $(this).data('id'),
                    data: {
                        '_token': '<?php echo csrf_token() ?>',
                        'quantity': qty
                    },
                    success: function(data) {
                        window.location.href = "{{ route('cart.index') }}"
                    }
                });
            }
        });
        $(".plusBtn, .minusBtn").click(function(e) {
            //alert('Clicked');
            var qty = $(this).data('qty');
            if ($(this).data('type') == "plus") {
                var qty = ++qty;
            } else {
                var qty = --qty;
            }
            if (qty > 0) {
                $.ajax({
                    type: 'PATCH',
                    url: '<?php echo url("/"); ?>/checkout/' + $(this).data('id'),
                    data: {
                        '_token': '<?php echo csrf_token() ?>',
                        'quantity': qty
                    },
                    success: function(data) {
                        window.location.href = "{{ route('cart.index') }}"
                    }
                });
            }
        });
    });
</script>

@endsection
