
<div class="container mt20 yaziBoyutu30 " style="border-top: 1px solid black;">
    <div class="row text-center mt20">
        <div class="col-4 bold balsamiqBold">
            <h5><i class="fas fa-barcode"></i><span> Kaliteli Orjinal Ürünler</span></h5>
        </div>
        <div class="col-4">
            <h5><i class="fas fa-lock"></i><span> Güvenli Ödeme</span></h5>
        </div>
        <div class="col-4">
            <h5><i class="fas fa-headset"></i><span> 7/24 Canlı Destek</span></h5>
        </div>
    </div>
    <div class="row standart balsamiqBold mt20">
        <div class="col-2">
            <span>Link Başlık</span>
            <ul>
                <li><a href="#"> Link 1</a></li>
                <li><a href="#"> Link 2</a></li>
                <li><a href="#"> Link 3</a></li>
                <li><a href="#"> Link 4</a></li>
                <li><a href="#"> Link 5</a></li>
            </ul>
        </div>

        <div class="col-2">
            <span>Link Başlık</span>
            <ul>
                <li><a href="#"> Link 1</a></li>
                <li><a href="#"> Link 2</a></li>
                <li><a href="#"> Link 3</a></li>
                <li><a href="#"> Link 4</a></li>
                <li><a href="#"> Link 5</a></li>
            </ul>
        </div>

        <div class="col-2">
            <span>Link Başlık</span>
            <ul>
                <li><a href="#"> Link 1</a></li>
                <li><a href="#"> Link 2</a></li>
                <li><a href="#"> Link 3</a></li>
                <li><a href="#"> Link 4</a></li>
                <li><a href="#"> Link 5</a></li>
            </ul>
        </div>

        <div class="col-2">
            <span>Link Başlık</span>
            <ul>
                <li><a href="#"> Link 1</a></li>
                <li><a href="#"> Link 2</a></li>
                <li><a href="#"> Link 3</a></li>
                <li><a href="#"> Link 4</a></li>
                <li><a href="#"> Link 5</a></li>
            </ul>
        </div>

        <div class="col-2">
            <span>Link Başlık</span>
            <ul>
                <li><a href="#"> Link 1</a></li>
                <li><a href="#"> Link 2</a></li>
                <li><a href="#"> Link 3</a></li>
                <li><a href="#"> Link 4</a></li>
                <li><a href="#"> Link 5</a></li>
            </ul>
        </div>

        <div class="col-2">
            <span>Link Başlık</span>
            <ul>
                <li><a href="#"> Link 1</a></li>
                <li><a href="#"> Link 2</a></li>
                <li><a href="#"> Link 3</a></li>
                <li><a href="#"> Link 4</a></li>
                <li><a href="#"> Link 5</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="container-fluid header-bg-color standart text-white text-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-2 mt25">
                <img src="img/logo.png" alt="logo">
            </div>
            <div class="col-3 mt25">
                    <span>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </span>
            </div>
            <div class="col-2 offset-1 mt25">
                <h3>
                    <a href="#"><i class="fab fa-facebook-square text-white"></i></a>
                    <a href="#"><i class="fab fa-twitter-square text-white"></i></a>
                    <a href="#"><i class="fab fa-google-plus-square text-white"></i></a>
                    <a href="#"><i class="fab fa-instagram-square text-white"></i></a>
                    <a href="#"><i class="fab fa-youtube-square text-white"></i></a>
                </h3>
            </div>

            <div class="col-2 mt25">
                <h3>
                    <a href="#"><i class="fab fa-cc-visa text-white"></i></a>
                    <a href="#"><i class="fab fa-cc-mastercard text-white"></i></a>
                    <a href="#"><i class="fab fa-cc-paypal text-white"></i></a>
                    <a href="#"><i class="fab fa-cc-paypal text-white"></i></a>
                </h3>
            </div>

            <div class="col-2 mt25">
                <h3>
                    <a href="#"><i class="fab fa-google-play text-white"></i></a>
                    <a href="#"><i class="fab fa-app-store text-white"></i></a>
                </h3>
            </div>
        </div>
        <div class="row h20"></div>
    </div>
</div>


<script src="js/jquery-ui.min.js"></script>
<script src="js/fontawesome.js"></script>
<script src="js/uyelik/3.3.5/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/index.js"></script>
<script src="js/tabs.js"></script>
<script src="js/min.js"></script>
<script src="js/test.js"></script>
<link href="js/req/toastr.css" rel="stylesheet"/>
<script src="js/req/toastr.js"></script>
<script src="js/jquery.payment.js"></script>

<script>


    $(function() {
        $( "#urunAra" ).autocomplete(
            {
                source:'data/select.php',
                focus: function(event, ui) {
                    $("input#urunAra").val(ui.item.label);
                },
                select: function(event, ui) {

                    $("#testForm button").click(); }
            })
    });
</script>