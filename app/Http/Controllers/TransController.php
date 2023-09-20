<?php

namespace App\Http\Controllers;
use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;


class TransController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trans = DB::table('patients')
            ->join('points_history','patients.id','=','points_history.clientid')
            ->join('users','users.id','=','points_history.updated_by')
            ->select('patients.fname','patients.lname','patients.email','patients.phone_1','patients.phone_2','patients.new_points','points_history.points','users.name','points_history.created' )
            ->orderBy('points_history.id','desc')->paginate(25);
        return view('trans.index', compact('trans'));
    }

    /**
     * Store a newly created resource in storage
     */
    public function store(Request $request)
    {
//        Create the vars
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $phone_1 = $request->input('phone_1');
        $phone_2 = $request->input('phone_2');
        $email = $request->input('email');

//        Store in DB
        $data=array('fname'=>$fname,"lname"=>$lname,"phone_1"=>$phone_1,"phone_2"=>$phone_2,"email"=>$email,"new_points"=>0);
        DB::table('patients')->insert($data);

        return redirect()->route('patients')->with('status','Client '.$fname.' '.$lname.' has been created ');
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(Client $client)
    {
        return view('patients.show',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $client = Clients::find($id);

//        $client = DB::table('patients')
//            ->join('points_history','patients.id','=','points_history.clientid')
//            ->select('patients.id','patients.fname','patients.lname','patients.email','patients.phone_1','patients.phone_2','points_history.points')
//            ->where('patients.id','=',$id);
        $current_points = DB::table('points_history')
            ->select('points')
            ->where('clientid','=',$id)
            ->orderBy('points','desc')
            ->first();
        return view('patients.edit', compact('client','current_points'));
    }

    public function search(Request $request)
    {

        //        Create the vars

        $search = $request->input('search');


        $client_data = DB::table('patients')
            ->select('patients.id','patients.fname','patients.lname','patients.email','patients.phone_1','patients.phone_2','patients.new_points')
            ->where('patients.phone_1','LIKE','%'.$search.'%')
            ->orWhere('patients.lname','LIKE','%'.$search.'%')
            ->orWhere('patients.email','LIKE','%'.$search.'%')
            ->orWhere('patients.phone_1','LIKE','%'.$search.'%')
            ->orWhere('patients.phone_2','LIKE','%'.$search.'%')->get();

        return view('patients.search', compact('client_data'));
    }


    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id,$authid)
    {
        $client = Clients::find($id);
        $client->fname = $request->input('fname');
        $client->lname = $request->input('lname');
        $client->email = $request->input('email');
        $client->phone_1 = $request->input('phone_1');
        $client->phone_2 = $request->input('phone_2');
        $client->new_points = $request->input('new_points');
        $client->update();

        $affected = DB::table('points_history')
            ->insert(['points' => $request->input('new_points'),'clientid'=>$id,'updated_by'=>$authid]);
        return redirect('patients')->with('status', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function delete(Request $request)
    {
        DB::delete("DELETE FROM `patients` WHERE  `id`=$request->id;");
        return redirect('patients')->with('status', 'Data Updated');
    }
}
