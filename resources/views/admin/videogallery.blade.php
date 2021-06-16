@extends('layouts.app')

@section('content')
    @include('admin.layouts.adminsidebar')
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="">
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
                    <center><h4 style="border: 5px solid midnightblue; border-radius: 15px; background: midnightblue; color: white">Add Video</h4></center><br>
                    <form action="/admin/video_gallery" method="post" enctype="multipart/form-data">
                        @csrf
                        <input class="form-group" type="text" name="title" placeholder="Title of video" required>
                        <label>Choose a video: </label><br>
                        <input type="file" name="file" required><br><br>
                        <input type="submit" name="submit">
                    </form>
                </div>
            </div>

        </div>
        <br>



        <div class="container">
            <center><h4 style="border: 5px solid midnightblue; border-radius: 15px; background: midnightblue; color: white">Videos Gallery:</h4></center>
            <div class="row">
                @foreach($value as $item)
                    <div class="col-sm-2" style="padding: 16px; margin: 10px">
                        <div class="panel panel-success">
                            <div class="panel-heading" style="border: 2px solid midnightblue; padding: 8px; margin: 5px; color: white; text-align: center ;background-color: midnightblue; border-radius: 10px">{{$item->title}}</div>
                            <div class="panel-body"><embed src="{{'/storage/videogallery/'.$item->file}}" style="width:100%; border-radius: 30px" class="img-responsive"></div>
                            <div class="panel-footer">
                                <br>
                                {{--start delete part--}}
                                <center>
                                    <form class="" action="/admin/video_gallery/{{$item->id}}" method="post">
                                        {{csrf_field()}}
                                        {{ method_field('DELETE') }}
                                        <input type="submit" value="Delete">
                                    </form>
                                </center>
                                {{--close delete part--}}

                            </div>
                        </div>
                    </div><br>
                @endforeach
            </div>
        </div><br>



    </div>
@endsection
