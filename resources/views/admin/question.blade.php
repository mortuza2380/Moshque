@extends('layouts.app')

@section('content')
    @include('admin.layouts.adminsidebar')

    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
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
                    <center><h4 style="border: 5px solid midnightblue; border-radius: 15px; background: midnightblue; color: white">Problems of Peoples</h4></center>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Problems</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($value as $problems)
                            <tr>
                                <td>{{$problems->email}}</td>
                                <td>{{$problems->phone}}</td>
                                <td>{{$problems->problem}}</td>
                                <td>
                                    <form method="post" action="/mailing" enctype="multipart/form-data">
                                        @csrf
                                        <input type="text" name="email" value="{{$problems->email}}" hidden>
                                        <input type="text" name="problem" value="{{$problems->problem}}" hidden>
                                        <input type="text" name="msg" value="" placeholder="Write Answer">
                                        <input type="submit" class="btn btn-dark" value="Send Mail">
                                    </form>
                                </td>
                                <td>
                                    <form class="" action="/admin/question/{{$problems->id}}" method="post">
                                        {{csrf_field()}}
                                        {{ method_field('DELETE') }}
                                        <input type="submit" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div><br>
        @if(count($errors)>0)
            @foreach($errors->all() as $error)
                <center><i><h4 style="color:#ff0000;"><br>**{{$error}}** <br></h4></i></center>
            @endforeach
        @endif

    </div>
@endsection
