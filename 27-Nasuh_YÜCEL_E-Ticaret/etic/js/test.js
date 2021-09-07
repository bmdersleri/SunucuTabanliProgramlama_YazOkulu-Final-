function checkCookie(cname) {
    var cookieName = getCookie(cname);
    if (cookieName != "") {
        return 1;
    } else {
        return 0;
    }
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return 0;
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";

}

var sayac = 0;

function checkFiyat(yeniFiyat) {
    if (sayac) {
        if (yeniFiyat < 50) {
            $(".bedavaSil").remove();
            $(".ustuCizili").removeClass("ustuCizili");
            $(".gizle1").remove();
            return 1;
        }
    }
}

Array.prototype.remove = function () {
    var what, a = arguments, L = a.length, ax;
    while (L && this.length) {
        what = a[--L];
        while ((ax = this.indexOf(what)) !== -1) {
            this.splice(ax, 1);
        }
    }
    return this;
};

window.onload = function () {

    var x = getCookie("sepet").split(".");
    x.sort();
    x = $.unique(x);
    $(".sepetUrunSayisi").append('<span class="sepetUrunSayisiSil">' + jQuery.unique(x).length + '</span>');
    if ($(".odenecekTutar").text() < 50) {
        $(".gizle1").remove();
    }

}

$(".sepetE").on("click", function () {

    if (checkCookie("sepet")) {
        setCookie("sepet", getCookie("sepet") + "." + $(this).attr('idd'), 365);
    } else {
        setCookie("sepet", $(this).attr('idd'), 365);
    }
    var x = getCookie("sepet").split(".");
    x.sort();
    x = $.unique(x);
    $(".sepetUrunSayisiSil").remove();
    $(".sepetUrunSayisi").append('<span class="sepetUrunSayisiSil">' + jQuery.unique(x).length + '</span>');

    toastr.options = {
        "closeButton": true,
        "positionClass": "toast-bottom-right",
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "2000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    toastr["success"]("Ürün sepete eklendi.");
});

$(".adetEkleA").on("click", function () {

    if (checkCookie("sepet")) {
        setCookie("sepet", getCookie("sepet") + "." + $(this).attr('idd'), 365);
    } else {
        setCookie("sepet", $(this).attr('idd'), 365);
    }

    var x = getCookie("sepet").split(".");
    $(".sepetUrunSayisiSil").remove();
    $(".sepetUrunSayisi").append('<span class="sepetUrunSayisiSil">' + jQuery.unique(x).length + '</span>');

});

$(".adetCikarA").on("click", function () {

    if (checkCookie("sepet")) {
        setCookie("sepet", getCookie("sepet") + "." + $(this).attr('idd'), 365);
    } else {
        setCookie("sepet", $(this).attr('idd'), 365);
    }

    var x = getCookie("sepet").split(".");
    $(".sepetUrunSayisiSil").remove();
    $(".sepetUrunSayisi").append('<span class="sepetUrunSayisiSil">' + jQuery.unique(x).length + '</span>');

});

var sayacA = 1;
$(".sepettenCikar").on("click", function () {
    if (checkCookie("sepet")) {
        var x = getCookie("sepet").split(".");
        var y = "";

        x.remove($(this).attr('idd'));
        for (var i = 0; i < x.length; i++) {
            if (i + 1 == x.length) {
                y += x[i];
            } else {
                y += x[i] + ".";
            }
        }
        $(".sepetUrunSayisiSil").remove();
        if (jQuery.unique(x).length) {
            $(".sepetUrunSayisi").append('<span class="sepetUrunSayisiSil">' + jQuery.unique(x).length + '</span>');
        }

        var z = $(this).attr('idd');
        var eskiTutar = $(".odenecekTutar").text();
        var urunFiyat = $(".fiyat" + z).text();
        var yeniFiyat = eskiTutar - urunFiyat;
        $(".silToplamFiyat").remove();
        $(".silToplamFiyatAlt").remove();

        var kargo = 0;
        var altUrunFiyat = yeniFiyat;
        var ustUrunFiyat = yeniFiyat;

        if (altUrunFiyat < 50) {
            if (eskiTutar > 49 && yeniFiyat < 50) {
                if (sayac == 0) {
                    sayac += 1;
                    kargo = 18.90;
                }
            }
            $(".sepetTutarEkle").append('<h5 class="card-title silToplamFiyat"><span class="odenecekTutar ">' + (ustUrunFiyat + kargo).toFixed(2) + '</span> <i class="fas fa-lira-sign"></i></h5>');
            $(".sepetTutarEkle2").append('<span class="silToplamFiyatAlt">' + (altUrunFiyat).toFixed(2) + '</span><span class="silToplamFiyatAlt"> <i class="fas fa-lira-sign"></i></span>');
            checkFiyat(yeniFiyat);
        } else {
            if (yeniFiyat < 50) {
                $(".sepetTutarEkle").append('<h5 class="card-title silToplamFiyat"><span class="odenecekTutar ">' + (ustUrunFiyat + 18.90).toFixed(2) + '</span> <i class="fas fa-lira-sign"></i></h5>');
                $(".sepetTutarEkle2").append('<span class="silToplamFiyatAlt">' + (altUrunFiyat - 18.90).toFixed(2) + '</span><span class="silToplamFiyatAlt"> <i class="fas fa-lira-sign"></i></span>');
            } else {
                $(".sepetTutarEkle").append('<h5 class="card-title silToplamFiyat"><span class="odenecekTutar ">' + (ustUrunFiyat).toFixed(2) + '</span> <i class="fas fa-lira-sign"></i></h5>');
                $(".sepetTutarEkle2").append('<span class="silToplamFiyatAlt">' + altUrunFiyat.toFixed(2) + '</span><span class="silToplamFiyatAlt"> <i class="fas fa-lira-sign"></i></span>');
            }
            checkFiyat(yeniFiyat);
        }

        kargo = 0;
        setCookie("sepet", y, 365);
        $("#" + z).hide(200, function () {
            $("#" + z).remove();
        });
        if (y == "") {
            $(".sepetBosEkle").append('<div class="col-12 text-center mt20" style="height: 250px;"><h4>Sepetinde hiç ürün yok.</h4></div>')
            $(".sepetTutarSil").remove();
            setCookie("sepet", 0, -1);
        }
        toastr.options = {
            "closeButton": true,
            "positionClass": "toast-bottom-right",
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "2000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        toastr["error"]("Ürün sepetten çıkartıldı.");
    }
})
;