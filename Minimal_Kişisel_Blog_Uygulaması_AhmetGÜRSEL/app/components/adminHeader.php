<header class="shadow">
  <div class="container flex flex-row mx-auto px-5 py-7 mt-6" style="width: 900px;">

    <div class="flex flex-col flex-grow font-semibold mx-4 justify-end items-center text-gray-500">
      <div class="flex flex-row">
        <div class="group inline-block">
          <button class="outline-none focus:outline-none rounded-sm flex items-center">
            <span class="pr-1 font-semibold flex-1">Gönderiler</span>
            <span>
              <svg class="fill-current h-4 w-4 transform group-hover:-rotate-180
            transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
              </svg>
            </span>
          </button>
          <ul class="bg-white border rounded transform scale-0 group-hover:scale-100 absolute 
      transition duration-150 ease-in-out origin-top">

            <li class="rounded-sm px-3 py-1 hover:bg-gray-100"><a href="<?php echo BASE_URL . '/admin/posts/create.php' ?>">Gönderi Ekle</a></li>

            <li class="rounded-sm px-3 py-1 hover:bg-gray-100"><a href="<?php echo BASE_URL . '/admin/posts/index.php' ?>">Gönderileri Yönet</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="flex flex-col flex-grow font-semibold mx-4 justify-end items-center text-gray-500">
      <div class="flex flex-row">
        <div class="group inline-block">
          <button class="outline-none focus:outline-none rounded-sm flex items-center">
            <span class="pr-1 font-semibold flex-1">Kullanıcılar</span>
            <span>
              <svg class="fill-current h-4 w-4 transform group-hover:-rotate-180
            transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
              </svg>
            </span>
          </button>
          <ul class="bg-white border rounded transform scale-0 group-hover:scale-100 absolute 
      transition duration-150 ease-in-out origin-top">

            <li class="rounded-sm px-3 py-1 hover:bg-gray-100"><a href="<?php echo BASE_URL . '/admin/users/create.php' ?>">Kullanıcı Ekle</a></li>

            <li class="rounded-sm px-3 py-1 hover:bg-gray-100"><a href="<?php echo BASE_URL . '/admin/users/index.php' ?>">Kullanıcıları Yönet</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="flex flex-col flex-grow font-semibold mx-4 justify-end items-center text-gray-500">
      <div class="flex flex-row">
        <div class="group inline-block">
          <button class="outline-none focus:outline-none rounded-sm flex items-center">
            <span class="pr-1 font-semibold flex-1">Konular</span>
            <span>
              <svg class="fill-current h-4 w-4 transform group-hover:-rotate-180
            transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
              </svg>
            </span>
          </button>
          <ul class="bg-white border rounded transform scale-0 group-hover:scale-100 absolute 
      transition duration-150 ease-in-out origin-top">

            <li class="rounded-sm px-3 py-1 hover:bg-gray-100"><a href="<?php echo BASE_URL . '/admin/topics/create.php' ?>">Konu Ekle</a></li>

            <li class="rounded-sm px-3 py-1 hover:bg-gray-100"><a href="<?php echo BASE_URL . '/admin/topics/index.php' ?>">Konuları Yönet</a></li>
          </ul>
        </div>
      </div>
    </div>

    <?php if (isset($_SESSION['id'])) : ?>
      <div class="flex flex-col flex-grow font-semibold mx-4 justify-end items-center text-gray-500">
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
                <li class="rounded-sm px-3 py-1 hover:bg-gray-100"><a href="<?php echo BASE_URL . '/index.php' ?>">Anasayfa</a></li>
              <?php endif;  ?>
              <li class="rounded-sm px-3 py-1 hover:bg-gray-100"><a href="<?php echo BASE_URL . '/logout.php' ?>">Çıkış</a></li>
            </ul>
          </div>
        </div>
      <?php else : ?>
        <?php header('location: ' . BASE_URL . '/index.php');
        die();
        ?>
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