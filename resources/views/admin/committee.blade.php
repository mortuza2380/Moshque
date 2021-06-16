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
                    <center><h4 style="border: 5px solid midnightblue; border-radius: 15px; background: midnightblue; color: white">Add Committee Member</h4></center><br>
                    <form action="/admin/committee" method="post" enctype="multipart/form-data">
                        @csrf
                        <input class="form-control" type="text" name="name" placeholder="Committee Member Name" required>
                        <input class="form-control" type="text" name="phone" placeholder="Committee Member Phone" required>
                        <input class="form-control" type="text" name="designation" placeholder="designation" required>
                        <center><input type="submit" name="submit" ><br></center>

                    </form>
                </div>
            </div>

        </div>
        <br>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center><h4 style="border: 5px solid midnightblue; border-radius: 15px; background: midnightblue; color: white">Committee Lists</h4></center>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Designation</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($value as $committee)
                            <tr>
                                <td>{{$committee->name}}</td>
                                <td>{{$committee->phone}}</td>
                                <td>{{$committee->designation}}</td>
                                <td>
                                    <form class="" action="/admin/committee/{{$committee->id}}" method="post">
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
