<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;


class InternsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $interns=DB::table('users')
            ->where('admin','=',0)->paginate(10);

        return view('interns.index', compact('interns'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $intern = User::find($id);
        return view('interns.edit', compact('intern'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id)
    {
        $intern = User::find($id);
        $intern->name = $request->input('name');
        $intern->password =  Hash::make($request->input('password'));
        $intern->update();

//        $affected = DB::table('points_history')
//            ->insert(['points' => $request->input('new_points'),'clientid'=>$id,'updated_by'=>$authid]);
        return redirect('interns')->with('success', 'Intern Updated');
    }



    /**
     * Remove the specified resource from storage.
     *
     */
    public function delete(Request $request)
    {
        DB::delete("DELETE FROM `users` WHERE  `id`=$request->id;");
        return redirect('interns')->with('delete', 'Intern Deleted');
    }
}
