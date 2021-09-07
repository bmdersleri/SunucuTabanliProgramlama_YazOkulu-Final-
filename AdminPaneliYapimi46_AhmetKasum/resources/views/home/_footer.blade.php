@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp

<div class="footer">
    <div class="wrap">
        <div class="section group">
            <div class="col_1_of_4 span_1_of_4">
                <h4>Information</h4>
                <ul>
                    <li><a href="{{route('aboutus')}}">About Us</a></li>
                    <li><a href="{{route('faq')}}">Faq</a></li>
                    <li><a href="{{route('references')}}">References</a></li>
                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">

            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h4>My account</h4>
                <ul>

                    @auth
                    <li><a href="{{route('userprofile')}}">My Profile</a></li>
                    <li><a href="{{route('user_shopcart')}}">View Cart</a></li>
                    <li><a href="{{route('logout')}}">Logout</a></li>
                    @else
                    <li><a href="/login">Sign In</a></li>
                    <li><a href="/register">Register</a></li>
                    @endauth
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h4>Contact</h4>
                <ul>
                    <li><span>+91-123-456789</span></li>
                    <li><span>+00-123-000000</span></li>
                </ul>
                <div class="social-icons">
                    <h4>Follow Us</h4>
                    <ul>
                        <li><a href="{{$setting->facebook}}" target="_blank"><img src="{{ asset('assets')}}/images/facebook.png" alt="" /></a></li>
                        <li><a href="{{$setting->twitter}}" target="_blank"><img src="{{ asset('assets')}}/images/twitter.png" alt="" /></a></li>
                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copy_right">
        <p>&copy; 2021 home_shoppe. All rights reserved | Design by Ahmet Kasum</p>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#" id="toTop"><span id="toTopHover"> </span></a>
