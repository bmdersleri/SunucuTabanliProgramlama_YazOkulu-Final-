@extends('layouts.home')
@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp

@section('title', 'Ürün Ekle'.$setting->title)
@include('home._header')

<head>
    @FilemanagerScript
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="{{ asset('assets')}}/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/admin/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/admin/plugins/icomoon/style.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/admin/plugins/uniform/css/default.css" rel="stylesheet"/>
    <link href="{{ asset('assets')}}/admin/plugins/switchery/switchery.min.css" rel="stylesheet"/>
    <link href="{{ asset('assets')}}/admin/plugins/nvd3/nv.d3.min.css" rel="stylesheet">

    <!-- Theme Styles -->
    <link href="{{ asset('assets')}}/admin/css/ecaps.min.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/admin/css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

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
@yield('css')
@yield('javascript')

<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>


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
    </head>


    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h1>PROFİL DETAYLARI</h1>

                <div class="vertical-menu">
                    <a href="#" class="active">{{Auth::user()->name}}</a>
                    <a href="{{route('userprofile')}}">PROFİLİM</a>
                    <a href="#">SEPETİM</a>
                    <a href="#">SİPARİŞLERİM</a>
                    <a href="#">ÜRÜNLERİM</a>
                    <a href="{{route('user_review')}}">MESAJLARIM</a>
                    <a href="{{route('logout')}}">ÇIKIŞ</a>
                </div>
            </div>
            <div class="col-sm-9">
                        <div class="card">
                            <div class="card-body">
                                        <form role="form" action="{{route('user_product_store')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <table id="customers">
                                                <tr><th>PARENT</th><td><select class="form-control select2" name="category_id" style="width: 50%;">
                                                            @foreach($datalist as $rs)
                                                                <option value="{{$rs->id}}">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title) }}</option>
                                                            @endforeach
                                                        </select></td></tr>
                                                <tr><th>TITLE</th><td><input type="text" id="title" name="title" class="form-control"></td></tr>
                                                <tr><th>KEYWORDS</th><td><input type="text" name="keywords" class="form-control"></td></tr>
                                                <tr><th>DESCRIPTION</th><td><input type="text" name="description" class="form-control"></td></tr>
                                                <tr><th>PRICE</th><td><input type="number" name="price" value="0" class="form-control"></td></tr>
                                                <tr><th>QUANTITY</th><td><input type="number" name="quantity" value="1" class="form-control"></td></tr>
                                                <tr><th>MINQUANTITY</th><td><input type="number" name="minquantity" value="5" class="form-control"></td></tr>
                                                <tr><th>TAX</th><td><input type="text" name="tax" value="18" class="form-control"></td></tr>
                                                <tr><th>DETAIL</th><td><textarea id="detail" name="detail"></textarea>
                                                        <script>
                                                            window.onload = function () {
                                                                CKEDITOR.replace('detail', {
                                                                    filebrowserBrowseUrl: filemanager.ckBrowseUrl,
                                                                });
                                                            }
                                                        </script></td></tr>
                                                <tr><th>SLUG</th><td><input type="text" name="slug" class="form-control"></td></tr>
                                                <tr><th>IMAGE</th><td><input type="file" name="image" class="form-control"></td></tr>
                                                <tr><th><button type="submit" class="btn btn-primary">Add Product</button></th></tr>

                                            </table>


                                        </form>
                            </div>

                        </div>

        </div>
    </div>
@endsection

