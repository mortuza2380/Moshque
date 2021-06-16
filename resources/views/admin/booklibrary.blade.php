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
                    <center><h4 style="border: 5px solid midnightblue; border-radius: 15px; background: midnightblue; color: white">Add E-Book</h4></center><br>
                    <form action="/admin/book_library" method="post" enctype="multipart/form-data">
                        @csrf
                        <input class="form-group" type="text" name="title" placeholder="Title of E-Book" required>
                        <label>Choose a file: </label><br>
                        <input type="file" name="file" required><br><br>
                        <input type="submit" name="submit">
                    </form>
                </div>
            </div>

        </div>
        <br>



        <div class="container">
            <center><h4 style="border: 5px solid midnightblue; border-radius: 15px; background: midnightblue; color: white">E-Book Library:</h4></center>
            <div class="row">
                @foreach($value as $item)
                    <div class="col-sm-2" style="padding: 16px; margin: 10px">
                        <div class="panel panel-success">
                            <div class="panel-heading" style="border: 2px solid midnightblue; padding: 8px; margin: 5px; color: white; text-align: center ;background-color: midnightblue; border-radius: 10px">{{$item->title}}</div>
                            <div class="panel-body">
                                <embed type="application/pdf" src="{{'/storage/booklibrary/'.$item->file}}#toolbar=1" style="width:100%;" >
                                {{--toolbar is help to download when its value is 1--}}
                                {{--<iframe id="fred" style="border:1px solid #666CCC" title="PDF in an i-Frame" src="{{'/storage/booklibrary/'.$item->file}}" frameborder="1" scrolling="auto"></iframe>--}}
                            </div>
                            <div class="panel-footer">
                                <br>
                                {{--start delete part--}}
                                <center>
                                    <form class="" action="/admin/book_library/{{$item->id}}" method="post">
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
