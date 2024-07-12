<!DOCTYPE html>
<html>

<head>
    <base href="/public">
    @include('admin.css')

    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }

        .div_deg {
            padding-top: 30px;
        }

        .div_center {
            text-align: center;
            padding-top: 40px;
        }
    </style>
</head>

<body>

    <!-- header -->
    @include('admin.header')

    <!-- sidebar -->
    @include('admin.sidebar')

    <div class="page-content">
        <center>
            <h1 style="font-size: 30px; font-weight: bold;">Mail send to {{$data->name}}</h1>

            <form action="{{url('mail', $data->id)}}" method="Post">
                @csrf
                <div class="div_deg">
                    <label>Greeting</label>
                    <input type="text" name="greeting" id="">
                </div>

                <div class="div_deg">
                    <label>Mail Body</label>
                    <textarea name="body" id=""></textarea>
                </div>

                <div class="div_deg">
                    <label>Action Text</label>
                    <input type="text" name="action_text" id="">
                </div>

                <div class="div_deg">
                    <label>Action Url</label>
                    <input type="text" name="action_url" id="">
                </div>

                <div class="div_deg">
                    <label>End Line</label>
                    <input type="text" name="endline" id="">
                </div>

                <div class="div_deg">
                    <input class="btn btn-primary" type="submit" value="Send Mail">
                </div>
            </form>


        </center>
    </div>

    <!-- footer -->
    @include('admin.footer')
</body>

</html>