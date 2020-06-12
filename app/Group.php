<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'admin_id', 'name', 'target', 'description', 'amount', 'percent', 'uuid'
    ];

    protected $dates = [
        'created_at', 'updated_at', 'deleted_at'
    ];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function withSaved($id)
    {
        $user = User::find($id);
        if (!$user) return $this;

        $from = DB::table('group_user')->where('user_id', $id)->where('group_id', $this->id)->first()->created_at;
        $to = now();

        $incomes = $user->incomes()->whereBetween('date', [$from, $to])->sum('amount');
        $expenses = $user->expenses()->whereBetween('date', [$from, $to])->sum('amount');
        $this->saved = round((($incomes - $expenses) * $this->percent) / 10000, 2);
        return $this;
    }
}
