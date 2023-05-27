<?php

namespace App\Http\Controllers;

use App\Models\Puramo;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $puramo->image = $request->input('image');

        $puramo->save();

        return redirect()->route('index')->with('flash_message', '保存しました。');
    }

    public function showImage(Puramo $puramo)
    {
      $puramo_images = Puramo::select('image')->get();

      $puramo_image_list = [];

      foreach ($puramo_images as $puramo_image)
      {
        $array = [$puramo_image->image];
        array_push($puramo_image_list, $array);
      }
      return response()->json($puramo_image_list);


}
}
