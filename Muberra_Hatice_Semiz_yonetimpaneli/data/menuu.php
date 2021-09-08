<header class="tm-header" id="tm-header" style="background:teal;">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header">
                <div class="mb-3 mx-auto"><i class="fas fa-times fa-2x"></i></div>            
                <h1 class="text-center">Hatice Semiz</h1>
            </div>
            <nav class="tm-nav" id="tm-nav">            
                <ul>
                    <li class="tm-nav-item active"><a href="#" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                       Anasayfa
                    </a></li>
                    <li class="tm-nav-item"><a href="#" class="tm-nav-link">
                        <i class="fas fa-pen"></i>
                        Bloglar
                    </a></li>
                    <li class="tm-nav-item"><a href="<?=SITE?>" class="tm-nav-link">
                        <i class="fas fa-users"></i>
                        Hakkımızda
							</a></li>
                    <li class="tm-nav-item"><a href="#" class="tm-nav-link">
                        <i class="far fa-comments"></i>
                       İletişim
                    </a></li>
					<li class="tm-nav-item"><a href="<?=SITE?>" class="tm-nav-link">
                        <i class="far fa-comments"></i>
                        Admin Girişi
						<?php
							if(!empty($_SESSION["ID"]) && !empty($_SESSION["adsoyad"]) && !empty($_SESSION["mail"]))
							{
								
							}
							else
							{
								?>
								<meta http-equiv="refresh" content="0;url=<?=SITE?>giris-yap">
								<?php
								exit();
							}

							?>
                    </a></li>
                </ul>
				
            </nav>
            <div class="tm-mb-65">
                <a rel="nofollow" href="#" class="tm-social-link">
                    <i class="fab fa-facebook tm-social-icon"></i>
                </a>
                <a href="https://twitter.com" class="tm-social-link">
                    <i class="fab fa-twitter tm-social-icon"></i>
                </a>
                <a href="https://instagram.com" class="tm-social-link">
                    <i class="fab fa-instagram tm-social-icon"></i>
                </a>
                <a href="https://linkedin.com" class="tm-social-link">
                    <i class="fab fa-linkedin tm-social-icon"></i>
                </a>
            </div>
            
        </div>
    </header>