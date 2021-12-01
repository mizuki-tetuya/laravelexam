<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::table('todos')->get();
        return view('index', ['items'=>$items]);
    }
    public function create(Request $request)
    {
        $created_at = date('Y:m:d H::i:s');
        $validate_rule = [
            'content'=>'required|max:20'
        ];
        $this->validate($request, ['validate_rule'=>$validate_rule]);
        $param = [
            'content'=>$request->safe->only('content'),
            'created_at'=>$created_at,
        ];
        DB::table('todos')->insert($param);
        return redirect('/');
    }
    public function update(Request $request)
    {
        return view('index');
    }
    public function delete(Request $request)
    {
        return view('index');
    }
}
