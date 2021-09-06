@extends('layouts.home')
@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp

@section('title', 'Referanslarımız '.$setting->title)
@include('home._header')

@section ('content')
    <div class="content" style="padding-left: 150px; padding-right: 50px;">
        <div class="section group">
            <div class="col-md-12">
                {!! $setting->references !!}
            </div>
        </div>
    </div>
    @include('home._footer')
@endsection

