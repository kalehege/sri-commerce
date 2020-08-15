@extends('layouts.app')

@section('content')
    <section class="text-gray-700">
        <div class="container mx-auto">
            <div class="flex flex-wrap -m-4">
                @foreach($products as $product)
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <div class="p-2 bg-white rounded-lg shadow text-center">
                            <a class="block relative h-48 rounded overflow-hidden">
                                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/420x260">
                            </a>
                            <div class="mt-4">
                                <h3 class="text-gray-500 text-xs tracking-widest title-font inline uppercase">Only <span class="text-blue-800 font-bold italic">{{ $product->items_available }}</span> left</h3>
                                <h2 class="text-gray-900 title-font text-lg font-medium my-6">{{ \Illuminate\Support\Str::title($product->name) }}</h2>
                                <a href="{{ route('checkout', $product) }}" class="bg-blue-300 hover:bg-blue-700 text-blue-800 hover:text-white p-4 block rounded font-bold italic">{{ $product->price }} LKR</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
