<?php

namespace App\Http\Controllers;

use App\Models\Puramo;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;

class PuramoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puramos = Puramo::all();
        return view('index', compact('puramos'));
    }

    public function return()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $puramo = new Puramo();
        $puramo->title = $request->input('title');
        $puramo->user_id = Auth::id();
        $puramo->comment = $request->input('comment');
        $image = $request->file('image');

        $path = isset($image) ? $image->store('items', 'public') : '';

        $puramo->image = $path;

        $puramo->save();

        return redirect()->route('index')->with('flash_message', '保存しました。');
    }

    public function destroy(Puramo $puramo) 
    {
        $puramo->delete();

        return redirect()->route('index')->with('flash_message', '投稿を削除しました。');
    }

    public function detail($id)
    {
        $puramo = Puramo::find($id);

        return view('detail', compact('puramo'));
    }

    public function scrape()
    {
        // コマンドを実行し、結果を取得
        $command = 'cd C:\xampp\htdocs\RoboLog\public\php_scraper\target\debug && cargo run -- "https://www.amazon.co.jp/s?k=%E3%83%AD%E3%83%9C%E3%83%83%E3%83%88+%E3%83%97%E3%83%A9%E3%83%A2&__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=2BW4NY76D7GBJ&sprefix=%E3%83%AD%E3%83%9C%E3%83%83%E3%83%88+%E3%83%97%E3%83%A9%E3%83%A2%2Caps%2C192&ref=nb_sb_noss_1"';
        $result = shell_exec($command);

        // 実行結果を取得、ビューに渡す
        return view('scrape', compact('result'));
    }
}
