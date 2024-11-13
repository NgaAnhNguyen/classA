<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Product\UpdateRequest;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->getList();

        return view('products.list', ['items' => $products]);
    }

    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }

    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    public function update(UpdateRequest $updateRequest, Product $product)
    {
        $request = $updateRequest->validated();
        $result = $this->productService->update($product, $request);

        if ($result) {
            return redirect()->route('products.index')->with('success','update success');
        }

        return redirect()->route('products.index')->with('error','update failed');
    }
    public function create()
{
    return view('products.create'); 
}

public function store(Request $request)
{
  
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|integer',
    ]);

    
    $product = Product::create($request->all());

    return redirect()->route('products.index')->with('success', 'Product created successfully.');
}
}
