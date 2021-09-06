@extends('layouts.home')

@section('title', 'Tüm Ürünler '.$setting->title)
@include('home._header')


@section('content')
    <div class="wrap">
        <div class="main">
            <div class="content">
                <div class="content_top">
                    <div class="heading">
                        <h3>Tüm Ürünler</h3>
                    </div>
                    @foreach($datalist as $rs)
                        <div class="grid_1_of_4 images_1_of_4">
                            <a href="{{route('product',['id' => $rs->id,'slug' => $rs->slug])}}"><img src="{{ Storage::url($rs->image) }}" alt="" /></a>
                            <h2>{{$rs->title}}</h2>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">{{$rs->price}}₺</span></p>
                                </div>
                                <form action="{{route('user_shopcart_add',['id'=>$rs->id])}}" method="post">
                                    @csrf
                                    <div class="add-cart">
                                        <input name="quantity" type="hidden" value="1">
                                        <h4><button type="submit" class="btn btn-primary">Sepete Ekle</button></h4>
                                    </div>
                                </form>
                                <div class="clear"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


@endsection


