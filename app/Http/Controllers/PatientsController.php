<?php

namespace App\Http\Controllers;
use App\Models\Patients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $patients = DB::table('patients')
            ->join('users','users.id','=','patients.userid')
            ->select('patients.*','users.name','users.id as uid')
            ->paginate(30);
        return view('patients.index', compact('patients'));
    }

    public function patients_nointern()
    {

        $patients = DB::table('patients')
            ->select('patients.*')
            ->whereNotIn('patients.userid', function($q){
                $q->select('id')->from('users');
            })->paginate(30);
        return view('patients.nointern', compact('patients'));
    }


    /**
     * Store a newly created resource in storage
     */
    public function store(Request $request,$authid)
    {
//        Create the vars
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $identification = $request->input('identification');
        $sex = $request->input('sex');
        $dateofbirth= $request->input('dateofbirth');
        $email = $request->input('email');
        $phone_1 = $request->input('phone_1');
        $phone_2 = $request->input('phone_2');
        $notes = $request->input('notes');
        $address = $request->input('address');
        $town = $request->input('town');
        $postal = $request->input('postal');
        $relative_name = $request->input('relative_name');
        $relativity= $request->input('relativity');
        $relative_phone = $request->input('relative_phone');





//        Store in DB
        $data=array(
            'fname'=>$fname,
            "lname"=>$lname,
            "identification"=>$identification,
            "sex"=>$sex,
            "dateofbirth"=>$dateofbirth,
            "email"=>$email,
            "phone_1"=>$phone_1,
            "phone_2"=>$phone_2,
            "notes"=>$notes,
            "address"=>$address,
            "town"=>$town,
            "postal"=>$postal,
            "relative_name"=>$relative_name,
            "relativity"=>$relativity,
            "relative_phone"=>$relative_phone,
            "updated_by"=>$authid,
            "userid"=>$authid,
        );
        DB::table('patients')->insert($data);
        $id = DB::getPdo()->lastInsertId();
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
        $patient = DB::table('patients')
            ->join('users','users.id','=','patients.userid')
            ->where('patients.id','=',$id)
            ->select('patients.*','users.name')->first();


        $interns = DB::table('users')
            ->where('admin','=','0')
            ->select('id','name','email')
            ->get();


        $visits = DB::table('patients')
            ->join('visits','patients.id','=','visits.patientid')
            ->join('users','users.id','=','visits.updated_by')
            ->select('visits.visit','visits.created','users.name','visits.id as vid')
            ->where('patients.id','=',$id)
            ->orderBy('visits.id','desc')->get();

        return view('patients.edit', compact('patient','visits','interns'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_nointern($id)
    {
        $patient = DB::table('patients')
            ->where('patients.id','=',$id)
            ->select('patients.*')->first();


        $interns = DB::table('users')
            ->where('admin','=','0')
            ->select('id','name','email')
            ->get();


        $visits = DB::table('patients')
            ->join('visits','patients.id','=','visits.patientid')
            ->join('users','users.id','=','visits.updated_by')
            ->select('visits.visit','visits.created','users.name','visits.id as vid')
            ->where('patients.id','=',$id)
            ->orderBy('visits.id','desc')->get();

        return view('patients.edit_no_intern', compact('patient','visits','interns'));
    }

    public function newvisit($id){

        $patient = Patients::find($id);

        $visits = DB::table('patients')
            ->join('visits','patients.id','=','visits.patientid')
            ->join('users','users.id','=','visits.updated_by')
            ->select('patients.visits','visits.created','users.name' ,'visits.id as vid')
            ->where('patients.id','=',$id)
            ->orderBy('visits.id','desc')->count();


        return view('patients.visit', compact('patient','visits'));
    }


    /**
     * Store a newly created resource in storage
     */
    public function storevisit(Request $request,$authid){

        //        Create the vars
        $patientid = $request->input('patientid');
        $visit = $request->input('visit');
        $comment = $request->input('comment');
        $date = $request->input('date');
        $study_year = $request->input('study_year');
        $job = $request->input('job');
        $job_feel = $request->input('job_feel');
        $psyc = $request->input('psyc');
        $psyc_when= $request->input('psyc_when');
        $psyc_where= $request->input('psyc_where');
        $psyc_exp = $request->input('psyc_exp');
        $psyc_reference = $request->input('psyc_reference');
        $reference_who = $request->input('reference_who');
        $psyc_visit_why = $request->input('psyc_visit_why');
        $psyc_travma = $request->input('psyc_travma');
        $doctor_reference = $request->input('doctor_reference');
        $doctor_who = $request->input('doctor_who');
        $medical_prob = $request->input('medical_prob');
        $meds_reference = $request->input('meds_reference');
        $meds_what= $request->input('meds_what');
        $alcohol = $request->input('alcohol');
        $psyc_history_prob = $request->input('psyc_history_prob');
        $hospital = $request->input('hospital');

//        Store in DB
        $data=array(
            'patientid'=>$patientid,
            "visit"=>$visit,
            "updated_by"=>$authid,
            "comment"=>$comment,
            'date'=>$date,
            "study_year"=>$study_year,
            "job"=>$job,
            "job_feel"=>$job_feel,
            'psyc'=>$psyc,
            "psyc_when"=>$psyc_when,
            "psyc_where"=>$psyc_where,
            "psyc_exp"=>$psyc_exp,
            'psyc_reference'=>$psyc_reference,
            "reference_who"=>$reference_who,
            "psyc_visit_why"=>$psyc_visit_why,
            "psyc_travma"=>$psyc_travma,
            'doctor_reference'=>$doctor_reference,
            "doctor_who"=>$doctor_who,
            "medical_prob"=>$medical_prob,
            "meds_reference"=>$meds_reference,
            'meds_what'=>$meds_what,
            "alcohol"=>$alcohol,
            "psyc_history_prob"=>$psyc_history_prob,
            "hospital"=>$hospital,

        );
        DB::table('visits')->insert($data);

        $patient = Patients::find($patientid);


        $visits = DB::table('patients')
            ->join('visits','patients.id','=','visits.patientid')
            ->join('users','users.id','=','visits.updated_by')
            ->select('visits.visit','visits.created','users.name' ,'visits.id as vid')
            ->where('patients.id','=',$patientid)
            ->orderBy('visits.id','desc')->get();


        $interns = DB::table('users')
            ->where('admin','=','0')
            ->select('id','name','email')
            ->get();

        return view('patients.edit', compact('patient','visits','interns'));
    }

    public function view_visit($id){


        $visit = DB::table('visits')
            ->join('patients','visits.patientid','=','patients.id')
            ->select('visits.*', DB::raw('CONCAT(patients.fname," ",patients.lname) as pname'))
            ->where('visits.id','=',$id)
            ->first();
        return view('patients.view_visit', compact('visit'));
    }

    public function search(Request $request)
    {

        //        Create the vars

        $search = $request->input('search');


        $client_data = DB::table('patients')
            ->select('patients.id','patients.fname','patients.lname','patients.email','patients.phone_1','patients.phone_2','patients.new_points')
            ->where('patients.phone_1','LIKE','%'.$search.'%')
            ->orWhere('patients.phone_2','LIKE','%'.$search.'%')->get();

        return view('patients.search', compact('client_data'));
    }


    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id,$authid)
    {
        $patient = Patients::find($id);
        $patient->fname = $request->input('fname');
        $patient->lname = $request->input('lname');
        $patient->identification = $request->input('identification');
        $patient->sex = $request->input('sex');
        $patient->dateofbirth= $request->input('dateofbirth');
        $patient->email = $request->input('email');
        $patient->phone_1 = $request->input('phone_1');
        $patient->phone_2 = $request->input('phone_2');
        $patient->notes = $request->input('notes');
        $patient->address = $request->input('address');
        $patient->town = $request->input('town');
        $patient->postal = $request->input('postal');
        $patient->relative_name = $request->input('relative_name');
        $patient->relativity= $request->input('relativity');
        $patient->relative_phone = $request->input('relative_phone');
        $patient->updated_by = $authid;
        $patient->userid = $request->input('newintern');


        $patient->update();




        return redirect('patients/edit/'.$id)->with('status', 'Data Updated ');
    }

    public function redeem(Request $request, $id,$authid)
    {
        $client = Clients::find($id);
        $redeem_500 = $client->new_points - $request->input('redeemed_points');
        $client->new_points = $redeem_500;
        $client->update();
        $redeemed_points = $client->new_points - $request->input('redeemed_points');

        $affected = DB::table('points_history')
            ->insert(['points' => -$request->input('redeemed_points'),'clientid'=>$id,'updated_by'=>$authid,'comment'=>$request->input('text_redeemed_points')]);
       return redirect('patients/edit/'.$id)->with('status', $redeemed_points.' Points Redeemed');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function delete(Request $request,$id,$authid)
    {
        $status = 'Not Allowed';
        $check = DB::table('users')
            ->where('id','=',$authid)
            ->where('admin','=',1)
            ->count();
        if ($check >0 ){
            DB::delete("DELETE FROM `patients` WHERE  `id`=$request->id;");
            $status = 'Client Deleted  ';
        }

//
        return redirect('patients')->with('status',$status );
    }
}
