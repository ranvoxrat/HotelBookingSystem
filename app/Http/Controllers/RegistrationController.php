<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use RealRashid\SweetAlert\Facades\Alert;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'room' => 'required',
            'amount' => 'required',
            'checkinDate' => 'required|date',
            'checkinTime' => 'required',
            'checkoutDate' => 'required|date',
            'checkoutTime' => 'required',
            'preference' => 'required',
            'adults' => 'required|integer',
            'childs' => 'required|integer',
        ]);

        $registration = new Registration();
        $registration->fname = $validatedData['fname'];
        $registration->lname = $validatedData['lname'];
        $registration->address = $validatedData['address'];
        $registration->city = $validatedData['city'];
        $registration->state = $validatedData['state'];
        $registration->zip = $validatedData['zip'];
        $registration->phone = $validatedData['phone'];
        $registration->email = $validatedData['email'];
        $registration->room = $validatedData['room'];
        $registration->amount = $validatedData['amount'];
        $registration->checkinDate = $validatedData['checkinDate'];
        $registration->checkinTime = $validatedData['checkinTime'];
        $registration->checkoutDate = $validatedData['checkoutDate'];
        $registration->checkoutTime = $validatedData['checkoutTime'];
        $registration->preference = $request->input('preference'); 
        $registration->adults = $validatedData['adults'];
        $registration->childs = $validatedData['childs'];
        $registration->save();
        Alert::success('Success', 'Reservation Success');
        return redirect()->route('table');
    }
    public function showRegistration(){
        $registrations=Registration::select( 'fname','lname','address','phone','room','amount','checkinDate','checkinTime','checkoutDate','checkoutTime','preference','adults','childs')->get();
        return view('table', compact('registrations'));
    }
    
}
