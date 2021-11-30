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
        $items = DB::select('select * from todos');
        return view('index', ['items'=>$items]);
    }
    public function create(Request $request)
    {
        $validate_rule = [
            'content'=>'required|max:20'
        ];
        $this->validate($request, ['validate_rule'=>$validate_rule]);
        $param = [
            $created_at=>$request->created_at,
            'content'=>$request->safe->only('content')
        ];
        DB::insert('insert into todos (content, created_at) values (content, created_at)', $param);
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
