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
            background-image: url("http://hdwallpapersbackgrounds.us/backgrounds-image/wallpapers-hd-4s-1920x1080/hd-wallpapers-desktop-6fxxpp-4s-1920x1080.jpg");
            background-repeat:repeat-y;
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

        <!-- Blog Entries Column -->
        <div class="col-md-12" style="background:white; margin: 30px; padding: 20px; border-radius: 15px">

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                {{--<img src="/storage/photogallery/{{ Session::get('image') }}">--}}
            @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <b><h3 class="my-4" style="text-align: center; font-family: 'Times New Roman'">Ask a solution for a problem to Imam</h3></b>
            <form action="/faq" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <b style="font-family: 'Times New Roman'; font-size: 16px">2. Phone:</b> <input class="form-control" type="text" name="phone" required>
                </div>

                <div class="form-group">
                    <b style="font-family: 'Times New Roman'; font-size: 16px">3. Email:</b> <input class="form-control" type="email" name="email" required>
                </div>
                <div class="form-group">
                    <b style="font-family: 'Times New Roman'; font-size: 16px">4. Problem Statement:</b>
                    <textarea class="form-control" name="problem" required></textarea>
                </div>
                <div class="form-group" style="text-align: center">
                    <input type="submit" name="member_btn" value="Submit">
                </div>

            </form>
        </div>
    </div>
</div>



</body>
</html>
