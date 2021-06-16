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
                    <center><h4 style="border: 5px solid midnightblue; border-radius: 15px; background: midnightblue; color: white">Formal Message for Imam</h4></center><br>
                    <form action="/admin/imam_message" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="name" placeholder="Name" required><br>
                        <input type="text" name="designation" placeholder="Designation" required><br>
                        <textarea required placeholder="Message" class="form-control" rows="5" type="text" name="msg" ></textarea>
                        <br><label>Image of Imam: </label><br>
                        <input type="file" name="file"><br><br>
                        <center><input type="submit" name="submit"></center>
                    </form>
                </div>
            </div>

        </div>
        <br>

        <div class="container">
            <div class="row">

                    <div class="col-sm-6" style="padding: 16px; margin: 10px">
                        <div class="panel panel-success">
                            <div class="panel-heading">Name: {{$value->name}}</div>
                            <div class="panel-body">
                                Designation: {{$value->designation}}<br>
                                <img src="{{'/storage/admin/'.$value->file}}" style="width:200px;height: 200px; border-radius: 30px" class="img-responsive"><br>
                                Message: <p>{{$value->message}}</p>
                            </div>
                        </div>
                    </div><br>

            </div>
        </div><br>
        @if(count($errors)>0)
            @foreach($errors->all() as $error)
                <center><i><h4 style="color:#ff0000;"><br>**{{$error}}** <br></h4></i></center>
            @endforeach
        @endif

    </div>
@endsection
