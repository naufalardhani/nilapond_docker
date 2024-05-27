<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIncomeRequest;
use App\Http\Requests\UpdateIncomeRequest;
use App\Models\Income;
use Illuminate\Support\Facades\Log;

class IncomeController extends Controller
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
    public function store(StoreIncomeRequest $request)
    {
        try {
            $req = $request->validated();
            
            $income = new Income();
            $income->product_name = $req['product_name'];
            $income->income = $req['income'];
            $income->total_weight = $req['total_weight'];
            $income->purchase_date = $req['purchase_date'];
            
            $income->save();

            return redirect()->route('add_income')->with('success', 'Submit income successfully.');
        } catch (\Exception $e) {
            Log::error('Error submitting income: ' . $e->getMessage());
            // Tangani kesalahan di sini
            // Misalnya, Anda dapat menyimpan pesan kesalahan ke dalam log atau mengirimkan respons error ke pengguna
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Income $income)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Income $income)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIncomeRequest $request, Income $income)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        {
            $product = Income::findOrFail($id);
            $product->delete();
            return redirect()->route('list_income')->with('success', 'Income deleted successfully.');
        }
    }
}