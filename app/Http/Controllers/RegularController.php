<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complaint;
class RegularController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function regComplaint()
    {
        return view('regular.regComplaint');
    }

    public function regComplaintProcess(Request $request)
    {
        // dd(public_path());
        // dd(date('Ymdhis'));

        $file = $request->file('videoData');
        $filename = $file->getClientOriginalName();
        $extension= explode('.',$filename);
        $newFileName=date('Ymdhis').'.'.end($extension);
        $path = storage_path().'/videoData/';
        $file->move($path, $newFileName);
        $c=new Complaint;
        $c->uid=auth()->user()->id;
        $c->statement=$request->input('statement');
        $c->video=$newFileName;
        $c->save();
        return back();
    }
}
