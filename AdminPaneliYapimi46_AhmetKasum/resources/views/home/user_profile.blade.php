@extends('layouts.home')
@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp

@section('title', 'User Profile '.$setting->title)
@include('home._header')
@section ('content')
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .vertical-menu {
            width: 200px;
        }

        .vertical-menu a {
            background-color: #fc2c2c;
            color: #ffcfcf;
            display: block;
            padding: 12px;
            text-decoration: none;
        }

        .vertical-menu a:hover {
            background-color: #cd8383;
        }

        .vertical-menu a.active {
            background-color: #ee9e26;
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
                @include('profile.show')
            </div>
        </div>
    </div>
@endsection

