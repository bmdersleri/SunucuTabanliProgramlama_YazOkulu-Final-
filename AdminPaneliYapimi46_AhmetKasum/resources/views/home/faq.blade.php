@extends('layouts.home')
@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp

@section('title', 'FAQ '.$setting->title)
@include('home._header')

@section ('content')
    <div class="content" style="padding-left: 150px; padding-right: 50px;">
        <div class="section group">
            <div class="col-md-12">
                @foreach($datalist as $rs)
                    <h2>{{$rs->question}}</h2>
                    {!! $rs->answer !!}
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
    @include('home._footer')
@endsection

