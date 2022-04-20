<?php

namespace App\Http\Controllers;

use App\Models\SourceCode;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;

class AdminCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $code = SourceCode::all();
        return view('admin.code.index', [
            'code' => $code,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.code.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'image' => 'file|max:512|mimes:jpg,bmp,png',
        ]);

        $user = Auth::user();
        $date = date(' Y-m-d ');
        try {
            $code = new SourceCode;
            $code->date = $date;
            $code->name = $request->name;
            $code->link_download = $request->link_download;
            $code->link_demo = $request->link_demo;
            $code->author_code = $request->author_code;
            $code->image = $request->file('image');
            $nama_foto =  $code->name . "_" . $request->image_name;
            $code->image->move('files/code', $nama_foto);
            $code->image = $nama_foto;
            $code->save();
            return response()->json([
                'message' => 'OK',
                'data' => $code,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Internal error',
                'code' => '500',
                'error' => true,
                'errors' => $e,
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
