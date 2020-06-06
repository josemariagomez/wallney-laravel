<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreExpenseRequest;

class ExpenseController extends Controller
{
    public function store(StoreExpenseRequest $request)
    {
        $user = auth()->user();
        $expense = $user->expenses()->create($request->validated());
        return response()->json('Gasto creado correctamente', 200);
    }
}
