<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreExpenseRequest;

class IncomeController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return $user->incomes()->orderByDesc('date')->paginate(10);
    }

    public function store(StoreExpenseRequest $request)
    {
        $user = auth()->user();
        $expense = $user->incomes()->create($request->validated());
        return response()->json('Ingreso creado correctamente', 200);
    }
}
