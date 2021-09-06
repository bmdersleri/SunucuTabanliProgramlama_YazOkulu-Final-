@extends('layouts.home')

@section('title', 'Ürün Detayları '.$data->title)

@section('description'){{$data->description}}@endsection

@section('keywords',$data->description)
@include('home._header')
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@livewireStyles
<style>
    .checked {
        color: orange;
    }
</style>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial;
            margin: 0;
        }

        * {
            box-sizing: border-box;
        }

        img {
            vertical-align: middle;
        }

        /* Position the image container (needed to position the left and right arrows) */
        .container {
            position: relative;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Add a pointer when hovering over the thumbnail images */
        .cursor {
            cursor: pointer;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 40%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* Container for image text */
        .caption-container {
            text-align: center;
            background-color: #222;
            padding: 2px 16px;
            color: white;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Six columns side by side */
        .column {
            float: left;
            width: 16.66%;
        }

        /* Add a transparency effect for thumnbail images */
        .demo {
            opacity: 0.6;
        }

        .active,
        .demo:hover {
            opacity: 1;
        }
    </style>
</head>

@section('content')

    @php
        $avgrev=\App\Http\Controllers\HomeController::avrgreview($data->id);
        $countreview=\App\Http\Controllers\HomeController::countreview($data->id);
    @endphp
<div class="main">
    <div class="content">
        <div class="content_top">
            <div class="back-links">
                <p><a href="{{route('home')}}">Home</a> >>>> <a href="#">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category,$data->category->title) }}</a></p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
            <div class="cont-desc span_1_of_2">
                <div class="product-details">
                    <div class="grid images_3_of_2">
                        <div id="container">
                            <div id="products_example">
                                <div id="products">


                                    @foreach($datalist as $rs)
                                            <div class="mySlides">
                                                <div class="numbertext">{{$rs->title}}</div>
                                                <img src="{{ Storage::url($rs->image) }}" style="width:100%; height:500px;">
                                            </div>
                                    @endforeach

                                    <!-- Next and previous buttons -->
                                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                                        <!-- Image text -->
                                        <div class="caption-container">
                                            <p id="caption"></p>
                                        </div>

                                        <!-- Thumbnail images -->
                                        <div class="row">
                                            @foreach($datalist as $rs)
                                                <div class="column">
                                                    <img class="demo cursor" src="{{ Storage::url($rs->image) }}" style="width:100%" onclick="currentSlide(1)" alt="">
                                                </div>
                                            @endforeach
                                        </div>

                                        <script>
                                            var slideIndex = 1;
                                            showSlides(slideIndex);

                                            // Next/previous controls
                                            function plusSlides(n) {
                                                showSlides(slideIndex += n);
                                            }

                                            // Thumbnail image controls
                                            function currentSlide(n) {
                                                showSlides(slideIndex = n);
                                            }

                                            function showSlides(n) {
                                                var i;
                                                var slides = document.getElementsByClassName("mySlides");
                                                var dots = document.getElementsByClassName("demo");
                                                var captionText = document.getElementById("caption");
                                                if (n > slides.length) {slideIndex = 1}
                                                if (n < 1) {slideIndex = slides.length}
                                                for (i = 0; i < slides.length; i++) {
                                                    slides[i].style.display = "none";
                                                }
                                                for (i = 0; i < dots.length; i++) {
                                                    dots[i].className = dots[i].className.replace(" active", "");
                                                }
                                                slides[slideIndex-1].style.display = "block";
                                                dots[slideIndex-1].className += " active";
                                                captionText.innerHTML = dots[slideIndex-1].alt;
                                            }
                                        </script>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="desc span_3_of_2">
                        <h2>{{$data->title}} </h2>
                        <div class="price">
                            <p>Price: <span>{{$data->price}}₺</span></p>
                        </div>

                        <div class="share-desc">
                            <div class="share">
                                <ul>

                                    <li> <i class="fa fa-star @if ($avgrev>0) checked @endif"></i>
                                        <i class="fa fa-star @if ($avgrev>1) checked @endif"></i>
                                        <i class="fa fa-star @if ($avgrev>2) checked @endif"></i>
                                        <i class="fa fa-star @if ($avgrev>3) checked @endif"></i>
                                        <i class="fa fa-star @if ($avgrev>4) checked @endif"></i>
                                    </li>
                                </ul>
                            </div>
                            @include('home.message')
                            <form action="{{route('user_shopcart_add',['id'=>$data->id])}}" method="post">
                                @csrf
                                <input class="input" type="number" value="1" max="{{$data->quantity}}" name="quantity"/>
                            <button type="submit" class="button">Sepete Ekle</button>
                            </form>
                            <div class="clear"></div>
                        </div>

                    </div>
                    <div class="clear"></div>
                </div>
                <div class="product_desc">
                    <div id="horizontalTab">

                        <div class="resp-tabs-container">
                            <div class="product-desc">
                                {!! $data->detail !!}

                            </div>

                            <div class="review">
                                @foreach($reviews as $rs)
                                    <ul class="media-list">
                                        <li class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object" src="{{asset('assets')}}/img/small-avatar.png" alt="" />
                                            </a>
                                            <div class="media-body">
                                                <h5 class="media-heading"><a href="{{route('userprofile',['id' => $rs->id,'slug' => $rs->slug])}}">{{$rs->user->name}}</a></h5>
                                                <span>{{$rs->created_at}}</span>
                                                <strong>{{$rs->subject}}</strong>
                                                <p>{{$rs->review}}</p>
                                                <i class="fa fa-star @if ($rs->rate>0) checked @endif"></i>
                                                <i class="fa fa-star @if ($rs->rate>1) checked @endif"></i>
                                                <i class="fa fa-star @if ($rs->rate>2) checked @endif"></i>
                                                <i class="fa fa-star @if ($rs->rate>3) checked @endif"></i>
                                                <i class="fa fa-star @if ($rs->rate>4) checked @endif"></i>

                                            </div>
                                        </li>
                                    </ul>
                                @endforeach
                                <div class="your-review">

                                    <p>Write Your Own Review?</p>
                                    <form action="{{route('sendreview',['id'=>$data->id,'slug'=>$data->slug])}}" method="post" class="comment-form" name="review-form">
                                        @csrf
                                        <div>
                                            <span><label>Subject<span class="red">*</span></label></span>
                                            <span><input type="text" value="" id="subject" name="subject"></span>
                                        </div>
                                        <div>
                                            <span><label>Review<span class="red">*</span></label></span>
                                            <span><textarea name="review" id="review"> </textarea></span>
                                        </div>
                                        <div class="rate">
                                            <input type="radio" name="rate" id="star5"  value="5" />
                                            <label for="star5" title="text">5 stars</label>
                                            <input type="radio" name="rate" id="star4"  value="4" />
                                            <label for="star4" title="text">4 stars</label>
                                            <input type="radio" name="rate" id="star3"  value="3" />
                                            <label for="star3" title="text">3 stars</label>
                                            <input type="radio" name="rate" id="star2"  value="2" />
                                            <label for="star2" title="text">2 stars</label>
                                            <input type="radio" name="rate" id="star1"  value="1" />
                                            <label for="star1" title="text">1 star</label>
                                        </div>
                                        <style>*{
                                                margin: 0;
                                                padding: 0;
                                            }
                                            .rate {
                                                float: left;
                                                height: 46px;
                                                padding: 0 10px;
                                            }
                                            .rate:not(:checked) > input {
                                                position:absolute;
                                                top:-9999px;
                                            }
                                            .rate:not(:checked) > label {
                                                float:right;
                                                width:1em;
                                                overflow:hidden;
                                                white-space:nowrap;
                                                cursor:pointer;
                                                font-size:30px;
                                                color:#ccc;
                                            }
                                            .rate:not(:checked) > label:before {
                                                content: '★ ';
                                            }
                                            .rate > input:checked ~ label {
                                                color: #ffc700;
                                            }
                                            .rate:not(:checked) > label:hover,
                                            .rate:not(:checked) > label:hover ~ label {
                                                color: #deb217;
                                            }
                                            .rate > input:checked + label:hover,
                                            .rate > input:checked + label:hover ~ label,
                                            .rate > input:checked ~ label:hover,
                                            .rate > input:checked ~ label:hover ~ label,
                                            .rate > label:hover ~ input:checked ~ label {
                                                color: #c59b08;
                                            }
                                        </style>

                                        <span><button type="submit">SUBMIT REVIEW</button></span>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content_bottom">
                    <div class="heading">
                        <h3>Related Products</h3>
                    </div>
                    <div class="see">
                        <p><a href="{{route('allproductlist')}}">See all Products</a></p>
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
            <div class="rightsidebar span_3_of_1">
                @php
                    $parentCategories=\App\Http\Controllers\HomeController::categoryList();
                @endphp
                <h2>CATEGORIES</h2>
                @foreach($parentCategories as $rs)
                <ul class="side-w3ls">
                    <li><a href="{{route('categoryproducts',['id'=>$rs->id,'slug'=>$rs->title])}}">{{$rs->title}}</a>
                        <ul class="dropdown-menu-right">

                            @if(count($rs->children))
                                @include('home.categorytree',['children'=>$rs->children])
                            @endif
                        </ul>
                    </li>
                </ul>
                @endforeach


            </div>
        </div>
    </div>
</div>
</div>
@endsection
