<?php

namespace App\Http\Controllers;

use App\VueTables\EloquentVueTables;
use Illuminate\Http\Request;

class AdminTurnController extends Controller
{
    public function turns () {
        return view('admin.turns');
    }

    public function turnsJson () {
        if(request()->ajax()) {
            $vueTables = new EloquentVueTables;
            $data = $vueTables->get(new Turn, ['id', 'date', 'hour'], ['patient']);
            return response()->json($data);
        }
        return abort(401);
    }

}