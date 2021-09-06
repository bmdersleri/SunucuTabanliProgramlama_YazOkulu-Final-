@extends('layouts.home')
@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp

@section('title', 'Hakkımızda '.$setting->title)
@include('home._header')

@section ('content')
    <div class="content" style="padding-left: 150px; padding-right: 50px;">
        <div class="section group">
            <div class="col-md-12">
                {!! $setting->contact !!}
                <br><br>
                <div class="col span_2_of_3">
                    <div class="contact-form">
                        <h2>Contact Us</h2>
                        @include('home.message')
                        <form action="{{route('sendmessage')}}" method="post" role="form" class="contactForm">
                            @csrf
                            <div>
                                <span><label>Name</label></span>
                                <span><input type="text" id="name" name="name" class="textbox"></span>
                            </div>
                            <div>
                                <span><label>E-mail</label></span>
                                <span><input type="email" id="email" name="email" class="textbox"></span>
                            </div>
                            <div>
                                <span><label>Phone</label></span>
                                <span><input type="number" id="phone" name="phone" class="textbox"></span>
                            </div>
                            <div>
                                <span><label>Subject</label></span>
                                <span><input type="text" id="subject" name="subject" class="textbox"></span>
                            </div>
                            <div>
                                <span><label>Mesaj</label></span>
                                <span><textarea class="textarea" placeholder="Message" name="message"> </textarea></span>
                            </div>
                            <div>
                                <span><input type="submit" value="Submit" class="myButton"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('home._footer')
@endsection

