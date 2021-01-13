<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="{{ route('admin_home') }}">
            <img src="{{ asset('assets') }}/admin/images/icon/logo.png" alt="Cool Admin"/>
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">



                <li class="active has-sub">
                    <a class="js-arrow" href=" {{route ('admin_category')}} ">
                        <i class="fas fa-tachometer-alt"></i>Menüler(Kategori)</a>

                </li>
                <li class="active has-sub">
                    <a href=" {{route ('admin_hizmetler')}}" class="js-arrow">
                        <i class="fas fa-tachometer-alt"></i>Hizmetler</a>

                </li>
                <li>
                    <a href="chart.html">
                        <i class="fas fa-chart-bar"></i>Store Ürünler</a>
                </li>

                <li>
                    <a href="table.html">
                        <i class="fas fa-table"></i>Tables</a>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Pages</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                        <li>
                            <a href="register.html">Register</a>
                        </li>
                        <li>
                            <a href="forget-pass.html">Forget Password</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
