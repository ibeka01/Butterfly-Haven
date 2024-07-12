<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>

    <!-- header -->
    <header>
        @include('home.header')
    </header>

    <!-- Start check ticket section -->
    <div class="container my-5" id="ticket">
        <h1 class="text-start mt-3 display-3 fw-bold">Your Ticket</h1>
        <hr>
        <div class="wrapper text-start mb-5">
            <h5>Please check your ticket to ensure all information listed is correct and appropriate.</h5>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-sm">
                    <!-- <div class="card-header bg-warning text-white text-center">
                    <h3>CHECK TICKET</h3>
                </div> -->
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="ticketNumber" class="form-label">Ticket Number:</label>
                                <input type="text" class="form-control" id="ticketNumber" autocomplete="off" />
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" class="form-control" id="name" autocomplete="on" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone:</label>
                                <input type="text" class="form-control" id="phone" autocomplete="on" />
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <div class="text-center">
                                <!-- <button type="submit" class="btn btn-primary" id="checkTicketBtn">Submit</button> -->
                                <a class="read_more" href="{{ url('/')}}">Submit</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('home.footer')
    <script src="/js/check_ticket.js"></script>

</body>

</html>