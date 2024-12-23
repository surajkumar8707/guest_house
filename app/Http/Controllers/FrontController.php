<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\Room;
use App\Mail\BookingMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function home()
    {
        $sliders = getAllSlider(1);
        $rooms = Room::where('status', 1)->get();
        // dd($rooms);
        // dd($sliders->toArray());
        return view('home', compact('sliders', 'rooms'));
    }

    public function roomDetailPage($id)
    {
        $room = Room::findOrFail($id); // Use findOrFail to handle cases where the room is not found
        return view('rooms_details', compact('room'));
    }

    public function openRoomBookingPage($id = null)
    {
        $rooms = Room::where('status', 1)->get();
        $room = Room::find($id); // Use findOrFail to handle cases where the room is not found
        return view('rooms_booking', compact('room', 'rooms'));
    }

    public function roomBookingStore(Request $request)
    {
        $validateData = $request->validate([
            'room_id' => 'required',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'city' => 'required|string|max:255',
            'arrival' => 'required|date',
            'departure' => 'required|date',
        ]);

        // Save the booking to the database
        $booking = Booking::create($validateData);

        // Send the booking confirmation email to the customer
        Mail::to($booking->email)->send(new BookingMail($booking));

        // Send the booking confirmation email to the Admin
        if(isset(getSettings()->email) and !empty(getSettings()->email)){
            Mail::to(getSettings()->email)->send(new BookingMail($booking));
        }
        else{
            Mail::to('daarukavaneecoresort@gmail.com')->send(new BookingMail($booking));
        }

        // Redirect with success message
        return redirect()->route('front.room')->with('success', 'Your room has been booked successfully!');
    }

    public function aboutUs()
    {
        return view('about');
    }
    public function room()
    {
        $rooms = Room::where('status', 1)->get();
        return view('room', compact('rooms'));
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function blog()
    {
        return view('blog');
    }

    public function privacyPolicy()
    {
        return view('privacy_policy');
    }

    public function termsCondition()
    {
        return view('terms_condition');
    }

    public function contactUs()
    {
        return view('contact');
    }

    public function saveContactUs(Request $request)
    {
        $validate = $request->validate([
            'name' => 'nullable',
            'email' => 'required|email',
            'phone' => 'nullable',
            'subject' => 'nullable',
            'message' => 'required',
        ]);

        // dd($validate);
        $contact = Contact::create($validate);
        // dd($contact);
        return redirect()->back()->with('success', "Thank you for contacting US");
    }
}
