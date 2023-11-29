<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Throwable;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View|RedirectResponse
    {
        try {
            $products = Product::select(['*'])->get();
            return view('products.index', compact('products'));
        } catch (throwable $exception) {
            Log::debug($exception->getMessage());
            return back()->with([
                'status' => 'error',
                'message' => $exception->getMessage(),
            ]);
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('products.add-edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        /** @var User $authUser */
        $authUser = auth()->user();

        try {
            $rules = [
                'name' => ['required', 'string', 'max:10'],
                'quantity' => ['required', 'integer'],
                'price' => ['required', 'integer'],
            ];

            $validateData = Validator::make($request->all(), $rules)->validate();
            $validateData['user_id'] = $authUser->id;

            $product = new Product();
            $product->fill($validateData);
            $product->save();

            return redirect()->route('products.list')->with(['status' => 'success', 'message' => 'product added successfully']);
        } catch (throwable $exception) {
            Log::debug($exception->getMessage());
            return back()->with([
                'status' => 'error',
                'message' => $exception->getMessage(),
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id): View|RedirectResponse
    {
        try {
            $productEdit = Product::find($id);
            return view('products.add-edit', compact('productEdit'));
        } catch (throwable $exception) {
            Log::debug($exception->getMessage());
            return back()->with([
                'status' => 'error',

                'message' => $exception->getMessage(),
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        try {
            $product = Product::find($id);
            $rules = [
                'name' => ['required', 'string', 'max:10'],
                'quantity' => ['required', 'integer'],
                'price' => ['required', 'integer'],
            ];
            $validateData = Validator::make($request->all(), $rules)->validate();

            $product->fill($validateData);
            $product->save();

            return redirect()->route('products.list')->with(['status' => 'success', 'message' => 'product updated successfully']);
        } catch (throwable $exception) {
            Log::debug($exception->getMessage());
            return back()->with([
                'status' => 'error',
                'message' => $exception->getMessage(),
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        try {
            $product = Product::select(['*'])->find($id);
            if (!$product) return back()->with(['status' => 'error', 'message' => "not found"]);
            $product->delete();

            return redirect()->route('products.list')->with(['status' => 'success', 'message' => 'product deleted successfully']);
        } catch (Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()->with(['status' => 'error', 'message' => $exception->getMessage()]);
        }
    }
}
