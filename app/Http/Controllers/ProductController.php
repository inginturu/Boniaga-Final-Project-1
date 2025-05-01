<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $products = Products::with('images')->paginate(6);
    //     return view('products.index', compact('products'));
    // }

    public function index(Request $request)
{
    $query = Products::with('images');

    if ($request->has('search') && $request->search != '') {
        $keyword = $request->search;
        $query->where(function($q) use ($keyword) {
            $q->where('name', 'like', "%{$keyword}%")
              ->orWhere('description', 'like', "%{$keyword}%");
        });
    }

    $products = $query->paginate(6)->withQueryString();

    return view('products.index', compact('products'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Products::with('images')->findOrFail($id);
        return view('products.show', compact('product'));

            // Mengambil produk dengan eager loading gambar
    $product = Products::with('images')->findOrFail($id);
    
    // Mengambil produk terkait (misalnya dari kategori yang sama)
    $relatedProducts = Products::with('images')
                        ->where('id', '!=', $id)
                        ->limit(4)
                        ->get();
    
    // Menampilkan view dengan data produk dan produk terkait
    return view('products.show', compact('product', 'relatedProducts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
