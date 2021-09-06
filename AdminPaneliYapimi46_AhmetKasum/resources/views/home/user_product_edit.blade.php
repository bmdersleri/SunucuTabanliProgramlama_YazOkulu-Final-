@extends('layouts.home')
@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp

@section('title', 'User Product Edit '.$setting->title)
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

                <div class="content-wrapper">
                    <section class="content">
                        <div class="card">
                            <div class="card-body">

                                <div class="panel panel-white">
                                    <div class="panel-heading clearfix">
                                        <h3 class="breadcrumb-header">Edit Product</h3>
                                    </div>
                                    <div class="panel-body">
                                        <form role="form" action="{{route('user_product_update', ['id'=>$data->id])}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Parent</label>
                                                <select class="form-control select2" name="category_id" style="width: 100%;">
                                                    @foreach($datalist as $rs)
                                                        <option value="{{$rs->id}}" @if ($rs->id == $data->category_id) selected="selected" @endif >{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title) }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" id="title" name="title" value="{{$data->title}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Keywords</label>
                                                <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" name="description" value="{{$data->description}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input type="number" name="price" value="{{$data->price}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Quantity</label>
                                                <input type="number" name="quantity" value="{{$data->quantity}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Minquantity</label>
                                                <input type="number" name="minquantity" value="{{$data->minquantity}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Tax</label>
                                                <input type="text" name="tax" value="{{$data->tax}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Detail</label>
                                                <textarea id="detail" name="detail">{{$data->detail}}</textarea>
                                                <script>
                                                    window.onload = function () {
                                                        CKEDITOR.replace('detail', {
                                                            filebrowserBrowseUrl: filemanager.ckBrowseUrl,
                                                        });
                                                    }
                                                </script>
                                            </div>
                                            <div class="form-group">
                                                <label>Slug</label>
                                                <input type="text" name="slug" value="{{$data->slug}}" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label>Image</label>
                                                <input type="file" name="image" class="form-control">
                                                @if ($data->image)
                                                    <img src="{{Storage::url($data->image)}}" height="60" alt="">
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control select2" name="status" style="width: 100%;">
                                                    <option selected="selected">{{$data->status}}</option>
                                                    <option>True</option>
                                                    <option>False</option>
                                                </select>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Update Product</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">

                            </div>
                        </div>
                    </section>
                </div>
        </div>
    </div>
@endsection

