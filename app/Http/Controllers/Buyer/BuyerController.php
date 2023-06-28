<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Models\Buyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buyes = Buyer::has('transactions')->get();

        return response()->json((['data' => $buyes]), 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $buyer = Buyer::has('transactions')->findOrFail($id);
        Log::info(json_encode($buyer));
        return response()->json(['data' => $buyer], 200);
    }


}
