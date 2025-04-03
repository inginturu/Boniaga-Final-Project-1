@extends('layouts.app')

@section('title', 'Produk Kami - Boniaga')

@section('content')
<div class="container">
    <h2 class="text-center mb-4">Produk Kami</h2>

    <!-- Search & Filter -->
    <div class="d-flex justify-content-between mb-4">
        <input type="text" class="form-control w-50" placeholder="Cari produk...">
        <button class="btn btn-outline-secondary">🔍</button>
    </div>

    <!-- Produk Grid -->
    <div class="row">
    @foreach ($products as $product)
    <div class="col-md-4 mb-4">
        <div class="card shadow-sm border-0">
            @if ($product->images->isNotEmpty())
                <img src="{{ asset('storage/' . $product->images->first()->image_path) }}" class="card-img-top" alt="{{ $product->name }}">
            @else
                <img src="{{ asset('images/no-image.png') }}" class="card-img-top" alt="No Image">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ Str::limit($product->description, 50) }}</p>
                <!-- <p class="card-text fw-bold">Rp {{ number_format($product->price, 0, ',', '.') }}</p> -->
            </div>
        </div>
    </div>
    @endforeach
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        {{ $products->links() }}
    </div>
</div>
@endsection
