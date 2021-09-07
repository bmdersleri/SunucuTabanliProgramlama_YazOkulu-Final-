$(document).ready(function () {
    $('.aktifPasif').click(function (event) {
        var id = $(this).attr("id"); 
        var durum = ($(this).is(':checked')) ? '1' : '0';
        $.ajax({
            type: 'POST',
            url: 'updateProductStatus.php', 
            data: {id: id, durum: durum}, 
            success: function (result) {
                $('#sonuc').text(result);
            },
            error: function () {
                alert('Hata');
            }
        });
    });
});
