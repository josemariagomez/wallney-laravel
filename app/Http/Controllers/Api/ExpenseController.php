<?php

namespace App\Http\Controllers\Api;

use App\Expense;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreExpenseRequest;

class ExpenseController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return $user->expenses()->orderByDesc('date')->paginate(2);
    }

    public function store(StoreExpenseRequest $request)
    {
        $user = auth()->user();
        $expense = $user->expenses()->create($request->validated());
        return response()->json('Gasto creado correctamente', 200);
    }

    public function update(StoreExpenseRequest $request, $id)
    {
        $user = auth()->user();
        $expense = Expense::find($id);

        if (!$user or !$expense or ($expense->user_id != $user->id)) {
            return response()->json('Fallo al editar', 400);
        }

        $expense->update($request->validated());
        return response()->json('Ingreso editado correctamente', 200);
    }
}
