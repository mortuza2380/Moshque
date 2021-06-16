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
                    <center><h4 style="border: 5px solid midnightblue; border-radius: 15px; background: midnightblue; color: white">Add Salat Time</h4></center><br>
                    <form action="/admin/salat" method="post" enctype="multipart/form-data">
                        @csrf
                        <label>Date</label>
                        <input class="form-control" type="date" name="date" placeholder="" required>
                        <label>Fajr Time</label>
                        <input class="form-control" type="time" name="fajr" placeholder="Fjar" required>
                        <label>Dhuhur Time</label>
                        <input class="form-control" type="time" name="dhuhr" placeholder="Dhuhur" required>
                        <label>Asr Time</label>
                        <input class="form-control" type="time" name="asr" placeholder="Asar" required>
                        <label>Maghrib Time</label>
                        <input class="form-control" type="time" name="maghrib" placeholder="Maghrib" required>
                        <label>Esha Time</label>
                        <input class="form-control" type="time" name="isha" placeholder="Esha" required>
                        <center><input type="submit" name="submit" ><br></center>

                    </form>
                </div>
            </div>

        </div>
        <br>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center><h4 style="border: 5px solid midnightblue; border-radius: 15px; background: midnightblue; color: white">Salat Time</h4></center>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Fajr</th>
                            <th scope="col">Dhur</th>
                            <th scope="col">Asar</th>
                            <th scope="col">Maghrib</th>
                            <th scope="col">Esha</th>
                            <th scope="col">Jummah</th>
                            {{--<th scope="col">Descriptiomn</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($value as $salat)
                            <tr>

                                <td>{{$salat->date}}</td>
                                <td>{{$salat->fajr}}</td>
                                <td>{{$salat->dhuhr}}</td>
                                <td>{{$salat->asr}}</td>
                                <td>{{$salat->maghrib}}</td>
                                <td>{{$salat->isha}}</td>
                                <td>1:30 PM</td>
                                <td>
                                <form class="" action="/admin/salat/{{$salat->id}}" method="post">
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
                <br>
            </div>
        </div><br>
        @if(count($errors)>0)
            @foreach($errors->all() as $error)
                <center><i><h4 style="color:#ff0000;"><br>**{{$error}}** <br></h4></i></center>
            @endforeach
        @endif

    </div>
@endsection
