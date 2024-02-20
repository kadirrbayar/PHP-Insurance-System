<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo BASE_URL.'index.php';?>" class="nav-link">Ana Sayfa</a>
        </li>
    </ul>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?php echo BASE_URL.'index.php';?>" class="brand-link">
        <img src="<?php echo BASE_URL.'dist/img/AdminLTELogo.png';?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Paneli</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo BASE_URL.'dist/img/user2-160x160.jpg';?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo $_SESSION['Name'] ?></a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?php echo BASE_URL.'index.php';?>" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Ana Sayfa
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo BASE_URL.'Testimonials/testimonialList.php';?>" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Referanslar
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo BASE_URL.'Blogs/blogList.php';?>" class="nav-link">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p>
                            Bilgi Bankası
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo BASE_URL.'About/aboutEdit.php';?>" class="nav-link">
                        <i class="nav-icon fas fa-bookmark"></i>
                        <p>
                            Hakkımızda
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo BASE_URL.'Teams/teamsList.php';?>" class="nav-link">
                        <i class="nav-icon fas fa-user-shield"></i>
                        <p>
                            Ekip
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo BASE_URL.'Requests/requestList.php';?>" class="nav-link">
                        <i class="nav-icon fas fa-inbox"></i>
                        <p>
                            Gelen Teklifler
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo BASE_URL.'Profile/userEdit.php';?>" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Profil Düzenle
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../logout.php" class="nav-link">
                        <i class="nav-icon fas fa-arrow-left"></i>
                        <p>
                            Çıkış Yap
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>