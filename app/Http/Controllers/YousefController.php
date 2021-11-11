<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\YousefPost;
use Illuminate\Http\Request;

class YousefController extends Controller
{
    //
    public function showrun(){
        return view('getview');
    }
    public function create_save(Request $request){
//       $this->validate($request, [
//           'titlre'=> 'required',
//           'des'=>'required']);
        $req=new PostRequest();
        $this->validate($request,$req->rules());
        $y=new YousefPost();
        $y->fill($request->all());
        $y->save();
        return view('getview');

    }
}
