@extends('layouts.home')

@section('title', 'Arama Sonuçları '.$search)
@include('home._header')

@section('content')
<div class="row">
    <div class="wrap">
        <div class="main">
            <div class="content">
                <div class="content_top">
                    <div class="heading">
                        <h3 href="{{$search}}">Arama Sonuçları</h3><br><br>
                    </div>
                    @foreach($datalist as $rs)
                        <div class="grid_1_of_4 images_1_of_4">
                            <a href="{{route('product',['id' => $rs->id,'slug' => $rs->slug])}}"><img src="{{ Storage::url($rs->image) }}" alt="" /></a>
                            <h2>{{$rs->title}}</h2>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">{{$rs->price}}₺</span></p>
                                </div>
                                <div class="add-cart">
                                    <h4><a href="preview.html">Sepete Ekle</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



