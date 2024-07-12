<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home.index');
// });

Route::get('/', [AdminController::class, 'home']);

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
});

route::get('/home', [AdminController::class, 'index'])->name('home')
->middleware(['auth', 'admin']);

route::get('/create_room', [AdminController::class, 'create_room'])
->middleware(['auth', 'admin']);

route::post('/add_room', [AdminController::class, 'add_room'])
->middleware(['auth', 'admin']);

route::get('/view_room', [AdminController::class, 'view_room'])
->middleware(['auth', 'admin']);

route::get('/delete_room/{id}', [AdminController::class, 'delete_room'])
->middleware(['auth', 'admin']);

route::get('/update_room/{id}', [AdminController::class, 'update_room'])
->middleware(['auth', 'admin']);

route::post('/edit_room/{id}', [AdminController::class, 'edit_room'])
->middleware(['auth', 'admin']);


route::get('/details_room/{id}', [HomeController::class, 'details_room']);

route::post('/add_booking/{id}', [HomeController::class, 'add_booking']);

route::get('/bookings', [AdminController::class, 'bookings'])
->middleware(['auth', 'admin']);

route::get('/delete_booking/{id}', [AdminController::class, 'delete_booking'])
->middleware(['auth', 'admin']);

route::get('/approve_book/{id}', [AdminController::class, 'approve_book'])
->middleware(['auth', 'admin']);

route::get('/reject_book/{id}', [AdminController::class, 'reject_book'])
->middleware(['auth', 'admin']);

route::get('/view_gallary', [AdminController::class, 'view_gallary'])
->middleware(['auth', 'admin']);

route::post('/upload_gallary', [AdminController::class, 'upload_gallary'])
->middleware(['auth', 'admin']);

route::get('/delete_gallary/{id}', [AdminController::class, 'delete_gallary'])
->middleware(['auth', 'admin']);

route::get('/all_messages', [AdminController::class, 'all_messages'])
->middleware(['auth', 'admin']);

route::get('/send_mail/{id}', [AdminController::class, 'send_mail'])
->middleware(['auth', 'admin']);

route::post('/mail/{id}', [AdminController::class, 'mail'])
->middleware(['auth', 'admin']);

route::get('/create_faqs', [AdminController::class,'create_faqs'])
->middleware(['auth', 'admin']);

route::post('/add_faqs', [AdminController::class, 'add_faqs'])
->middleware(['auth', 'admin']);

route::get('/view_faqs', [AdminController::class, 'view_faqs'])
->middleware(['auth', 'admin']);

route::get('/delete_faqs/{id}', [AdminController::class, 'delete_faqs'])
->middleware(['auth', 'admin']);

route::get('/update_faqs/{id}', [AdminController::class, 'update_faqs'])
->middleware(['auth', 'admin']);

route::post('/edit_faqs/{id}', [AdminController::class, 'edit_faqs'])
->middleware(['auth', 'admin']);



route::post('/contact', [HomeController::class, 'contact']);

route::get('/our_rooms', [HomeController::class, 'our_rooms']);

route::get('/hotel_gallary', [HomeController::class, 'hotel_gallary']);

route::get('/contact_us', [HomeController::class, 'contact_us']);

route::get('/faq', [HomeController::class, 'faq']);

route::get('/check_ticket', [HomeController::class, 'check_ticket']);