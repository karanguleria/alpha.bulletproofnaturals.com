@extends('layout.master')
@section('title')
Best Natural Supplements to Boost Libido
@endsection
@section('content')
<x-global.header />

<section class="py-2 border-t border-gray-200">
    <div class="container">
        <ul class="flex flex-row font-semibold">
            <li><a class="pr-1 text-dark hover:text-primary-400" href="{{url('/')}}">Home /</a></li>
            <li class="text-gray-400">Checkout</li>
        </ul>
    </div>
</section>
<form id="paymentForm" method="post" action="{{route('create.drip')}}">
    {{ csrf_field() }}

    <input type="submit" class="w-full px-6 py-4 bg-primary-400 text-white font-md font-bold text-md leading-tight uppercase rounded shadow-md hover:bg-primary-500 hover:shadow-lg focus:bg-primary-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-500 active:shadow-lg transition duration-150 ease-in-out" value="Submit"/>
    
</form>


<!--Start Checkout Details -->
<x-global.footer />
