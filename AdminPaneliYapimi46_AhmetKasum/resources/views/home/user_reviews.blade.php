@extends('layouts.home')
@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp

@section('title', 'User Reviews '.$setting->title)
@include('home._header')
@section ('content')
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .vertical-menu {
                width: 200px;
            }

            .vertical-menu a {
                background-color: #eee;
                color: black;
                display: block;
                padding: 12px;
                text-decoration: none;
            }

            .vertical-menu a:hover {
                background-color: #ccc;
            }

            .vertical-menu a.active {
                background-color:#00b0ff;
                color: white;
            }
        </style>
        <style>
            #customers {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #customers td, #customers th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #customers tr:nth-child(even){background-color: #f2f2f2;}

            #customers tr:hover {background-color: #ddd;}

            #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #9d4caf;
                color: white;
            }
        </style>
    </head>


    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h1>PROFİL DETAYLARI</h1>

                <div class="vertical-menu">
                    <a href="#" class="active">{{Auth::user()->name}}</a>
                    <a href="{{route('userprofile')}}">PROFİLİM</a>
                    <a href="{{route('user_shopcart')}}">SEPETİM</a>
                    <a href="{{route('user_orders')}}">SİPARİŞLERİM</a>
                    <a href="{{route('user_products')}}">ÜRÜNLERİM</a>
                    <a href="{{route('user_review')}}">MESAJLARIM</a>
                    <a href="{{route('logout')}}">ÇIKIŞ</a>
                </div>
            </div>
            <div class="col-sm-9">
                <h1 style="font-size: 30px; text-align: center;">MY REVIEWS</h1>
                <table id="customers">
                    <tr>
                        <th>Product</th>
                        <th>Subject</th>
                        <th>Review</th>
                        <th>Rate</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    @foreach($datalist as $rs)
                    <tr>
                        <td><a href="{{route('product',['id'=>$rs->product->id,'slug'=>$rs->product->slug])}}" target="_blank">{{$rs->product->title}}</a></td>
                        <td>{{$rs->subject}}</td>
                        <td>{{$rs->review}}</td>
                        <td>{{$rs->rate}}</td>
                        <td>{{$rs->status}}</td>
                        <td>{{$rs->created_at}}</td>
                        <td><a href="{{route('user_review_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><img src="{{asset('assets')}}/admin/images/delete.png" height="30"></a></td>
                    </tr>
                    @endforeach
                </table>
                <br><br>
            </div>
        </div>
    </div>

@endsection

