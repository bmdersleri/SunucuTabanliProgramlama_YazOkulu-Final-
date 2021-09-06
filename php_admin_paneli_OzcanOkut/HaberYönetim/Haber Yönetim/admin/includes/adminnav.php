
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Gezinmeyi aç/kapat</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"> ADMIN PANEL</a>
            </div>
            
            <ul class="nav navbar-right top-nav">
                <li><a href="../index.php">SİTEYİ ZİYARET ET</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="./profile.php?section=<?php echo $_SESSION['username']; ?>"><i class="fa fa-fw fa-user"></i> Profil</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Çıkış Yap</a>
                        </li>
                    </ul>
                </li>
            </ul>

<div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php" class="active"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>

                   <li>
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="collapse" data-target="#posts"><i class="fa fa-fw fa-file-text"></i> Gönderiler <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="posts" class="collapse">
                            <li>
                                <a href="./posts.php">Tüm Gönderileri Görüntüle</a>
                            </li>
                            <li>
                                <a href="./publishnews.php">Yeni Gönderi Ekle</a>
                            </li>
                        </ul>
                        <li>
                         <a href="javascript:;" data-toggle="collapse" data-target="#user"><i class="fa fa-fw fa-users"></i> Kullancılar <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="user" class="collapse">
                            <li>
                                <a href="./users.php">Tüm Kullanıcıları Görüntüle</a>
                            </li>
                            <li>
                                <a href="adduser.php">Yeni Kullanıcı Ekle</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="./profile.php?section=<?php echo $_SESSION['username']; ?>"><i class="fa fa-fw fa-user"></i> Profil</a>
                    </li>
                </ul>
            </div>
        </nav>