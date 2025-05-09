<div data-menu-load="{{ route('layout.menu-footer') }}"></div>


</div>
<!-- End of Page Content-->
<!-- All Menus, Action Sheets, Modals, Notifications, Toasts, Snackbars get Placed outside the <div class="page-content"> -->

<!-- Menu Share -->
<div id="menu-share" class="menu menu-box-bottom menu-box-detached">
    <div class="menu-title mt-n1"><h1>Share the Love</h1><p class="color-highlight">Just Tap the Social Icon. We'll add the Link</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
    <div class="content mb-0">
        <div class="divider mb-0"></div>
        <div class="list-group list-custom-small list-icon-0">
            <a href="auto_generated" class="shareToFacebook external-link">
                <i class="font-18 fab fa-facebook-square color-facebook"></i>
                <span class="font-13">Facebook</span>
                <i class="fa fa-angle-right"></i>
            </a>
            <a href="auto_generated" class="shareToTwitter external-link">
                <i class="font-18 fab fa-twitter-square color-twitter"></i>
                <span class="font-13">Twitter</span>
                <i class="fa fa-angle-right"></i>
            </a>
            <a href="auto_generated" class="shareToLinkedIn external-link">
                <i class="font-18 fab fa-linkedin color-linkedin"></i>
                <span class="font-13">LinkedIn</span>
                <i class="fa fa-angle-right"></i>
            </a>
            <a href="auto_generated" class="shareToWhatsApp external-link">
                <i class="font-18 fab fa-whatsapp-square color-whatsapp"></i>
                <span class="font-13">WhatsApp</span>
                <i class="fa fa-angle-right"></i>
            </a>
            <a href="auto_generated" class="shareToMail external-link border-0">
                <i class="font-18 fa fa-envelope-square color-mail"></i>
                <span class="font-13">Email</span>
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
</div>

<!-- Be sure this is on your main visiting page, for example, the index.html page-->
<!-- Install Prompt for Android -->
<div id="menu-install-pwa-android" class="menu menu-box-bottom rounded-m">
    <img class="mx-auto mt-4 rounded-m" src="{{asset('images/logo.png')}}" alt="img" width="90">
    <h4 class="text-center mt-4 mb-2">Step Laundry on your Home Screen</h4>
    <p class="text-center boxed-text-xl">
        Install Step Laundry on your home screen, and access it just like a regular app. It really is that simple!
    </p>
    <div class="boxed-text-l">
        <a href="#" class="pwa-install mx-auto btn btn-m font-600 bg-highlight">Add to Home Screen</a>
        <a href="#" class="pwa-dismiss close-menu btn-full mt-3 pt-2 text-center text-uppercase font-600 color-red-light font-12 pb-4 mb-3">Maybe later</a>
    </div>
</div>

<!-- Install instructions for iOS -->
<div id="menu-install-pwa-ios" class="menu menu-box-bottom rounded-m">
    <div class="boxed-text-xl top-25">
        <img class="mx-auto mt-4 rounded-m" src="{{asset('images/logo.png')}}" alt="img" width="90">
        <h4 class="text-center mt-4 mb-2">Step Laundry on your Home Screen</h4>
        <p class="text-center ms-3 me-3">
            Install Step Laundry on your home screen, and access it just like a regular app. Open your Safari menu and tap "Add to Home Screen".
        </p>
        <a href="#" class="pwa-dismiss close-menu btn-full mt-3 text-center text-uppercase font-700 color-red-light opacity-90 font-110 pb-5">Maybe later</a>
    </div>
</div>

</div>

<script type="text/javascript" src="{{ asset('scripts/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/custom.js') }}"></script>
</body>
</html>