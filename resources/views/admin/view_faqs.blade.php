<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style type="text/css">
        .table_deg {
            border: 2px solid white;
            margin: auto;
            width: 80%;
            text-align: center;
            margin-top: 40px;
        }

        .th_deg {
            background-color: skyblue;
            padding: 10px;
        }

        tr {
            border: 3px solid white;
        }

        td {
            padding: 10px;
        }
    </style>
</head>

<body>

    <!-- header -->
    @include('admin.header')

    <!-- sidebar -->
    @include('admin.sidebar')

    <div class="page-content">

        <table class="table_deg">
            <tr>
                <th class="th_deg">Question</th>
                <th class="th_deg">Answer</th>
                <th class="th_deg">Delete</th>
                <th class="th_deg">Update</th>
            </tr>

            @foreach($data as $data)
            <tr>
                <td>{{$data->question}}</td>
                <td>{!! Str::limit($data->answer,250) !!}</td>
                <td>
                    <a onclick="return confirm('Are you sure this?')" class="btn btn-danger" href="{{url('delete_faqs', $data->id)}}">Delete</a>
                </td>
                <td>
                    <a class="btn btn-warning" href="{{url('update_faqs', $data->id)}}">Update</a>
                </td>
            </tr>
            @endforeach
        </table>

    </div>

    <!-- footer -->
    @include('admin.footer')
</body>

</html>