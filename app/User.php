<?php

namespace App;

use Carbon\Carbon;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'last_name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Expenses
    public function expenses()
    {
        return $this->hasMany('App\Expense');
    }

    public function monthExpenses($date = null)
    {
        if ($date) {
            return ($this->expenses()->whereMonth('date', Carbon::parse($date)->format('m'))->whereYear('date', Carbon::parse($date)->format('Y'))->sum('amount') / 100);
        }
        return ($this->expenses()->whereMonth('date', now()->format('m'))->whereYear('date', now()->format('Y'))->sum('amount') / 100);
    }

    public function lastMonthExpense()
    {
        return $this->expenses()->whereMonth('date', now()->format('m'))->whereYear('date', now()->format('Y'))->latest('date')->first();
    }

    public function lasTwoMonthExpenses()
    {
        $dif = ($this->expenses()->whereMonth('date', now()->format('m'))->whereYear('date', now()->format('Y'))->sum('amount')) - ($this->expenses()->whereMonth('date', now()->subMonth()->format('m'))->whereYear('date', now()->subMonth()->format('Y'))->sum('amount'));
        return $dif / 100;
    }

    //Incomes
    public function incomes()
    {
        return $this->hasMany('App\Income');
    }

    public function monthIncomes($date = null)
    {
        if ($date) {
            return ($this->incomes()->whereMonth('date', Carbon::parse($date)->format('m'))->whereYear('date', Carbon::parse($date)->format('Y'))->sum('amount') / 100);
        }
        return ($this->incomes()->whereMonth('date', now()->format('m'))->whereYear('date', now()->format('Y'))->sum('amount') / 100);
    }

    public function lastMonthIncome()
    {
        return $this->incomes()->whereMonth('date', now()->format('m'))->whereYear('date', now()->format('Y'))->latest('date')->first();
    }

    public function lasTwoMonthIncomes()
    {
        $dif = ($this->incomes()->whereMonth('date', now()->format('m'))->whereYear('date', now()->format('Y'))->sum('amount')) - ($this->incomes()->whereMonth('date', now()->subMonth()->format('m'))->whereYear('date', now()->subMonth()->format('Y'))->sum('amount'));
        return $dif / 100;
    }

    //Goals
    public function goal()
    {
        return $this->morphOne('App\Goal', 'goalable');
    }

    public function goalParsed()
    {
        return $this->goal()->select('id','amount')->get()->map(function($item) {
            $item->amount = $item->amount / 100;
            return $item;
        })->first();
    }
}
