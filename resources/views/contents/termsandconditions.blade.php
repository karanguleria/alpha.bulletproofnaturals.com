@extends('layout.master')
@section('title')
Best Natural Supplements to Boost Libido
@endsection
@section('content')
<x-global.header />
<section>
    <div class="container">
        <div class="py-6 px-4">
        <article class="prose-h1:text-4xl prose-h1:font-black prose-sm prose-headings:text-dark prose-headings:font-semibold prose-a:text-primary-400 prose-p:mt-0 prose-li:mt-0 prose-p:mb-2 prose-li:mb-2 prose-p:text-gray-500 prose-p:text-base prose-li:text-base prose-th:text-base prose-td:text-base prose-li:text-gray-500 prose-li:list-disc list-inside prose-h3:mb-2 prose-h4:mb-2 prose-h5:mb-2 prose-h3:text-xl prose-h4:text-xl prose-h5:text-md prose-h3:font-bold prose-h4:font-bold prose-h5:font-bold prose-table:border prose-th:border prose-th:border-gray-200 prose-th:p-2 prose-td:border prose-td:border-gray-200 prose-td:p-2">
                <h1 class="black">{{$terms_and_conditions->title }}</h1>
                {!!html_entity_decode($terms_and_conditions->body) !!}
            </article>
        </div>
    </div>
</section>
<x-global.footer />
@endsection
