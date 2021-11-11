<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\YousefPost;
use Illuminate\Http\Request;

class SomeResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {$post=YousefPost::find($id);
        return view ('show',compact('post'));
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

        $post=YousefPost::find($id);



    return view ('edit',compact('post'));
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

        $req=new PostRequest();
        $this->validate($request, [
          'titlre'=> 'required']);
     $post =YousefPost::find($id);

     $post->titlre=$request["titlre"];
        $post->save();
        return view ('updataview');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post =YousefPost::find($id)->delete();
        return view ('deleteview');
        //
    }
}
