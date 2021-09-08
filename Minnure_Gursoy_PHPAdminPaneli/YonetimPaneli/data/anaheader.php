
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1" href="index.html">
                <i class='bx bx-buildings bx-sm text-dark'></i>
                <span class="text-dark h4">Seyahat</span> <span class="text-primary h4">Bloğu</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-5 mb-2">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="<?=SITE?>anasayfaindex.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="<?=SITE?>hakkımızda">Hakkımızda</a>
                        </li>
                        <?php 
            $moduller=$VT->VeriGetir("moduller", "WHERE durum=?", array(1),"ORDER BY ID ASC");
            if($moduller!=false)
            {
                ?>
             <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="<?= SITE?>yazılar/<?=$moduller[3]["tablo"]?>"><?=$moduller[3]["baslik"]?></a>
                        </li>
                <?php
                
            }
            

            ?>
            <?php 
            $moduller=$VT->VeriGetir("moduller", "WHERE durum=?", array(1),"ORDER BY ID ASC");
            if($moduller!=false)
            {
                ?>
             <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="<?= SITE?>seyahat/<?=$moduller[5]["tablo"]?>"><?=$moduller[5]["baslik"]?></a>
                        </li>
                <?php
                
            }
            

            ?>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="<?=SITE?>iletisim">İletişim</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <a class="nav-link" href="#"><i class='bx bx-bell bx-sm bx-tada-hover text-primary'></i></a>
                    <a class="nav-link" href="#"><i class='bx bx-cog bx-sm text-primary'></i></a>
                    <a class="nav-link" href="<?=SITE?>cikis"><i class='bx bx-user-circle bx-sm text-primary'></i></a>
                </div>
            </div>
        </div>
    </nav>