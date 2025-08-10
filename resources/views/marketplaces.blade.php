@extends('layouts.mainmenu.main')

@section('container')
    <div class="contents gap-2 px-4 py-4 mb-4 w-full" style="flex-direction: column;">
        <div class="text-center">
            <h1 class="text-3xl font-bold mb-6">{{ $title }} AnomSite</h1>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($marketplaces as $marketplace)
                <div class="product-card bg-white p-4 rounded-lg shadow">
                    <div class="flex gap-4 mb-6">
                        <div class="product-content flex-1">
                            <h2 class="product-title">{{ $marketplace->product }}</h2>
                            <div class="flex gap-6 mb-6">
                                <p class="product-price">${{ $marketplace->price }}</p>
                                <p>⭐{{ $marketplace->rate }}</p>
                            </div>
                            <p class="product-desc">{{ $marketplace->detil }}</p>
                            {{-- <a href="" class="text-blue-500 mt-2 inline-block">Lihat Detail</a> --}}
                        </div>
                        <div class="product-image">
                            <img src="{{ $marketplace->image }}" alt="" style="width:100px; height:100px">
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <button class="buy-btn flex-1 text-center">Add</button>
                        <button class="view-btn flex-1">View</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
