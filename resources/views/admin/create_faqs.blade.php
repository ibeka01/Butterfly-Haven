<!DOCTYPE html>
<html>

<head>
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
            <h1 style="font-size: 30px; font-weight:bold">Add Faq's</h1>
            <form action="{{url('add_faqs')}}" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="div_deg">
                    <label>Question</label>
                    <input type="text" name="question">
                </div>

                <div class="div_deg">
                    <label>Answer</label>
                    <textarea name="answer"></textarea>
                </div>

                <div class="div_deg">
                    <input class="btn btn-primary" type="submit" value="Add Faq">
                </div>
            </form>
        </div>
    </div>

    <!-- footer -->
    @include('admin.footer')
</body>

</html>