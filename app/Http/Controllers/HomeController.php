<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Room;

use App\Models\Booking;

use App\Models\Contact;

use App\Models\Gallary;

use App\Models\Faq;

class HomeController extends Controller
{
    //

    public function details_room(Request $request, $id)
    {
        $title = ['title' => 'Room'];
        $room = Room::find($id);

        return view("home.details_room", compact("room"), $title);
    }

    public function add_booking(Request $request, $id)
    {
        $request->validate([
            'startDate' => 'required|date',
            'endDate' => 'date|after:startDate',
        ]);
        $data = new Booking;
        $data->room_id = $id;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;


        $startDate = $request->startDate;
        $endDate = $request->endDate;
        $isBooked = Booking::where('room_id', $id)
            ->where('start_date', '<=', $endDate)
            ->where('end_date', '>=', $startDate)->exists();
        if ($isBooked) {
            return redirect()->back()->with('message', 'Room is already booked Please try diferent date');
        } else {
            $data->start_date = $request->startDate;
            $data->end_date = $request->endDate;

            $data->save();

            return redirect()->back()->with('message', 'Room Booked Successfully');
        }
    }
    public function contact(Request $request)
    {
        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        $contact->save();

        return redirect()->back()->with('message', 'Message Sent Succesfully');
    }

    public function our_rooms(Request $request)
    {
        $title = ['title' => 'Booking'];
        $room = Room::all();
        return view('home.our_rooms', compact('room'), $title);
    }

    public function hotel_gallary(Request $request)
    {
        $title = ['title' => 'Hotel'];
        $gallary = Gallary::all();
        return view('home.hotel_gallary', compact('gallary'), $title);
    }

    public function contact_us(Request $request)
    {
        $title = ['title' => 'Contact'];
        return view('home.contact_us', $title);
    }

    public function faq(Request $request)
    {
        $title = ['title' => 'Faq'];
        $faq = Faq::all();
        return view('home.faq', compact('faq'), $title);
    }

    public function check_ticket(Request $request)
    {
        $data = ['title' => 'Ticket'];
        return view('home.check_ticket', $data);
    }
}
