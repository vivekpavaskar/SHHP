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
        //uploading file
        $file = $request->file('videoData');
        $filename = $file->getClientOriginalName();
        $extension= explode('.',$filename);
        $newFileName=date('Ymdhis').'.'.end($extension);
        $path = storage_path().'/videoData/';
        $file->move($path, $newFileName);

        //storing into database
        $c=new Complaint;
        $c->uid=auth()->user()->id;
        $c->udesg=$request->input('udesg');
        $c->org=$request->input('org');
        $c->contact=$request->input('contact');
        $c->accused=$request->input('accused');
        $c->adesg=$request->input('adesg');
        $c->state=$request->input('state');
        $c->district=$request->input('district');
        $c->statement=$request->input('statement');
        $c->video=$newFileName;
        $c->save();
        return back()->with('success',"Your Complaint as been sent!!");
    }
}
