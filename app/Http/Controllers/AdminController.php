<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Truck;
use App\Models\Pickup;

use App\Notifications\SendEmailNotification;
use Notification;

class AdminController extends Controller
{
    public function addtruck()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
                return view('admin.add_truck');

            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
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
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
                $data = pickup::all();

                return view('admin.showappointment',compact('data'));

            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }

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

    public function updatetruck($id)
    {
        $data = truck::find($id);

        return view('admin.update_truck',compact('data'));
    }

    public function edittruck(Request $request,$id)
    {
        $truck = truck::find($id);

        $truck->name = $request->name;
        $truck->number = $request->number;
        $truck->capacity = $request->capacity;
        $truck->dnumber = $request->dnumber;

        $image = $request->file;

        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->file->move('truckimage',$imagename);
            $truck->image = $imagename;

        }

        $truck->save();
        return redirect()->back()->with('message','Truck Details Updated Successfully!');

    }

    public function emailview ($id)
    {
        $data = pickup::find($id);

        return view('admin.email_view',compact('data'));
    }

    public function sendemail(Request $request,$id)
    {
        $data = pickup::find($id);
        $details = [
            'greeting' => $request->greeting,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'endpart'=> $request->endpart

        ];
        Notification::send($data,new SendEmailNotification($details));

        return redirect()->back()->with('message','Email Sent Successfully.');
    }


    public function showfeedback()
    {
        $data = Feedback::all();
        return view('admin.showfeedback',compact('data'));
    }

}
