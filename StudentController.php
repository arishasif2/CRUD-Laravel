<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function show()
    {
        $student= DB::table('student')->get();
        return view('home',['std'=>$student]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student= DB::table('student')->get();
        return view('create',['std'=>$student]);
    }

    public function create(Request $req)
    {
        DB::table('student')->insert([
            'name'=>$req->name,
            'city'=>$req->city,
            'marks'=>$req->marks,
        ]);
      //  return view('home',['std'=>$req])->with('status','Added Successfully!');
        return redirect(route('index'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student=DB::table('student')->find($id);
        return view('editform',['student'=>$student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id)
    {
        $student=DB::table('student')->where('id',$id)->update([
            'name'=>$req->name,
            'city'=>$req->city,
            'marks'=>$req->marks,
        ]);
        return view(route('edit'))->with('status','Updation Successfull!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('student')->where('id',$id)->delete();
        return redirect(route('index'))->with('status','Deleted Successfully!');
    }
}
