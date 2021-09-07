<header class="shadow">
  <div class="container flex flex-row mx-auto p-5" style="width: 900px;">
    <div class="flex-grow ">
      <a href="<?php echo BASE_URL . '/index.php' ?>">
        <h1 class="text-5xl font-bold  pt-8">Ahmet Gürsel</h1>
      </a>
      <p class="font-medium pt-6 text-gray-500" style="width: 500px;">Programlama, kahve, tasarım, frontend, hayvanlar, doğa ve hayata dair konularda öğrendiklerimi paylaşıyorum.</p>
    </div>
    <div class="flex flex-col font-semibold mx-4 justify-end items-center <?php echo (DIRECTORY_URI == PROJECT_URL . "/index.php" ? "" : "text-gray-500"); ?>">
      <span><a href="<?php echo BASE_URL . '/index.php' ?>">Anasayfa</a></span>
    </div>
    <div class="flex flex-col font-semibold mx-4 justify-end items-center <?php echo (DIRECTORY_URI == PROJECT_URL . "/about.php" ? "" : "text-gray-500"); ?>">
      <span><a href="<?php echo BASE_URL . '/about.php' ?>">Hakkımda</a></span>
    </div>
    <?php if (isset($_SESSION['id'])) : ?>
      <div class="flex flex-col font-semibold mx-4 justify-end items-center <?php echo (DIRECTORY_URI == PROJECT_URL . "/login.php" ? "" : "text-gray-500"); ?>">
        <div class="flex flex-row">
          <div class="group inline-block">
            <button class="outline-none focus:outline-none rounded-sm flex items-center">
              <span class="pr-1 font-semibold flex-1"><?php echo $_SESSION['kullaniciAdi'] ?></span>
              <span>
                <svg class="fill-current h-4 w-4 transform group-hover:-rotate-180
        transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
              </span>
            </button>
            <ul class="bg-white border rounded transform scale-0 group-hover:scale-100 absolute 
  transition duration-150 ease-in-out origin-top">
              <?php if (!$_SESSION['kullaniciRol']) : ?>
                <li class="rounded-sm px-3 py-1 hover:bg-gray-100"><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Admin Panel</a></li>
              <?php endif;  ?>
              <li class="rounded-sm px-3 py-1 hover:bg-gray-100"><a href="<?php echo BASE_URL . '/logout.php' ?>">Çıkış</a></li>
            </ul>
          </div>
        </div>
      <?php else : ?>
        <div class="flex flex-col font-semibold mx-4 justify-end items-center <?php echo (DIRECTORY_URI == PROJECT_URL . "/login.php" ? "" : "text-gray-500"); ?>">
          <span><a href="<?php echo BASE_URL . '/login.php' ?>">Giriş</a></span>
        </div>
      <?php endif; ?>

      </div>

      <style>
        li>ul {
          transform: translatex(100%) scale(0)
        }

        li:hover>ul {
          transform: translatex(101%) scale(1)
        }

        li>button svg {
          transform: rotate(-90deg)
        }

        li:hover>button svg {
          transform: rotate(-270deg)
        }

        .group:hover .group-hover\:scale-100 {
          transform: scale(1)
        }

        .group:hover .group-hover\:-rotate-180 {
          transform: rotate(180deg)
        }

        .scale-0 {
          transform: scale(0)
        }

        .min-w-32 {
          min-width: 8rem
        }
      </style>

</header>