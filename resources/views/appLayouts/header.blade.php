<style>
    .nav-menus {
        width: auto;
    }

    .avatar-circle {
        width: 30px;
        height: 30px;
        background-color: rgb(48, 82, 151);
        /* Change color as needed */
        color: white;
        font-weight: bold;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 14px;
        text-transform: uppercase;
    }

    .auth-name {
        margin-top: 4px;
        margin-left: 6px;
        margin-right: 6px;
    }

    .head-icon {
        display: flex;
    }

    .profile-dropdown-1 {
        left: -130px !important;
        width: 280px !important;
        top: 38px !important;
        box-shadow: rgba(0, 0, 0, 0.22) 0px 0.602187px 0.602187px -1.25px, rgba(0, 0, 0, 0.19) 0px 2.28853px 2.28853px -2.5px, rgba(0, 0, 0, 0.08) 0px 10px 10px -3.75px !important;
        border-radius: 8px !important;
    }

    .header-wrapper-1 {
        padding: 8px 30px !important;
    }


    .profile-dropdown-1 .fa-angle-right,
    .fa-angle-down {
        display: none !important;
    }

    .profile-dropdown-1 .sidebar-submenu li a {
        color: #3f475a !important;
    }

    #premiumprofilemodal .content-cont {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        /* padding: 10px; */
    }

    #premiumprofilemodal .illustration {
        width: 270px;
        object-fit: cover;
        margin-right: 10px;
    }

    #premiumprofilemodal .content {
        flex: 1;
    }

    #premiumprofilemodal .modal-content {
        height: auto !important;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .section {
        margin-bottom: 15px;
    }

    .section h6 {
        font-size: 16px;
        /* font-weight: bold; */
    }

    .section p {
        margin: 0;
        padding-left: 20px;
    }

    .initial-ul {
        list-style: disc !important;
        margin-left: 38px;
    }

    .btn-close-prem-modal {
        background-color: #e5e5e5 !important;
        padding: 13px !important;
        border-radius: 50px !important;
        border: 1px solid #827e86 !important;
    }
</style>
<div class="page-header page-header-1">
    <div class="header-wrapper header-wrapper-1 row m-0">
        <form class="form-inline search-full col" action="#" method="get">
            <div class="form-group w-100">
                <div class="Typeahead Typeahead--twitterUsers">
                    <div class="u-posRelative"><input
                            class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                            placeholder="Search Anything Here..." name="q" title="" autofocus>
                        <div class="spinner-border Typeahead-spinner" role="status"><span
                                class="sr-only">Loading...</span></div><i class="close-search"
                            data-feather="x"></i>
                    </div>
                    <div class="Typeahead-menu"></div>
                </div>
            </div>
        </form>
        <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="#"><img class="img-fluid for-light"
                        src="{{ asset('assets/images/logo/logo.png') }}" alt=""><img
                        class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_dark.png') }}"
                        alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle"
                    data-feather="align-center"></i></div>
        </div>
        <div class="left-header col-xxl-5 col-xl-6 col-lg-5 col-md-4 col-sm-3 p-0">
            <div class="notification-slider">
                <div class="d-flex h-100"> <img src="{{ asset('assets/images/giftools.gif') }}" alt="gif">
                    <h6 class="mb-0 f-w-400"><span class="font-primary">Don't Miss Out! </span><span
                            class="f-light"> Out new update has been release.</span></h6><i
                        class="icon-arrow-top-right f-light"></i>
                </div>
                <div class="d-flex h-100"><img src="{{ asset('assets/images/giftools.gif') }}" alt="gif">
                    <h6 class="mb-0 f-w-400"><span class="f-light">Explore the industries! </span>
                    </h6><a class="ms-1" href="https://praxmarket.com" target="_blank">Vist now !</a>
                </div>
            </div>
        </div>


        <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
            <ul class="nav-menus">

                <li> <span>


                        <div class="subscriptionStatusNotifier"></div>

                    </span></li>

                <li class="fullscreen-body"> <span><svg id="maximize-screen">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#full-screen') }}"></use>
                        </svg></span></li>

                <li class="onhover-dropdown">
                    <div class="notification-box"><svg>
                            <use href="{{ asset('assets/svg/icon-sprite.svg#notification') }}"></use>
                        </svg><span class="badge rounded-pill badge-danger" id="notoficationSpanIdentifer">1 </span></div>
                    <div class="onhover-show-div notification-dropdown">
                        <h6 class="f-18 mb-0 dropdown-title">Notifications </h6>
                        <ul>

                            <li id="premiumProfileNotificationIdentifier" class="b-l-warning border-4 toast default-show-toast align-items-center text-light border-0 fade show"
                                aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                                <div class="d-flex justify-content-between">
                                    <div class="toast-body">
                                        <p id="premiumProfleLoader">Premium Profile is Pending</p>
                                    </div><button class="btn-close btn-close-white me-2 m-auto" type="button"
                                        data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>




                <li class="profile-nav onhover-dropdown pe-0 py-0">
                    <div class="d-flex profile-media">

                        <div class="avatar-circle">
                            <span class="avatar-text">{{ strtoupper(substr(Auth::user()->name ?? 'User', 0, 1)) }}</span>
                        </div>
                        <div class="head-icon">
                            <span class="auth-name">{{ !empty(Auth::user()) ? ucfirst(substr(Auth::user()->name, 0, 8)) : null }}</span>
                            <p class="mb-0">{{ str_replace('_', ' ', Auth::user()->role[0] ?? '') }}
                                <i class="middle fa-solid fa-angle-down"></i>
                            </p>
                        </div>
                    </div>

                    <ul class="profile-dropdown onhover-show-div profile-dropdown-1">
                        <li><a href="#"><i data-feather="log-out"> </i><span>Log out</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <script class="result-template" type="text/x-handlebars-template"><div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">name</div>
            </div>
            </div></script>
        <script class="empty-template"
            type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
    </div>
</div>


<div class="modal fade" tabindex="-1" role="dialog" id="premiumprofilemodal"
    aria-labelledby="tooltipmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><img class="for-light" src="{{ asset('newAssets/img/premiumpage/Crown.png') }}" style="width:28px;height:25px;object-fit: cover;margin-right:10px" alt="Logo for light theme">Premium Profile – Unlock More Features with PRAX Market Premium</h5><button
                    class="btn-close btn-close-prem-modal" type="button" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <div class="modal-body dark-modal">
                <div class="container content-cont">
                    <img class="for-light" src="{{ asset('newAssets/img/premiumpage/initalmodalp1.png') }}" style="width:270px;object-fit: cover;margin-right:10px" alt="Logo for light theme">
                    <div class="content">
                        <div class="section">
                            <div class="large-modal-header"><i data-feather="chevrons-right"></i>
                                <h6>Why Go Premium?</h6>
                            </div>
                            <p>Upgrade to a premium profile to access powerful add-on features that enhance your PRAX Market experience.</p>
                        </div>
                        <div class="section">
                            <div class="large-modal-header"><i data-feather="chevrons-right"></i>
                                <h6>Set Up Your Premium Profile: </h6>
                            </div>
                            <ul class="initial-ul">
                                <li>Navigate to: Left Panel → Settings → Profile Settings → Profile Setup</li>
                                <li>Update your details to activate your premium profile.</li>
                            </ul>

                        </div>
                        <div class="section">
                            <div class="large-modal-header"><i data-feather="chevrons-right"></i>
                                <h6>Premium Add-on Features & Capabilities: </h6>
                            </div>
                            <ul class="initial-ul">
                                <li>Showcase your profile to all Users, including comprehensive details on capabilities, machines, job postings, and stay connected in the digital era.</li>
                                <li>Unlimited Request for Quotation : Send RFQs without any restrictions.</li>
                                <li>Enjoy attractive discounts on all media posts and advertisements</li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer"> <button class="btn btn-secondary" type="button"
                    data-bs-dismiss="modal">No, I'll do it later</button><a class="btn btn-primary"
                    type="button" href="#">Proceed to edit</a></div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {

        $("#premiumProfleLoader").click(function() {
            var myModal = new bootstrap.Modal(document.getElementById('premiumprofilemodal'));
            myModal.show();
        });
      
    });
    $(document).ready(function() {
        var $button = $(`<button class="btn btn-pill btn-outline-primary">Active</button>`);

    });
</script>