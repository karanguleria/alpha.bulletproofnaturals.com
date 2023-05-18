@extends('layout.master')
@section('title')
Best Natural Supplements to Boost Libido
@endsection
@section('content')
<x-global.header />
<section class="py-2 border-t border-gray-200">
    <div class="container">
        <ul class="flex flex-row font-semibold">
        <li><a class="pl-3 text-dark hover:text-primary-400" href="{{url('/')}}">Home  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 inline-block">
  <path fillRule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clipRule="evenodd" />
</svg> </a>
           

        </li>
            <li class="text-gray-400">Cancel</li>
        </ul>
    </div>
</section>
<section>
    <div class="container">
        <div class="flex justify-center py-4">
            
        </div>
        <div class="text-center pt-2 pb-6">
            <h1 class="font-black text-4xl mb-3">Cancel!</h1>
            <h4 class="text-2xl mb-2">Your order have been cancelled some reason.</h4>
            {{--<p class="w-2/4 mx-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>--}}
        </div>
    </div>
</section>

<!--Start Checkout Details -->
<x-global.footer />
