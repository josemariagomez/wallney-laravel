<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreExpenseRequest;

class IncomeController extends Controller
{
    public function store(StoreExpenseRequest $request)
    {
        $user = auth()->user();
        $expense = $user->incomes()->create($request->validated());
        return response()->json('Ingreso creado correctamente', 200);
    }
}
