# PHP Minimal Kişisel Blog Uygulaması

<p align="center">
  <img src="https://media.giphy.com/media/Qzwx87mVSr9bFwDnhy/giphy.gif?cid=790b76118b00059120933e279cf0095ade13ccf2c911c5b2&rid=giphy.gif&ct=g" />
</p>

## Demo uygulama websitesi: [Minimal Blog - Ahmet Gürsel](https://php-minimal-blog.herokuapp.com/)

Admin Kullanıcı Adı: ahmetgursel

Admin Şifre: 123456

#

Kullanılan Teknolojiler:

<ul>
<li>Geliştirme ortamında docker ile Apache, PHP ve MySQL prebuild-image ortamları kurulmuş üzerine kendi yazdığımız blog uygulaması katmanı çalıştırılmıştır. Demoyu görüntüleyebilmek amacıyla sonrasında heroku ortamında uygulama ayağa kaldırılmıştır.</li>
<li>Uygulamanın tamamı PHP dili ile yazılmıştır. Veritabanı olarak ise açık kaynak MySQL veritabanı kullanılmıştır. Http sunucusu olarak yine açık kaynak kodlu Apache servisi kullanılmıştır.</li>
<li>Uygulamada SESSION ile oturum oluşturulmuş ve sayfalar arasında bu oturum taşınmıştır. SESSION verileri okunarak bir kullanıcının o sayfayı görüp göremeyeceği ya da güncelleme yapıp yapamayacağı gibi yetkilendirmeler kontrol edilmiştir.</li>
<li>Daha hızlı geliştirme yapabilmek ve kaliteli bir tasarım ortaya çıkarabilmek amacıyla Tailwindcss frameworkü kullanılmıştır.</li>
<li>Kod ve klasör yapılarında güncel yazılım prensiplerine olabildiğince uyulmaya çalışılmıştır.</li>
<li>Herhangi bir şekilde hazır tema ya da kod şablonu kullanılmamıştır.</li>
</ul>

#

## Klasörler ve Kod Detayları

| path            | files |    code | comment |  blank |   total |
| :-------------- | ----: | ------: | ------: | -----: | ------: |
| .               |    35 | 148,112 |     260 | 42,031 | 190,403 |
| admin           |    10 |     618 |       2 |    155 |     775 |
| admin\posts     |     3 |     228 |       2 |     55 |     285 |
| admin\topics    |     3 |     160 |       0 |     43 |     203 |
| admin\users     |     3 |     194 |       0 |     46 |     240 |
| app             |    14 |     699 |      10 |    161 |     870 |
| app\components  |     4 |     212 |       0 |     30 |     242 |
| app\controllers |     3 |     257 |       5 |     63 |     325 |
| app\database    |     2 |     115 |       1 |     28 |     144 |
| app\helpers     |     5 |     115 |       4 |     40 |     159 |
| assets          |     1 | 146,499 |     246 | 41,626 | 188,371 |
| assets\css      |     1 | 146,499 |     246 | 41,626 | 188,371 |

\*\*\* NOT: Projede kullanılan Tailwindcss Framework'üne ait css dosyası minify edilmemiştir. O yüzden 188k+ satır kod olarak görünmektedir.

#

Youtube Kanalımız: BMDersleri

Bağlantı: https://www.youtube.com/channel/UCIdYgV-XFjv9q0IHtzUTtQw

Kısa Bağlantı: https://bit.ly/32k9MnJ

Github Adresimiz: https://github.com/bmdersleri

Hazırlayan: Ahmet GÜRSEL
