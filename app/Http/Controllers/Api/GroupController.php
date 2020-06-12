<?php

namespace App\Http\Controllers\Api;

use App\Group;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class GroupController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        return $user->groups()->get()->map(function($item) use ($user) {
            return $item->withSaved($user->id);
        });
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'target' => 'required',
            'amount' => 'required',
            'percent' => 'required',
        ]);
        $user = auth()->user();
        $req = request();

        $uuid = '';
        
        $valid = false;
        while ($valid == false) {
            $uuid = Str::random(8);
            $valid = (Group::where('uuid', $uuid)->count() == 0) ? true : false;
        }

        $percent = ($req->percent > 100) ? 100 : $req->percent;

        $group = $user->groups()->create([
            'admin_id' => $user->id,
            'name' => $req->name,
            'target' => $req->target,
            'amount' => $req->money,
            'percent' => $percent,
            'uuid' => $uuid
        ]);
        
        return response()->json('Grupo creado correctamente', 200);
    }

    public function join($uuid)
    {
        $user = auth()->user();
        $group = Group::where('uuid', $uuid)->first();
        if (!$group) return response()->json('El grupo no existe', 400);

        $groups_id = $user->groups()->pluck('groups.id')->toArray();
        if (!in_array($group->id, $groups_id)) {
            $user->groups()->attach($group->id);
        } else {
            response()->json('Añadido al grupo correctamente', 200);
        }

        $total_percent = $user->groups()->sum('percent');
        if (($group->percent + $total_percent) > 100) {
            return response()->json('Ya has llegado al límite de tus ahorros', 400);
        }

        return response()->json('Añadido al grupo correctamente', 200);
    }

    public function getGroup($id)
    {
        $user = auth()->user();
        $group = Group::where('id', $id)->first();
        if (!$group) return response()->json('El grupo no existe', 400);

        $from = DB::table('group_user')->where('user_id', $user->id)->where('group_id', $group->id)->first()->created_at;
        $to = now();
        $percent = $group->percent;

        $users = $group->users()->get()->map(function($user) use ($from, $to, $percent){
            $parsed = [];
            $incomes = $user->incomes()->whereBetween('date', [$from, $to])->sum('amount');
            $expenses = $user->expenses()->whereBetween('date', [$from, $to])->sum('amount');
            $parsed['username'] = $user->username;
            $parsed['money'] = round(((($incomes - $expenses) * $percent) / 100)/ 100, 2);

            return $parsed;
        });

        $data = [
            'admin' => ($user->id == $group->admin_id) ? true : false,
            'group' => $group,
            'users' => $users
        ];

        return response()->json($data, 200);
    }

    public function update($id)
    {
        request()->validate([
            'name' => 'required',
            'target' => 'required',
            'amount' => 'required',
        ]);
        $req = request();
        $user = auth()->user();
        $group = Group::where('id', $id)->first();
        if (!$group) return response()->json('El grupo no existe', 400);
        if ($user->id != $group->admin_id) {
            return response()->json('Solo puede editar un grupo el administrador', 400);
        }

        $group->name = $request->name;
        $group->target = $request->target;
        $group->amount = $request->amount;
        $group->save();
        return response()->json('Eliminado correctamente', 200);
    }

    public function destroy($id)
    {
        $user = auth()->user();
        $group = Group::where('id', $id)->first();
        if (!$group) return response()->json('El grupo no existe', 400);

        if ($user->id != $group->admin_id) {
            return response()->json('Solo puede borrar un grupo el administrador', 400);
        }
        $group->delete();
        return response()->json('Eliminado correctamente', 200);
    }
}
