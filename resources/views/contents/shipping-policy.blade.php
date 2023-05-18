@extends('layout.master')
@section('title')
Best Natural Supplements to Boost Libido
@endsection
@section('content')
<x-global.header />
{{--<x-shippingpolicy.shippingpolicy :data="$data" />--}}
<section class="py-2 border-t border-gray-200">
    <div class="container">
        <ul class="flex flex-row font-semibold">
            <li><a class="pl-3 text-dark hover:text-primary-400" href="#">Home <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 inline-block">
  <path fillRule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clipRule="evenodd" />
</svg> </a></li>
            <li class="text-gray-400">{{$shipping_policy->title}}</li>
        </ul>
    </div>
</section>
<section>
    <div class="container">
        <div class="py-6 px-4">
        <article class="prose-h1:text-4xl prose-h1:font-black prose-sm prose-headings:text-dark prose-headings:font-semibold prose-a:text-primary-400 prose-p:mt-0 prose-li:mt-0 prose-p:mb-2 prose-li:mb-2 prose-p:text-gray-500 prose-p:text-base prose-li:text-base prose-th:text-base prose-td:text-base prose-li:text-gray-500 prose-li:list-disc list-inside prose-h3:mb-2 prose-h4:mb-2 prose-h5:mb-2 prose-h3:text-xl prose-h4:text-xl prose-h5:text-md prose-h3:font-bold prose-h4:font-bold prose-h5:font-bold prose-table:border prose-th:border prose-th:border-gray-200 prose-th:p-2 prose-td:border prose-td:border-gray-200 prose-td:p-2">
                       <h1 class="font-black text-4xl mb-3 ">{{$shipping_policy->title}}</h1>
                {!!html_entity_decode($shipping_policy->body) !!}
            </article>
        </div>
    </div>
</section>

<x-global.footer />
@endsection
