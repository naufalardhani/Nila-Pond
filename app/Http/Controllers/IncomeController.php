<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIncomeRequest;
use App\Http\Requests\UpdateIncomeRequest;
use App\Models\Income;
use Illuminate\Support\Facades\Log;

class IncomeController extends Controller
{
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
    public function destroy($id)
    {
        {
            $product = Income::findOrFail($id);
            $product->delete();
            return redirect()->route('list_income')->with('success', 'Income deleted successfully.');
        }
    }
}