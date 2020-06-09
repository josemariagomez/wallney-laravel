<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $expenses = $user->monthExpenses();
        $incomes = $user->monthIncomes();
        $saved = floatval($incomes) - floatval($expenses);
        dd(floatval($incomes));
        $main_card = [
            'ahorro' => number_format($saved, 2),
            'meta' => 200,
        ];
        $expenses_card = [
            'dinero' => optional($user->lastMonthExpense())->amount / 100,
            'mensaje' => optional($user->lastMonthExpense())->title ?? 'No hay gastos este mes'
        ];
        $incomes_card = [
            'dinero' => optional($user->lastMonthIncome())->amount / 100,
            'mensaje' => optional($user->lastMonthIncome())->title ?? 'No hay ingresos este mes'
        ];

        $data = [
            'ingresos' => $incomes,
            'gastos' => $expenses,
            'main_card' => $main_card,
            'gastos_card' => $expenses_card,
            'ingreso_card' => $incomes_card,
        ];

        return $data;
    }
}
