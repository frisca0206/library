<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= url_to('dashboard') ?>" class="brand-link">
        <img src="<?= base_url('adminLTE'); ?>/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Restaurant</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-weight="treeview" role="menu" dara-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                <li class="nav-header">Menu</li>
                <li class="nav-item">
                    <a href="<?= url_to('dashboard') ?>" class="nav-link">
                        <i class="fas fa-home nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= url_to('heavy_meal') ?>" class="nav-link">
                        <i class="fas fa-bread-slice nav-icon"></i>
                        <p> Heavy Meal</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= url_to('dessert') ?>" class="nav-link">
                        <i class="fas fa-cheese nav-icon"></i>
                        <p> Dessert</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= url_to('drink') ?>" class="nav-link">
                        <i class="fas fa-glass-martini-alt nav-icon"></i>
                        <p> Drink</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= url_to('kategori') ?>" class="nav-link">
                        <i class="fas fa-paw nav-icon"></i>
                        <p> Kategori</p>
                    </a>
                </li>
                </li>
            </ul>
        </nav>
        <!--/.sidebar-menu-->
    </div>
    <!--/.sidebar -->
</aside>