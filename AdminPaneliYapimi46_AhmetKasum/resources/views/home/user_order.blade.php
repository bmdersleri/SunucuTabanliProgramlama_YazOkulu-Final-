@extends('layouts.home')

@section('title', 'My Orders')
@include('home._header')

@section('content')
    <head>
        <style>
            #customers {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 75%;
                margin-left: 150px;
            }

            #customers td, #customers th {
                border: 1px solid #ff8888;
                padding: 8px;
            }

            #customers tr:nth-child(even){background-color: #ffb72b;}

            #customers tr:hover {background-color: #ddd;}

            #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #b561ff;
                color: white;
            }
        </style>
    </head>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 style="font-size: 30px; text-align: center;padding-top: 30px;">MY ORDERS</h1>
                <table id="customers">
                    <tr>

                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Note</th>
                                    <th scope="col">Show</th>

                    </tr>


                                @foreach($datalist as $rs)
                                    <tr>
                                        <td>
                                            {{$rs->id}}

                                        </td>
                                        <td>
                                            {{$rs->name}}
                                        </td>

                                        <td>
                                            {{$rs->phone}}
                                        </td>

                                        <td>
                                            {{$rs->address}}
                                        </td>
                                        <td>
                                            {{$rs->total}} ₺
                                        </td>
                                        <td>
                                            {{$rs->created_at}}
                                        </td>
                                        <td>
                                            {{$rs->status}}
                                        </td>
                                        <td>
                                            {{$rs->note}}
                                        </td>
                                        <td>
                                            <a href="{{route('user_order_show',['id'=>$rs->id])}}" onclick="return !window.open(this.href, '','top=50, left=100, width=1100, height=700')">Göster</a>
                                        </td>

                                    </tr>

                                @endforeach


                            </table>
                        </div>
                    </div>

                </div>

    @include('home._footer')
@endsection
