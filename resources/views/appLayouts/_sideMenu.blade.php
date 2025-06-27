<!-- Page Sidebar Start-->
<style>
        @media (max-width: 768px) {
                .logo-wrapper {
                        padding: 3px 30px !important;
                }
        }

        .logo-wrapper {
                box-shadow: unset !important;
        }

        .back-btn {
                right: 11px !important;
        }

        /* .siderbar-1 {
            border-right: 2px solid #E5E5E5;
            box-shadow: unset !important;

    } */

        .siderbar-link-1 .sidebar-links .simplebar-wrapper .simplebar-mask .simplebar-content-wrapper .simplebar-content>li .sidebar-link.active {
                background-color: #EDE9FE !important;
                color: #7366ff;
        }

        /* .text-dash{
    color: #7366ff !important;
} */
</style>
<div class="sidebar-wrapper siderbar-1" data-sidebar-layout="stroke-svg">
        <div>
                <div class="logo-wrapper"><a href="#"><img class="for-light"
                                        src="{{ asset('assets/images/logo/praxlogo.png') }}" style="width:80%" alt=""><img class="for-dark"
                                        src="{{ asset('assets/images/logo/praxlogo.png') }}" style="width:80%" alt=""></a>
                        <div class="back-btn"><i class="fa-solid fa-angle-left"></i></div>
                        <!-- <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid">
                            </i></div> -->
                </div>
                <div class="logo-icon-wrapper"><a href="#"><img class="img-fluid"
                                        src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a></div>
                <nav class="sidebar-main siderbar-link-1">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="sidebar-menu ">
                                <ul class="sidebar-links" id="simple-bar">
                                        <li class="back-btn"><a href="#"><img class="img-fluid"
                                                                src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a>
                                                <div class="mobile-back text-end"><span>Back</span><i class="fa-solid fa-angle-right ps-2"
                                                                aria-hidden="true"></i></div>
                                        </li>
                                        <li class="pin-title sidebar-main-title">
                                                <div>
                                                        <!-- <h6>Pinned</h6> -->
                                                </div>
                                        </li>


                                        <li class="sidebar-main-title">
                                                <div>
                                                        <h6 class="">Core Business Areas</h6>
                                                </div>
                                        </li>

                                      

                                        <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                                                        class="sidebar-link sidebar-title link-nav" href="{{ route('bookmark.index') }}">
                                                        <i data-feather="bookmark"></i>
                                                        <span>Bookmarked</span></a></li>





                                </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                </nav>
        </div>
</div>
<!-- Page Sidebar Ends-->