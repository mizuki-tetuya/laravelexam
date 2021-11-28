<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class TodoController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function create(Request $request)
    {
        $validate_rule = [
            'addtext'=> 'required|max:20'
        ];
        $this->validate($request, $validate_rule);
        $date = Carbon::now();
        $param = [
            'date' => $date,
            'item' => $request->addtext
        ];
        return view('index' ['param'->$param]);
    }
    public function update(Request $request)
    {

    }
    public function delete(Request $request)
    {

    }
}
