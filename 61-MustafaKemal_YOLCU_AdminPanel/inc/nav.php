﻿<body>

<h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">final proje</span>
    <span class="site-heading-lower">sunucu tabanli programlama</span>
</h1>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item px-lg-4 <?php echo $sayfa == 'Ana Sayfa' ? 'active' : '' ?>">
                    <a class="nav-link text-uppercase text-expanded" href="anasayfa">Ana Sayfa

                    </a>
                </li>
                <li class="nav-item px-lg-4 <?php echo $sayfa == 'Hakkımızda' ? 'active' : '' ?>">
                    <a class="nav-link text-uppercase text-expanded" href="hakkimizda">Hakkımızda</a>
                </li>
                <li class="nav-item px-lg-4 <?php echo $sayfa == 'Ürünler' ? 'active' : '' ?>">
                    <a class="nav-link text-uppercase text-expanded" href="urunler">Ürünler</a>
                </li>
                <li class="nav-item px-lg-4 <?php echo $sayfa == 'Magaza' ? 'active' : '' ?>">
                    <a class="nav-link text-uppercase text-expanded" href="magaza">Magaza</a>
                </li>
                <li class="nav-item px-lg-4 <?php echo $sayfa == 'İletişim' ? 'active' : '' ?>">
                    <a class="nav-link text-uppercase text-expanded" href="iletisim">İLETİŞİM</a>
                </li>
            </ul>
        </div>
    </div>
</nav>