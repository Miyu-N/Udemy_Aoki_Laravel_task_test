<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test;

class TestController extends Controller
{
    //
    public function index()
    {

        $values = Test::all();//全部のデータ

        //dd($values);//変数の中身を表示

        return view('tests.test', compact('values'));//渡す変数は''で囲む
    }
}
