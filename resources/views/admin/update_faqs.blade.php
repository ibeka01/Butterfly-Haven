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
        <div class="div_center">
            <h1 style="font-size: 30px; font-weight:bold">Update Faq's</h1>
            <form action="{{url('edit_faqs', $data->id)}}" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="div_deg">
                    <label>Question</label>
                    <input type="text" name="question" value="{{$data->question}}">
                </div>

                <div class="div_deg">
                    <label>Answer</label>
                    <textarea name="answer">{{$data->answer}}</textarea>
                </div>

                <div class="div_deg">
                    <input class="btn btn-primary" type="submit" value="Update Faq">
                </div>
            </form>
        </div>
    </div>
    <!-- footer -->
    @include('admin.footer')
</body>

</html>