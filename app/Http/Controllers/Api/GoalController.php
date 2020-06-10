<?php

namespace App\Http\Controllers\Api;

use App\Goal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoalController extends Controller
{
    public function getGoal(Request $request)
    {
        $user = auth()->user();
        $goal = $user->goalParsed();
        return response()->json($goal, 200);
    }

    public function credit(Request $request)
    {
        $request->validate([
            'amount' => 'required',
        ]);
        $user = auth()->user();
        $goal = $user->goal;
        if ($goal) {
            $goal->amount = intval($request->amount);
        } else {
            $new = new Goal();
            $new->goalable_type = 'App\User';
            $new->goalable_id = $user->id;
            $new->name = 'monthly';
            $new->amount = intval($request->amount);
            $new->save();
        }
        return response()->json('Meta actualizada correctamente correctamente', 200);
    }
}
