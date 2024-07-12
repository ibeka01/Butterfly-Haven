<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
</head>

<body>

    <!-- header -->
    @include('admin.header')

    <!-- sidebar -->
    @include('admin.sidebar')

    <div class="page-content">
        <center>
            <h1 style="font-size: 40px; font-weight: bolder; color: white;">
                Gallary
            </h1>

            <div class="row">
                @foreach ($gallary as $gallary)

                <div class="col-md-4">

                    <img style="height:200px!important; width:300px!important;" src="/gallary/{{$gallary->image}}">
                    <a class="btn btn-danger" href="{{url('delete_gallary', $gallary->id)}}">Delete Image</a>

                </div>

                @endforeach
            </div>

            <form action="{{url('upload_gallary')}}" method="Post" enctype="multipart/form-data">
                @csrf
                <div style="padding: 30px;">
                    <label style="color:white; font-weight:bold;">Upload Image</label>
                    <input type="file" name="image" required>
                    <input class="btn btn-primary" type="submit" value="Add Image">
                </div>

            </form>
        </center>
    </div>

    <!-- footer -->
    @include('admin.footer')
</body>

</html>