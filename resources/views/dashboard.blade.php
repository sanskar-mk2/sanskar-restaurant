@extends('layouts.app')

@section('content')
    <div class="w-screen flex justify-center">
        <section class="w-full max-w-5xl flex gap-4 p-4 justify-around mt-8">
            <a class="flex-auto" href="{{ route('categories') }}"><div
                class="text-white p-8 bg-gradient-to-r from-green-500 to-green-300 rounded-xl">
                <span class="block text-6xl">{{ $count_categories }}</span>
                Categories
            </div></a>
            <a class="flex-auto" href=""><div
                class="text-white p-8 bg-gradient-to-r from-green-500 to-green-300 rounded-xl">
                <span class="block text-6xl">{{ $count_products }}</span>
                Products
            </div></a>
        </section>
    </div>
@endsection
