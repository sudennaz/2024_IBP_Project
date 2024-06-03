<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }

     public function upload(Request $request)
    {
        $doctor=new doctor;
   $doctor->name=$request->name;
   $doctor->email=$request->email;
   $doctor->phone=$request->phone;
   $doctor->place=$request->place;
   $doctor->password=$request->password;

   $doctor->save();
   return redirect()->back()->with('message','User Added Successfully');
    }

    public function showappointment()
    {
        $data=appointment::all();
        return view('admin.showappointment',compact('data'));
    }

    public function approved($id)
    {
        $data=appointment::find($id);
        $data->user_id='approved';
        $data->save();
        return redirect()->back();
    }
    public function canceled($id)
    {
        $data=appointment::find($id);
        $data->user_id='canceled';
        $data->save();
        return redirect()->back();
    }

    public function showuser()
    {
        $data=doctor::all();

        return view('admin.showuser',compact('data'));
    }

    public function deletedoctor($id)
    {
        $data=doctor::find($id);
        $data->delete();
        return redirect()->back();
    }
}
