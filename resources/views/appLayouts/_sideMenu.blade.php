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
                <div class="logo-wrapper"><a href="{{ route('network.index') }}"><img class="for-light"
                                        src="{{ asset('assets/images/logo/praxlogo.png') }}" style="width:80%" alt=""><img class="for-dark"
                                        src="{{ asset('assets/images/logo/praxlogo.png') }}" style="width:80%" alt=""></a>
                        <div class="back-btn"><i class="fa-solid fa-angle-left"></i></div>
                        <!-- <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid">
                            </i></div> -->
                </div>
                <div class="logo-icon-wrapper"><a href="{{ route('network.index') }}"><img class="img-fluid"
                                        src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a></div>
                <nav class="sidebar-main siderbar-link-1">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="sidebar-menu ">
                                <ul class="sidebar-links" id="simple-bar">
                                        <li class="back-btn"><a href="{{ route('network.index') }}"><img class="img-fluid"
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
                                                        class="sidebar-link sidebar-title link-nav" href="{{ route('dashboard.index') }}">
                                                        <i data-feather="home"></i>
                                                        <span>Dashboard</span></a></li>



                                        <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                                                        class="sidebar-link sidebar-title link-nav" href="{{ route('network.index') }}">
                                                        <i data-feather="share-2"></i>
                                                        <span>Network</span></a></li>

                                        <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                                                        class="sidebar-link sidebar-title link-nav" href="{{ route('bookmark.index') }}">
                                                        <i data-feather="bookmark"></i>
                                                        <span>Bookmarked</span></a></li>

                                        <li class="sidebar-main-title">
                                                <div>
                                                        <h6 class="">Smart Marketing</h6>
                                                </div>
                                        </li>

                                        <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title">
                                                        <i data-feather="globe"></i>
                                                        <span class="lan-611">Industry Media</span></a>
                                                <ul class="sidebar-submenu">
                                                        <!-- <li><a href="{{ route('posts.create') }}">Create Post</a></li> -->
                                                        <li><a href="{{ route('post.viewBlogPages') }}">Post View</a></li>
                                                        <!-- <li><a href="{{ route('post.viewMyPostPages') }}">My Post</a></li> -->
                                                        <!-- <li><a href="{{ route('post.viewMyPromotedPostPages') }}">Promoted Post</a></li> -->
                                                        <li><a href="{{ route('posts.index') }}">Posts List</a></li>
                                                </ul>
                                        </li>
                                        <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                                                        class="sidebar-link sidebar-title link-nav" href="{{ route('home.showAdshop') }}">
                                                        <i data-feather="airplay"></i>
                                                        <span>Ad Shop</span></a></li>

                                        <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                                                        class="sidebar-link sidebar-title link-nav" href="{{ route('home.showMailer') }}">
                                                        <i data-feather="mail"></i>
                                                        <span>Mailer</span></a></li>



                                        <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                                                        class="sidebar-link sidebar-title link-nav" href="{{ route('profile.getReferPage') }}">
                                                        <i data-feather="users"></i>
                                                        <span>Referals</span></a></li>



                                        <li class="sidebar-main-title">
                                                <div>
                                                        <h6 class="">Subcontractor Portal</h6>
                                                </div>
                                        </li>

                                        <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                                                        class="sidebar-link sidebar-title link-nav" href="{{ route('home.showMySupplier') }}">
                                                        <i data-feather="user-plus"></i>
                                                        <span>My Customers</span></a></li>

                                        <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                                                        class="sidebar-link sidebar-title link-nav" href="{{ route('home.showMyCustomer') }}">
                                                        <i data-feather="user-check"></i>
                                                        <span>My Suppliers</span></a></li>


                                        <li class="sidebar-main-title">
                                                <div>
                                                        <h6 class="">Crowd Funding</h6>
                                                </div>
                                        </li>
                                        <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                                                        class="sidebar-link sidebar-title link-nav" href="{{ route('home.showProjects') }}">
                                                        <i data-feather="dollar-sign"></i>
                                                        <span>Projects</span></a></li>


                                        <li class="sidebar-main-title">
                                                <div>
                                                        <h6 class="">Settings</h6>
                                                </div>
                                        </li>

                                        <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                                                        class="sidebar-link sidebar-title link-nav" href="{{ route('profile.showMyAccountPage') }}">
                                                        <i data-feather="user"></i>
                                                        <span>Account Setting</span></a></li>

                                        <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title">
                                                        <i data-feather="settings"></i>
                                                        <span class="lan-611">Profile Settings</span></a>
                                                <ul class="sidebar-submenu">
                                                        <li><a href="{{ route('profile.basicDetails') }}">Profile Setup</a></li>
                                                        <li><a href="{{ route('sliders.index') }}">Sliders</a></li>
                                                        <li><a href="{{ route('companyUsers.index') }}">Team Members</a></li>
                                                        <li><a href="{{ route('companyMachines.index') }}">Capacity List</a></li>
                                                        <li><a href="{{ route('dataForPremiumProfile') }}" target="_blank">Preview Premium Profile</a></li>

                                                </ul>
                                        </li>












                                        <li class="sidebar-list d-none"><i class="fa-solid fa-thumbtack"></i><a
                                                        class="sidebar-link sidebar-title link-nav" href="{{ route('home.showComingSoon') }}">
                                                        <i data-feather="users"></i>
                                                        <span>coming soon</span></a></li>











                                        <li class="sidebar-list  d-none"><i class="fa-solid fa-thumbtack d-none"></i><a class="sidebar-link sidebar-title">
                                                        <i data-feather="check-square"></i>
                                                        <span class="lan-611">Jobs - My Supplier</span></a>
                                                <ul class="sidebar-submenu">
                                                        <li><a href="{{ route('jobs.create') }}">Create Job</a></li>
                                                        <li><a href="{{ route('jobs.showMyWorkshopPage') }}">My Workshop</a></li>
                                                        <li><a href="{{ route('jobs.showMyProgressJobPage') }}">My job In Progress</a></li>
                                                        <li><a href="{{ route('jobs.showMyCompletedJobPage') }}">Completed Jobs</a></li>
                                                        <li><a href="{{ route('jobs.viewAllRfqs') }}">Job Reports</a></li>
                                                        <li><a href="{{ route('jobs.getBookmarkedSupplier') }}">Bookmarked Supplier</a></li>
                                                        <li><a href="{{ route('jobs.index') }}">Jobs List</a></li>




                                                </ul>
                                        </li>

                                        <li class="sidebar-list  d-none"><i class="fa-solid fa-thumbtack d-none"></i><a class="sidebar-link sidebar-title">
                                                        <i data-feather="check-square"></i>
                                                        <span class="lan-611">Jobs - My Customer</span></a>
                                                <ul class="sidebar-submenu">

                                                        <li><a href="{{ route('jobs.viewAllRfqs') }}">View All RFQS</a></li>
                                                        <li><a href="{{ route('jobs.viewMyRfqs') }}">View My RFQS</a></li>
                                                        <li><a href="{{ route('jobs.viewAllRfqs') }}">Quote Sent</a></li>
                                                        <li><a href="{{ route('jobs.viewAllRfqs') }}">Quote Approved</a></li>
                                                        <li><a href="{{ route('jobs.viewAllRfqs') }}">Work In Progress</a></li>
                                                        <li><a href="{{ route('jobs.viewAllRfqs') }}">Job Delivery</a></li>
                                                        <li><a href="{{ route('jobs.viewAllRfqs') }}">Job Reports</a></li>


                                                </ul>
                                        </li>


                                        <li class="sidebar-list d-none "><i class="fa-solid fa-thumbtack d-none"></i><a
                                                        class="sidebar-link sidebar-title link-nav" href="{{ route('profile.getChatsPage') }}">
                                                        <i data-feather="message-circle"></i>
                                                        <span>Chat with companies</span></a></li>

                                        <li class="sidebar-list  d-none"><i class="fa-solid fa-thumbtack"></i><a
                                                        class="sidebar-link sidebar-title link-nav" href="{{ route('profile.getAdminChatsPage') }}">
                                                        <i data-feather="message-square"></i>
                                                        <span>Chat with admin</span></a></li>















                                </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                </nav>
        </div>
</div>
<!-- Page Sidebar Ends-->