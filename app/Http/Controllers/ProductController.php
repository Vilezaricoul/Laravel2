<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProductFiltered(Request $request)
    {
        $products = Product::query();

        if ($request->get('price')=='desc')
            if ($request->get('price'))
                $products = $products->orderBy('price', 'desc');
            if ($request->get('price')=='asc')
                $products = $products->orderBy('price', 'asc');
                
        $products = $products->paginate(20)->withQueryString();
        return view('allProductAllFields', ['products' => $products, 'request' => $request]);
    }

    public function showCertainProductAndAdresses(int $id)
    {
        $products = Product::with(['addresses' => function ($query) {
            $query->orderBy('created_at', 'desc');
        }])->findOrFail($id);
        return view('certainProductAndAddresses', ['products' => $products]);
    }
}
