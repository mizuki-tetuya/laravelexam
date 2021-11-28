<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\todo;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $validate_rule = [
            'addtext'=>'required'
        ];
        $this->validate($request, $validate_rule);
        $items = todos::all();
        return view('index', ['items'=>$items]);
    }
    public function create(Request $request)
    {
        $date = Carbon::now();
        $param = [
            'date' => $date,
            'item' => $request->addtext
        ];
        return view('create', $param);
    }
    public function update(Request $request)
    {

    }
    public function delete(Request $request)
    {

    }
}
