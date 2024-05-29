<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOutcomeRequest;
use App\Http\Requests\UpdateOutcomeRequest;
use App\Models\Outcome;
use Illuminate\Support\Facades\Log;

class OutcomeController extends Controller
{
    public function store(StoreOutcomeRequest $request)
    {
        try {
            $req = $request->validated();
            
            $outcome = new Outcome();
            $outcome->expenses = $req['expenses'];
            $outcome->nominal = $req['nominal'];
            $outcome->purchase_date = $req['purchase_date'];
            
            $outcome->save();

            return redirect()->route('add_outcome')->with('success', 'Submit Outcome successfully.');
        } catch (\Exception $e) {
            Log::error('Error submitting outcome: ' . $e->getMessage());
            // Tangani kesalahan di sini
            // Misalnya, Anda dapat menyimpan pesan kesalahan ke dalam log atau mengirimkan respons error ke pengguna
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        {
            $product = Outcome::findOrFail($id);
            $product->delete();
            return redirect()->route('list_outcome')->with('success', 'Outcome deleted successfully.');
        }
    }
}
