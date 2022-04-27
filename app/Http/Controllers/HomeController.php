<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Truck;
use App\Models\Pickup;
use App\Models\Feedback;






class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                $truck = truck::all();

                return view('user.home', compact('truck'));
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }
    public function index()
    {
        if (Auth::id()) {
            return redirect('home');
        } else {
            $truck = truck::all();
            return view('user.home', compact('truck'));
        }
    }

    public function pickup(Request $request)
    {
        $data = new pickup;
        $image = $request->file;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->file->move('garbageimage', $imagename);
        $data->image=$imagename;
        $data->fname = $request->firstName;
        $data->lname = $request->lastName;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->pickup_date= $request->pickupDate;
        $data->street_address = $request->address;
        $data->message = $request->message;
        $data->truck = $request->truck;
        $data->status = 'In Progress';
        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
        }
        $data->save();

        return redirect()->back()->with('message', 'Garbage Pickup Request Successful. We will contact you soon');
    }

    public function myappointment()
    {
        if(Auth::id())
        {
            $userid = Auth::user()->id;
            $appoint = pickup::where('user_id',$userid)->get();

            return view('user.my_appointment',compact('appoint'));

        }
        else{
            return redirect()->back();
        }
    }

    public function cancel_appoint($id)
    {
        $data = pickup::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function userfeedback(Request $request)
    {

        return view ('user.user_feedback');

    }

    public function feedback(Request $request)
    {
        $data = new feedback;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->message = $request->message;

        if(Auth::id())
        {
            $data->user_id= Auth::user()->id;
        }

        $data->save();
        return redirect()->back()->with('message', 'Feedback has been Successfully sent');

    }

    public function aboutus()
    {
        return view('user.aboutus');
    }

    public function lesson()
    {
        return view('user.lesson');
    }

    public function showpickup()
    {
        $truck = truck::all();
        return view('user.showpickup',compact('truck'))->with('message', 'Garbage Pickup Request Successful. We will contact you soon');
    }



}
