<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Truck;
use App\Models\Pickup;


class AdminController extends Controller
{
    public function addtruck()
    {
        return view('admin.add_truck');
    }

    public function upload(Request $request)
    {
        $truck = new truck;

        $image = $request->file;

        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('truckimage',$imagename);
        //sending image to DB
        $truck->image=$imagename;
        $truck->name=$request->name;
        $truck->number=$request->trucknumber;
        $truck->capacity=$request->capacity;
        $truck->dnumber=$request->drivernumber;
        $truck->save();

        return redirect()->back()->with('message','Truck Added Successfully');

    }


    public function showappointment()
    {
        $data = pickup::all();

        return view('admin.showappointment',compact('data'));
    }

    public function approved($id)
    {
        $data= pickup::find($id);
        $data->status = 'approved';
        $data->save();

        return redirect()->back();
    }

    public function cancled($id)
    {
        $data= pickup::find($id);
        $data->status = 'cancled';
        $data->save();

        return redirect()->back();
    }

    public function showtruck()
    {
        $data = truck::all();

        return view('admin.showtruck',compact('data'));
    }

    public function deletetruck($id)
    {
        $data = truck::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatetruck()
    {
        return view('admin.update_truck');
    }

}
