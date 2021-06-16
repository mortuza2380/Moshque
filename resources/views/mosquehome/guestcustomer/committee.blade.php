<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
    {{--<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">--}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    @include('mosquehome.layouts.head')
    <style>
        body {
            background-image: url("https://www.wallpapermaiden.com/wallpaper/5908/download/1920x1080/turkey-istanbul-mosque-silhouette-sunset-clouds-sky.jpg");
            background-repeat:no-repeat;
            background-size:cover;
        }

    </style>
</head>
<body class="landing">

<!-- Header -->
@include('mosquehome.layouts.header')

<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <center><h4 style="border: 5px solid white; border-radius: 15px; background: white; color: black; padding: 10px;font-size: 18px">Committee Members</h4></center>
            <table class="table" style="background: white; border-radius: 10px; font-size: 18px">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Designation</th>
                </tr>
                </thead>
                <tbody>
                @foreach($item as $committee)
                    <tr>
                        <td>{{$committee->name}}</td>
                        <td>{{$committee->phone}}</td>
                        <td>{{$committee->designation}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <br>
    </div>
</div><br>



</body>
</html>
