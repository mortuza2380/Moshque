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
                    <center><h4 style="border: 5px solid midnightblue; border-radius: 15px; background: midnightblue; color: white">Add Mosque Money Transaction</h4></center><br>
                    <form action="/admin/money_transaction" method="post" enctype="multipart/form-data">
                        @csrf
                        <input class="form-control" type="date" name="date" required>
                        <input class="form-control" type="text" name="amount" placeholder="Amount" required>
                        <textarea required class="form-control" rows="5" type="text" name="source" placeholder="Notice Description"></textarea><br>
                        <center><input type="submit" name="submit" ><br></center>

                    </form>
                </div>
            </div>

        </div>
        <br>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center><h4 style="border: 5px solid midnightblue; border-radius: 15px; background: midnightblue; color: white">All Transaction</h4></center>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Source</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($value as $money)
                            <tr>
                                <td>{{$money->date}}</td>
                                <td>{{$money->amount}}</td>
                                <td>{{$money->source}}</td>
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
