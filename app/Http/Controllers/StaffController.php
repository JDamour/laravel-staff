<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $staffs=Staff::all();
        $columns = DB::select("SHOW COLUMNS FROM `staff`");
        $sideGenders = DB::select("SELECT DISTINCT gender  FROM `staff`");
         $sideCivilS = DB::select("SELECT DISTINCT civil_status  FROM `staff`");
         $sidePOSITIONS = DB::select("SELECT DISTINCT current_position  FROM `staff`");

//
//       dd($sidePOSITION);
        return view('welcome',compact('staffs','columns','sideGenders','sideCivilS','sidePOSITIONS'));
    }

  public function search()
    {
        $inputColumns=Input::get('my-select');
        $columns = " ";
        $x = 1;
        foreach ($inputColumns as $inputColumn => $value){

                $columns .=$value;
            if($x < count ($inputColumns)) {
                $columns .= ', ';
            }
            $x++;
        }
        $staffs=DB::select("SELECT ".$columns."  FROM `staff`");
//        dd((object) $inputColumns);
        $columns = DB::select("SHOW COLUMNS FROM `staff`");
        $sideGenders = DB::select("SELECT DISTINCT gender  FROM `staff`");
         $sideCivilS = DB::select("SELECT DISTINCT civil_status  FROM `staff`");
         $sidePOSITIONS = DB::select("SELECT DISTINCT current_position  FROM `staff`");

//
//       dd($sidePOSITION);
        return view('columns',compact('staffs','inputColumns','columns','sideGenders','sideCivilS','sidePOSITIONS'));
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
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        //
    }
}
