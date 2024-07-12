<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('home.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->

    <!-- header -->
    <header>
        @include('home.header')
    </header>
    <!-- end header inner -->
    <!-- end header -->

    <div class="our_room" id="detailRoom">
        <div class="container">
            <div class="row">
                <h1 class="text-center mt-3 display-3 fw-bold">Book Room's</h1>
                <hr>
                <div class="wrapper text-center mb-5">
                    <h5>It turns out they prefer to book this room, you know...</h5>
                </div>
            </div>

            <!-- our room -->
            <div class="row">
                <div class="col-md-8">
                    <div id="serv_hover" class="room">
                        <div style="padding:20px" class="room_img">
                            <h2 class="fw-bold">{{$room->room_title}}</h2>
                            <img style="height: 400px; width: 800px;" src="/room/{{$room->image}}" alt="kamar" />
                        </div>
                        <div class="bed_room">
                            <!-- <h2>{{$room->room_title}}</h2> -->
                            <p style="padding:12px">{{$room->description}}</p>
                            <h4 style="padding:12px">Type Room : {{$room->room_type}}</h4>
                        </div>

                        <div class="container mt-5">
                            <div class="property-info row">
                                <div class="col-md-4">
                                    <strong>Properties:</strong>
                                </div>
                                <div class="col-md-8">
                                    <div>Accommodates: 4</div>
                                    <div>Beds: 4 Single(s)</div>
                                    <div>Size: 12 sq m</div>
                                </div>
                            </div>

                            <div class="more-info row">
                                <div class="col-md-4">
                                    <strong>More Info:</strong>
                                </div>
                                <div class="col-md-8">
                                    <div>Breakfast Bathroom Outside Single Bed for 4 person/room Water Heater Internet Wifi Non Smoking Room</div>
                                </div>
                            </div>

                            <div class="amenities row">
                                <div class="col-md-4">
                                    <strong>Amenities:</strong>
                                </div>
                                <div class="col-md-8 d-flex flex-wrap">
                                    @if($room->wifi === 'yes')
                                    <div class="icon">
                                        <img src="https://img.icons8.com/material-outlined/24/000000/wifi--v1.png" />
                                        <div>WiFi</div>
                                    </div>
                                    @endif
                                    <div class="icon">
                                        <img src="https://img.icons8.com/material-outlined/24/000000/safe.png" />
                                        <div>Safe</div>
                                    </div>
                                    <div class="icon">
                                        <img src="https://img.icons8.com/material-outlined/24/000000/shower.png" />
                                        <div>Shower</div>
                                    </div>
                                    <div class="icon">
                                        <img src="https://img.icons8.com/material-outlined/24/000000/towel.png" />
                                        <div>Towels</div>
                                    </div>
                                    <div class="icon">
                                        <img src="https://img.icons8.com/material-outlined/24/000000/briefcase.png" />
                                        <div>Sharing Work Space</div>
                                    </div>
                                </div>
                            </div>

                            <div class="check-in-out row">
                                <div class="col-md-4">
                                    <strong>Check In and Out:</strong>
                                </div>
                                <div class="col-md-8">
                                    <div>Check-In: 02:00 PM</div>
                                    <div>Check-Out: 12:00 PM</div>
                                </div>
                            </div>

                            <div class="rates row">
                                <div class="col-md-4">
                                    <strong>Rates:</strong>
                                </div>
                                <div class="col-md-8">
                                    <div>Daily: from Rp{{$room->price}}</div>
                                    <div>Weekly: from Rp3500000</div>
                                    <div>Monthly: from Rp15000000</div>
                                </div>
                            </div>

                            <div class="terms row">
                                <div class="col-md-4">
                                    <strong>Terms:</strong>
                                </div>
                                <div class="col-md-8">
                                    <a href="#">Read Our Policies</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <h1 style="font-size: 40px!important">Book Room</h1>

                    <div>
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-bs-dismiss="alert">X</button>
                            {{session()->get('message')}}
                        </div>
                        @endif
                    </div>

                    @if($errors)
                    @foreach($errors->all() as $errors)
                    <li>{{$errors}}</li>
                    @endforeach
                    @endif

                    <form action="{{url('add_booking', $room->id)}}" method="POST">
                        @csrf
                        <div>
                            <label>Name</label>
                            <input type="text" name="name" @if(Auth::id()) value="{{Auth::user()->name}}" @endif>
                        </div>
                        <div>
                            <label>Email</label>
                            <input type="text" name="email" @if(Auth::id()) value="{{Auth::user()->email}}" @endif>
                        </div>
                        <div>
                            <label>Phone</label>
                            <input type="text" name="phone" @if(Auth::id()) value="{{Auth::user()->phone}}" @endif>
                        </div>
                        <div>
                            <label>Start Date</label>
                            <input type="date" name="startDate" id="startDate">
                        </div>
                        <div>
                            <label>End Date</label>
                            <input type="date" name="endDate" id="endDate">
                        </div>
                        <div style="padding-top: 20px;">
                            <input type="submit" style="background-color: skyblue;" class="btn btn-primary" value="Book Room">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!--  footer -->
    @include('home.footer')

    <script type="text/javascript">
        $(function() {
            var dtToday = new Date();
            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();

            if (month < 10) month = '0' + month.toString();
            if (day < 10) day = '0' + day.toString();

            var maxDate = year + '-' + month + '-' + day;

            $('#startDate').attr('min', maxDate);
            $('#endDate').attr('min', maxDate);

            $('#startDate').on('change', function() {
                var startDate = $(this).val();
                var startDateObj = new Date(startDate);
                startDateObj.setDate(startDateObj.getDate() + 1);

                var endMonth = startDateObj.getMonth() + 1;
                var endDay = startDateObj.getDate();
                var endYear = startDateObj.getFullYear();

                if (endMonth < 10) endMonth = '0' + endMonth.toString();
                if (endDay < 10) endDay = '0' + endDay.toString();

                var minEndDate = endYear + '-' + endMonth + '-' + endDay;
                $('#endDate').attr('min', minEndDate);
            });

            $('#endDate').on('change', function() {
                var startDate = $('#startDate').val();
                var endDate = $(this).val();

                if (startDate >= endDate) {
                    alert('End date must be greater than start date');
                    $(this).val('');
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>