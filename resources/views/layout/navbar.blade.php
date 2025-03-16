<script>
    function counterFeature(feature) {
        console.log('counter-feature-' + feature);
    }
</script>

<div class="header header-auto-show header-fixed header-logo-center">

    <a href="index.html" class="header-title">Stepup Laundry</a>

<!--    <a href="#" data-menu="menu-main" class="header-icon header-icon-1"><i class="fas fa-bars"></i></a>-->
    <a href="#" data-toggle-theme class="header-icon header-icon-4 show-on-theme-dark"><i class="fas fa-sun"></i></a>
    <a href="#" data-toggle-theme class="header-icon header-icon-4 show-on-theme-light"><i class="fas fa-moon"></i></a>
    <a href="#" data-menu="menu-share" class="header-icon header-icon-3"><i class="fas fa-share-alt"></i></a>
</div>


<div id="footer-bar" class="footer-bar-6">

    <a href="#" data-toast="snackbar-coming-soon-small" onclick="counterFeature('blog')"><i class="fa fa-book"></i><span>Blog</span></a>
    <a href="#" data-toast="snackbar-coming-soon-small" onclick="counterFeature('transaction')"><i class="fa fa-list"></i><span>Transaction</span></a>
    <a href="{{ route('home') }}" class="circle-nav active-nav" onclick="counterFeature('home')"><i class="fa fa-home"></i><span>Home</span></a>
    <a href="#" data-toast="snackbar-coming-soon-small" onclick="counterFeature('promo')"><i class="fa fa-percent"></i><span>Promo</span></a>
    <a href="#" data-toast="snackbar-coming-soon-small" onclick="counterFeature('user')"><i class="fa fa-user"></i><span>Account</span></a>


</div>

<div class="page-title page-title-fixed">
    <h1 style="font-size: 23px!important;"><a style="color: inherit;" href="{{ route('home') }}">Stepup Laundry</a></h1>
    <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-share" onclick="counterFeature('share-top-navigation')"><i class="fa fa-share-alt"></i></a>
    <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" onclick="counterFeature('theme-light')" data-toggle-theme><i class="fa fa-moon"></i></a>
    <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" onclick="counterFeature('theme-dark')" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
<!--    <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" onclick="counterFeature('user')"><i class="fa fa-user"></i></a>-->
</div>
<div class="page-title-clear"></div>

<!--TOAST COMING SOON-->
<div id="snackbar-coming-soon-small" class="snackbar-toast color-white mb-4 bg-highlight color-white" data-bs-delay="3000" data-bs-autohide="true"><i class="fa-solid fa-hammer me-3"></i>This feature is currently under development</div>
<div id="snackbar-coming-soon" class="snackbar-toast color-white bg-yellow-dark mb-4" data-bs-delay="3000" data-bs-autohide="true">
    <h1 class="color-white font-20 pt-3 pb-3 mb-n4">Segera Hadir</h1>
    <p class="color-white mb-0 pb-1">Fitur ini sedang dalam tahap pengembangan</p>
</div>

<!--END TOAST COMING SOON-->

<div id="menu-main" class="menu menu-box-left rounded-0" data-menu-width="280" data-menu-active="nav-welcome" data-menu-load="{{ route('layout.menu-navbar') }}"></div>
<div id="menu-share" class="menu menu-box-bottom rounded-m"  data-menu-load="{{ route('layout.menu-share') }}" data-menu-height="370"> </div>
<div id="menu-colors" class="menu menu-box-bottom rounded-m" data-menu-load="{{ route('layout.menu-colors') }}" data-menu-height="480"></div>
