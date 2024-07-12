<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use App\Models\Room;

use App\Models\Booking;

use App\Models\Gallary;

use App\Models\Contact;

use App\Models\Faq;

use Notification;

use Illuminate\Support\Facades\Log;

use App\Notifications\SendEmailNotification;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['home']]);
    }
    public function index()
    {
        if (Auth::id()) {
            $usertype = Auth::user()->usertype;

            if ($usertype == 'user') {
                $room = Room::all();
                $gallary = Gallary::all();
                return view('home.index', compact('room', 'gallary'));
            } else if ($usertype == 'admin') {
                return view('admin.index');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('home.index'); // Redirect to login if not authenticated
        }
    }

    public function home(Request $request)
    {
        $title = ['title' => 'Home'];
        
        $room = Room::all();

        $gallary = Gallary::all();

        return view('home.index', compact('room', 'gallary'), $title);
    }

    public function create_room()
    {
        return view('admin.create_room');
    }

    public function add_room(Request $request)
    {
        $data = new Room();
        $data->room_title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->wifi = $request->wifi;
        $data->room_type = $request->type;

        $image = $request->image;

        if ($image) {
            $nameimage = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('room', $nameimage);

            $data->image = $nameimage;
        }

        $data->save();

        return redirect()->back();
    }

    public function view_room()
    {
        $data = Room::all();

        return view('admin.view_room', compact('data'));
    }

    public function delete_room($id)
    {
        $data = Room::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function update_room($id)
    {
        $data = Room::find($id);

        return view('admin.update_room', compact('data'));
    }

    public function edit_room(Request $request, $id)
    {
        $data = Room::find($id);
        $data->room_title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->wifi = $request->wifi;
        $data->room_type = $request->type;
        $image = $request->image;

        if ($image) {
            $nameimage = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('room', $nameimage);

            $data->image = $nameimage;
        }

        $data->save();

        return redirect()->back();
    }
    public function bookings()
    {
        $data = Booking::all();
        return view('admin.bookings', compact('data'));
    }

    public function delete_booking($id)
    {
        $data = Booking::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function approve_book($id)
    {
        $booking = Booking::find($id);
        $booking->status = 'approve';
        $booking->save();
        return redirect()->back();
    }

    public function reject_book($id)
    {
        $booking = Booking::find($id);
        $booking->status = 'rejected';
        $booking->save();
        return redirect()->back();
    }

    public function view_gallary()
    {
        $gallary = Gallary::all();
        return view('admin.gallary', compact('gallary'));
    }

    public function upload_gallary(Request $request)
    {
        $data = new Gallary;
        $image = $request->image;

        if ($image) {
            $nameimage = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('gallary', $nameimage);
            $data->image = $nameimage;
            $data->save();
            return redirect()->back();
        }
    }

    public function delete_gallary($id)
    {
        $data = Gallary::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function all_messages()
    {
        $data = Contact::all();
        return view('admin.all_messages', compact('data'));
    }

    public function send_mail($id)
    {
        $data = Contact::find($id);
        return view('admin.send_mail', compact('data'));
    }

    public function mail(Request $request, $id)
    {
        $data = Contact::find($id);
        $details = [
            'greeting' => $request->greeting,

            'body' => $request->body,

            'action_text' => $request->action_text,

            'action_url' => $request->action_url,

            'endline' => $request->endline,
        ];

        Notification::send($data, new SendEmailNotification($details));
        Log::info('Notification sent to ' . $data->email);

        return redirect()->back();
    }

    public function create_faqs()
    {
        return view('admin.create_faqs');
    }

    public function add_faqs(Request $request)
    {
        $data = new Faq();
        $data->question = $request->question;
        $data->answer = $request->answer;
        $data->save();
        return redirect()->back();
    }

    public function view_faqs()
    {
        $data = Faq::all();
        return view('admin.view_faqs', compact('data'));
    }

    public function delete_faqs($id)
    {
        $data = Faq::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function update_faqs($id)
    {
        $data = Faq::find($id);
        return view('admin.update_faqs', compact('data'));
    }

    public function edit_faqs(Request $request, $id)
    {
        $data = Faq::find($id);
        $data->question = $request->question;
        $data->answer = $request->answer;
        $data->save();
        return redirect()->back();
    }
}
