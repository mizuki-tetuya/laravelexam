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
            'content'=>'required|max:20',
        ];
        $this->validate($request, $validate_rule);
        $param = [
            'content'=>$request->content,
        ];
        DB::table('todos')->insert($param);
        return redirect('/');
    }
    public function update(Request $request)
    {
        $param = [
            'content'=>$request->content,
        ];
        DB::table('todos')->update($param);
        return redirect('/');
    }
    public function delete(Request $request)
    {
        $param = ['content'=>$request->content];
        $items = DB::table('todos')->delete($param);
        return redirect('/');
    }
}
