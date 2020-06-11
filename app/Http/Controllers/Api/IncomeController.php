<?php

namespace App\Http\Controllers\Api;

use App\Income;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreExpenseRequest;

class IncomeController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $all = $user->incomes()->orderByDesc('date')->get()->map(function ($item) {
            $item->amount = $item->amount / 100;
            return $item;
        });
        $list = my_paginate($all, 10, null, request()->getPathInfo());
        return $list;
    }

    public function store(StoreExpenseRequest $request)
    {
        $user = auth()->user();
        $expense = $user->incomes()->create($request->validated());
        return response()->json('Ingreso creado correctamente', 200);
    }

    public function update(StoreExpenseRequest $request, $id)
    {
        $user = auth()->user();
        $income = Income::find($id);

        if (!$user or !$income or ($income->user_id != $user->id)) {
            return response()->json('Fallo al editar', 400);
        }

        $income->update($request->validated());
        return response()->json('Ingreso editado correctamente', 200);
    }

    public function destroy($id)
    {
        $user = auth()->user();
        $income = Income::find($id);

        if (!$user or !$income or ($income->user_id != $user->id)) {
            return response()->json('Fallo al borrar', 400);
        }

        $income->delete();
        return response()->json('Ingreso eliminado correctamente', 200);
    }
}
