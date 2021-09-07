@extends('layouts.home')
@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp

@section('title', 'Ana Sayfa '.$setting->title)
@section('description')
    {{$setting->description}}
@endsection

@section ('keywords',$setting->description)
@include('home._header')
@include('home._category')
@include('home._slider')

@section ('content')

    <div class="wrap">
        <div class="main">
            <div class="content">
                <div class="content_top">
                    <div class="heading">
                        <h3>En Son Eklenen Ürünler</h3>
                    </div>
                    <div class="see">
                        <p><a href="{{route('allproductlist')}}">Tüm Ürünleri Gör</a></p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="section group">
                    @foreach($last as $rs)
                        <div class="grid_1_of_4 images_1_of_4">
                            <a href="{{route('product',['id' => $rs->id,'slug' => $rs->slug])}}"><img src="{{ Storage::url($rs->image) }}" alt="" /></a>
                            <h2>{{$rs->title}} </h2>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">{{$rs->price}}₺</span></p>
                                </div>
                                @auth
                                <form action="{{route('user_shopcart_add',['id'=>$rs->id])}}" method="post">
                                    @csrf
                                <div class="add-cart">
                                    <input name="quantity" type="hidden" value="1">
                                    <h4><button type="submit" class="btn btn-primary">Sepete Ekle</button></h4>
                                </div>
                                </form>
                                @else
                                    <a href="/login">Giriş</a>
                                @endauth


                                <div class="clear"></div>
                            </div>

                        </div>
                    @endforeach
                </div>
                <div class="content_bottom">
                    <div class="heading">
                        <h3>Feature Products</h3>
                    </div>
                    <div class="see">
                        <p><a href="{{route('allproductlist')}}">Tüm Ürünleri Gör</a></p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="section group">
                    @foreach($picked as $rs)
                        <div class="grid_1_of_4 images_1_of_4">
                            <a href="{{route('product',['id' => $rs->id,'slug' => $rs->slug])}}"><img src="{{ Storage::url($rs->image) }}" alt="" /></a>
                            <h2>{{$rs->title}}</h2>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">{{$rs->price}}₺</span></p>
                                </div>
                                @auth
                                <form action="{{route('user_shopcart_add',['id'=>$rs->id])}}" method="post">
                                    @csrf
                                    <div class="add-cart">
                                        <input name="quantity" type="hidden" value="1">
                                        <h4><button type="submit" class="btn btn-outline-dark">Sepete Ekle</button></h4>
                                    </div>
                                </form>
                                @else
                                <a href="/login">Giriş</a>
                                @endauth
                                <div class="clear"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>




    @include('home._footer')

    @yield('footerjs')
@endsection

