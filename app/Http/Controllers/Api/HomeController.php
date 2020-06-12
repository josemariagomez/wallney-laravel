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
        $saved = $incomes - $expenses;
        $main_card = [
            'ahorro' => round($saved, 2),
            'meta' => optional($user->goalParsed())->amount,
        ];
        $expenses_card = [
            'dinero' => optional($user->lastMonthExpense())->amount ? optional($user->lastMonthExpense())->amount/ 100 : 0,
            'mensaje' => optional($user->lastMonthExpense())->title ?? 'No hay gastos este mes'
        ];
        $incomes_card = [
            'dinero' => optional($user->lastMonthIncome())->amount ? optional($user->lastMonthIncome())->amount/ 100 : 0,
            'mensaje' => optional($user->lastMonthIncome())->title ?? 'No hay ingresos este mes'
        ];
        $last_month = ($user->monthIncomes(now()->subMonth()) - $user->monthExpenses(now()->subMonth()));

        setlocale(LC_ALL, 'es_ES');
        $month_name = substr(now()->formatLocalized('%B'), 0, 3);
        $date = '1 '. substr(now()->formatLocalized('%B'), 0, 3).' - '.now()->day.' '.$month_name;

        $data = [
            'fecha' => $date,
            'ingresos' => $incomes,
            'gastos' => $expenses,
            'main_card' => $main_card,
            'gastos_card' => $expenses_card,
            'ingreso_card' => $incomes_card,
            'mes_pasado' => $last_month, 
        ];

        return $data;
    }

    public function profile()
    {
        $user = auth()->user();
        $data = [
            'meta' => optional($user->goal)->amount / 100,
            'gastos' => $user->expenses()->sum('amount') / 100,
            'ingresos' => $user->incomes()->sum('amount') / 100,
            'ahorros' => ($user->incomes()->sum('amount') - $user->expenses()->sum('amount')) / 100,
        ];

        return $data;
    }

    public function getMonths()
    {
        $user = auth()->user();
        $data = [
            'meta' => optional($user->goal)->amount / 100,
            'gastos' => $user->expenses()->sum('amount') / 100,
            'ingresos' => $user->incomes()->sum('amount') / 100,
            'ahorros' => ($user->incomes()->sum('amount') - $user->expenses()->sum('amount')) / 100,
        ];

        return $data;
    }
}
