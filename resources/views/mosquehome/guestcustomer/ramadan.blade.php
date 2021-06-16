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
            background-image: url("https://phonebookofgrenoble.xyz/image/340557-full_5073492-1920x1080-islam-mosque-ramadan-wallpaper-and-background.png");
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
        <div class="col-md-12">
            <center><h4 style="border: 5px solid white; border-radius: 15px; background: white; color: black; padding: 10px;font-size: 18px">Ramadan Calender</h4></center>
        </div>
    </div>
    <div class="row" style="margin-left: 100px">
        @foreach($item as $value)
            <div class="col-md-10" style="">
                <div class="panel panel-success">
                    <div class="panel-body"><embed src="{{'/storage/ramadancalender/'.$value->file}}" style="width:100%; border-radius: 30px" class="img-responsive"></div>
                </div>
            </div><br>
        @endforeach
    </div>
</div><br>




</body>
</html>
