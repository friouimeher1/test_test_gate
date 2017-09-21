<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Technicien;
use App\Client;
use Auth;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $admin = Auth::guard('admin')->user();
      //dd($admin);
      $notifications = $admin->unreadnotifications()->count();
       $techniciens=Technicien::where('approve', 0)->get();
      // dd($techniciens);
      $x=Technicien::count();
       $clients=Client::count();

       return view('admin.home',compact('techniciens','clients','x','notifications'));
    }

    public function approve(Request $request)
 {
     $post = Technicien::find($request->technicienId);
     $approveVal = $request->approve;
     if($approveVal == 'on'){
         $approveVal = 1;
     }else{
         $approveVal = 0;
     }
     $post->approve = $approveVal;
     $post->save();
     return back();
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


    public function index1()
    {
       $techniciens=Technicien::where('approve', 1)->get();
         return view('admin.backend.listes_artisans',compact('techniciens'));
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
      Technicien::find($id)->delete();
      return redirect()->back();
    }


}
