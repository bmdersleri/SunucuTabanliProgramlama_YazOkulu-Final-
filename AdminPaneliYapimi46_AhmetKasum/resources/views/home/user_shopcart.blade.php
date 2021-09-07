@extends('layouts.home')
@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp

@section('title', 'User Shopcart '.$setting->title)
@include('home._header')
@section ('content')
    <head>
        <style>
            #customers {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 75%;
                margin-left: 150px;
            }

            #customers td, #customers th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #customers tr:nth-child(even){background-color: #f2f2f2;}

            #customers tr:hover {background-color: #b64646;}

            #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #c028e3;
                color: white;
            }
        </style>
    </head>




    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 style="font-size: 30px; text-align: center;padding-top: 30px;">MY SHOPCART</h1>
                <table id="customers">
                    <tr>
                        <th colspan="2">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th scope="col">Sil</th>
                    </tr>
                        @php
                            $total=0;
                        @endphp
                        @foreach($datalist as $rs)
                            <tr>
                                <td>
                                    @if($rs->product->image)
                                        <img src="{{Storage::url($rs->product->image)}}" height="60" width="120" alt=""/>
                                    @endif

                                </td>
                                <td>
                                    <a href="{{route('product',['id' => $rs->product->id,'slug' => $rs->product->slug])}}">{{$rs->product->title}}</a>
                                </td>
                                <td>
                                    <strong>{{$rs->product->price}}</strong>
                                </td>
                                <td>
                                    <form action="{{route('user_shopcart_update',['id'=>$rs->id])}}" method="post">
                                        @csrf
                                        <input type="number" name="quantity" value="{{$rs->quantity}}" min="1" max="{{$rs->product->quantity}}"/>
                                    </form>
                                </td>

                                <td>
                                    <strong>{{$rs->product->price * $rs->quantity}}₺</strong>
                                </td>

                                <td>
                                    <a href="{{route('user_shopcart_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><img src="{{asset('assets/admin/images')}}/delete.png" height="30"></a>
                                </td>
                            </tr>
                            @php
                                $total+=$rs->product->price * $rs->quantity;
                            @endphp
                        @endforeach
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6" style="padding-left: 20px;">
                <br><br>
                <h1 style="font-size: 30px; padding-left: 200px;"><a href="{{route('allproductlist')}}">ALIŞVERİŞE DEVAM ET</a></h1>
            </div>
            <div class="col-sm-3" style="padding-left: 700px;">
                <h1 style="font-size: 30px;">TOTAL: {{$total}}₺</h1>
                <form action="{{route('user_order_add')}}" method="post">
                    @csrf
                    <input type="hidden" name="total" value="{{$total}}">
                    <button type="submit" class="btn-doc">SATIN AL</button>
                </form>
            </div>

        </div>
    </div>
    @include('home._footer')
@endsection

