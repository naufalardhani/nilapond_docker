<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Models\Products;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreProductsRequest $request)
    {
        try {
            $req = $request->validated();
            
            $products = new Products();
            $products->name = $req['name'];
            $products->description = $req['description'];
            $products->is_active = $req['is_active'];
            $products->price = $req['price'];
            $products->stock = $req['stock'];
            
            if ($request->hasFile('thumbnail')) {
                $file = $request->file('thumbnail');
                $originalName = $file->getClientOriginalName();
                $path = $file->store('public/thumbnails');
                    
                // Pastikan file berhasil disimpan
                if (!$path) {
                    throw new \Exception('Failed to store thumbnail file.');
                }

                $products->photo_url = str_replace('public', 'storage', $path);
                $products->photo_name = $originalName; // Menyimpan nama file asli
            }
            
            $products->save();

            return redirect()->route('list_product')->with('success', 'Product added successfully.');
        } catch (\Exception $e) {
            // Tangani kesalahan di sini
            // Misalnya, Anda dapat menyimpan pesan kesalahan ke dalam log atau mengirimkan respons error ke pengguna
            return redirect()->back()->with('error', $e->getMessage());
        }
    }



    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductsRequest $request, $id)
    {
        try {
            $req = $request->validated();
            
            $products = Products::findOrFail($id);
            $products->name = $req['name'];
            $products->description = $req['description'];
            $products->is_active = $req['is_active'];
            $products->price = $req['price'];
            $products->stock = $req['stock'];

            if ($request->hasFile('thumbnail')) {
                $file = $request->file('thumbnail');
                $originalName = $file->getClientOriginalName();
                $path = $file->store('public/thumbnails');
                
                // dd([
                //     'originalName' => $originalName,
                //     'file' => $file,
                // ]);

                // Pastikan file berhasil disimpan
                if (!$path) {
                    throw new \Exception('Failed to store thumbnail file.');
                }

                // Hapus file lama jika ada
                if ($products->photo_url) {
                    $oldFilePath = str_replace('storage', 'public', $products->photo_url);
                    if (Storage::exists($oldFilePath)) {
                        Storage::delete($oldFilePath);
                    }
                }
                

                $products->photo_url = str_replace('public', 'storage', $path);
                $products->photo_name = $originalName; // Menyimpan nama file asli
            }

            $products->save();

            return redirect()->route('edit_product', ['id' => $id])->with('success', 'Product updated successfully.');
        } catch (\Exception $e) {
            // Tangani kesalahan di sini
            // Misalnya, Anda dapat menyimpan pesan kesalahan ke dalam log atau mengirimkan respons error ke pengguna
            return redirect()->back()->with('error', $e->getMessage());
        }
    }


    public function destroy($id)
    {
        try {
            // Temukan produk berdasarkan ID
            $product = Products::findOrFail($id);

            // Hapus file gambar terkait jika ada
            if ($product->photo_url) {
                $oldFilePath = str_replace('storage', 'public', $product->photo_url);
                if (Storage::exists($oldFilePath)) {
                    Storage::delete($oldFilePath);
                }
            }

            // Hapus produk dari database
            $product->delete();

            return redirect()->route('list_product')->with('success', 'Product deleted successfully.');
        } catch (\Exception $e) {
            // Tangani kesalahan di sini
            // Misalnya, Anda dapat menyimpan pesan kesalahan ke dalam log atau mengirimkan respons error ke pengguna
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

}
