<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test;

use Illuminate\Support\Facades\DB;//ファサード：入口：設定はconfig app.php

class TestController extends Controller
{
    //
    public function index()
    {

        $values = Test::all();//全部のデータ

        $tests = DB::table('tests')
        ->select('id')
        ->get();

        dd($tests);//変数の中身を表示

        return view('tests.test', compact('values'));//渡す変数は''で囲む
    }
}
