<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stamp;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class AtteController extends Controller
{
    //stampページ表示
    public function index()
    {
        return view('stamp');
    }

    public function store(Request $request)
    {
        //現在時刻
        $date = now();

        //リレーション紐付け
        $user = Auth::user(); //追記
        $id = Auth::id(); //追記


        //打刻機能
        var_dump("test");
        //bladeに書いてあるname属性の値を取る
        $stamp = $request->only(['stamp']);
        var_dump($stamp);
        print $stamp['stamp'];

        //$stampから$stamp['stamp']からstampの名前のキーを取ってきている
        $key = $stamp['stamp'];
        //テーブルに追加するもの

        $stamp = [
        'user_id' => $id,
        $key => $date->format('Y-m-d H:i:s'),
        ];

        //更新機能
        $update = ['finishTime' => $date->format('Y-m-d H:i:s'),
                'break-start'  => $date->format('Y-m-d H:i:s'),
                'break-finish'  => $date->format('Y-m-d H:i:s')];
        Stamp::find($request->id)->update($update);


        var_dump("stamptest");
        Stamp::create($stamp);

        return redirect('/')->with('message', '登録しました');
    }
}
