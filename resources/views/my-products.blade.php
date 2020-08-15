@extends('layouts.app')

@section('content')
    <section class="text-gray-700">
        <div class="container mx-auto">
            <div class="flex flex-wrap -m-4">

                @if(session('cancelled'))
                    <div class="bg-red-100 border border-red-400 text-red-700 p-3 rounded relative my-6 w-full shadow" role="alert">
                        <strong class="font-bold">Sorry!</strong>
                        <span class="block sm:inline">The payment was not successful.</span>
                    </div>
                @endif

                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 p-3 rounded relative my-6 w-full shadow" role="alert">
                        <strong class="font-bold">Congratulations!</strong>
                        <span class="block sm:inline">Your payment was successful.</span>
                    </div>
                @endif

                @forelse($products as $product)
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <div class="p-2 bg-white rounded shadow text-center">
                            <a class="block relative h-48 rounded overflow-hidden">
                                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/420x260">
                            </a>
                            <div class="mt-4">
                                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Only {{ $product->items_available }} left</h3>
                                <h2 class="text-gray-900 title-font text-lg font-medium">{{ \Illuminate\Support\Str::title($product->name) }}</h2>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="bg-blue-100 border border-blue-400 text-blue-700 p-3 rounded relative my-6 w-full shadow" role="alert">
                        <strong class="font-bold">Hello!</strong>
                        <span class="block sm:inline">No products purchased. <a href="{{ route('products-list') }}" class="font-bold italic">Buy now.</a></span>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
