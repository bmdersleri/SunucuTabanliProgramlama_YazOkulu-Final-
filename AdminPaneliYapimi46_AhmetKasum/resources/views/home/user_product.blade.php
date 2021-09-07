@extends('layouts.home')
@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp

@section('title', 'My Products '.$setting->title)
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
                background-color: #bf2dff;
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
                <h1 style="font-size: 30px; text-align: center;">MY PRODUCTS</h1>
                <a href="{{route('user_product_create')}}">ADD PRODUCT</a>
                <table id="customers">
                    <tr>

                        <th>Category</th>
                        <th>Title</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Image Gallery</th>
                        <th>Status</th>
                        <th style="width:200px" colspan="2">Actions</th>
                    </tr>
                    @foreach($datalist as $rs)
                        <tr>
                            <td>{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title) }}</td>
                            <td><a href="{{route('product',['id' => $rs->id,'slug' => $rs->slug])}}">{{$rs->title}}</a></td>
                            <td>{{$rs->quantity}}</td>
                            <td>{{$rs->price}}</td>
                            <td>
                                @if ($rs->image)
                                    <img src="{{Storage::url($rs->image)}}" height="30" alt="">
                                @endif
                            </td>
                            <td><a href="{{route('user_image_add', ['product_id' =>$rs->id])}}" onclick="return !window.open(this.href, '','top=50, left=100, width=1100, height=700')">
                                    <img src="{{asset('assets')}}/admin/images/gallery.png" height="25"></a></td>
                            <td>{{$rs->status}}</td>
                            <td><a href="{{route('user_product_edit', ['id' =>$rs->id])}}"><img src="{{asset('assets')}}/admin/images/edit.png" height="25"></a></td>
                            <td><a href="{{route('user_product_delete', ['id' =>$rs->id])}}" onclick="return confirm('Delete! Are you sure ?')"><img src="{{asset('assets')}}/admin/images/delete.png" height="25"></a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection

