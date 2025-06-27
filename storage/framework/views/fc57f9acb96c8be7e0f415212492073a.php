<?php $__env->startSection('content'); ?>

<?php $__env->startSection('main_content'); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Referral Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">


    <!-- Bootstrap CSS -->

    <style>
        .dt-search {
            padding-right: 25px !important;
        }


        .heading {
            font-size: 56px;
            font-weight: 700;
            font-family: 'Manrope', sans-serif;
            margin-bottom: 10px;
            color: black;
        }

        .subheading {
            font-size: 20px;
            font-weight: 500;
            font-family: 'Manrope', sans-serif;
            /* margin-bottom: 30px; */
            color: black;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            max-height: 415px;
            background-color: #fff;
            border: 1px solid rgb(213, 213, 213);
        }

        .card img {
            width: 240px;
            height: 240px;
            margin-bottom: 20px;
            margin: 0 auto;
        }

        .card h3 {
            font-weight: 800;
            font-family: 'Manrope', sans-serif;
            margin-bottom: 10px;
            font-size: 28px;
        }

        .card p {
            font-weight: 500;
            font-family: 'Manrope', sans-serif;
            line-height: 1.5;
            color: black;
            font-size: 16px;
        }



        .referal-section {
            /* padding: 20px !important; */
            position: relative;
            background-image: url("<?php echo e(asset('newAssets/img/referal/bg.png')); ?>");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 90vh;
        }

        .icon-resize a svg {
            width: 20px !important;
            height: 20px !important;

        }

        .networkLi {
            margin-left: 10px !important;
        }

        @media (max-width: 768px) {
            .referal-section{
                height:unset;
            }
        }
    </style>
</head>
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Referal</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item icon-resize">
                        <a class="networkLi bs-tooltip <?php echo e(request()->is('*/dashboard*') ? 'active' : ''); ?>" data-bs-toggle="tooltip" title="Dashboard" data-tooltip="Dashboard View" href="<?php echo e(route('dashboard.index')); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" fill="none">
                                <path d="M2.25 7.55L9 2.3L15.75 7.55V15.8C15.75 16.198 15.592 16.579 15.311 16.861C15.029 17.142 14.648 17.3 14.25 17.3H3.75C3.352 17.3 2.971 17.142 2.689 16.861C2.408 16.579 2.25 16.198 2.25 15.8V7.55Z" fill="transparent" stroke-width="1.5" stroke="rgb(23,23,23)" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M6.75 17.3V9.8H11.25V17.3" fill="transparent" stroke-width="1.5" stroke="rgb(23,23,23)" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <a class="networkLi bs-tooltip <?php echo e(request()->is('*/network') ? 'active' : ''); ?>" data-bs-toggle="tooltip" title="Network" data-tooltip="Map View" href="<?php echo e(route('network.index')); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-share2-icon lucide-share-2">
                                <circle cx="18" cy="5" r="3" />
                                <circle cx="6" cy="12" r="3" />
                                <circle cx="18" cy="19" r="3" />
                                <line x1="8.59" x2="15.42" y1="13.51" y2="17.49" />
                                <line x1="15.41" x2="8.59" y1="6.51" y2="10.49" />
                            </svg>
                        </a>
                        <a class="networkLi bs-tooltip <?php echo e(request()->is('*/bookmark*') ? 'active' : ''); ?>" data-bs-toggle="tooltip" title="Bookmark" data-tooltip="Bookmark View" href="<?php echo e(route('bookmark.index')); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" fill="none">
                                <path d="M4.5 2.65V16.15L9 13.15L13.5 16.15V2.65H4.5Z" fill="transparent" stroke-width="1.5" stroke="rgb(34,34,34)" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>


                        <a class="networkLi bs-tooltip <?php echo e(request()->is('*/post*') ? 'active' : ''); ?>" data-bs-toggle="tooltip" title="Post View" data-tooltip="Map View" href="<?php echo e(route('post.viewBlogPages')); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe-icon lucide-globe">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20" />
                                <path d="M2 12h20" />
                            </svg>
                        </a>
                        <a class="networkLi bs-tooltip <?php echo e(request()->is('*/premium-profile') ? 'active' : ''); ?>" data-bs-toggle="tooltip" title="Premium Profile" data-tooltip="Map View" href="<?php echo e(route('dataForPremiumProfile')); ?>" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                                <path d="M200-160v-80h560v80H200Zm0-140-51-321q-2 0-4.5.5t-4.5.5q-25 0-42.5-17.5T80-680q0-25 17.5-42.5T140-740q25 0 42.5 17.5T200-680q0 7-1.5 13t-3.5 11l125 56 125-171q-11-8-18-21t-7-28q0-25 17.5-42.5T480-880q25 0 42.5 17.5T540-820q0 15-7 28t-18 21l125 171 125-56q-2-5-3.5-11t-1.5-13q0-25 17.5-42.5T820-740q25 0 42.5 17.5T880-680q0 25-17.5 42.5T820-620q-2 0-4.5-.5t-4.5-.5l-51 321H200Zm68-80h424l26-167-105 46-133-183-133 183-105-46 26 167Zm212 0Z" />
                            </svg>
                        </a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="referal-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex justify-content-end">
                    <a href="<?php echo e(route('profile.getReferalsPage')); ?>"> <button class="btn btn-primary f-w-500" id="referBtn">My Referals</button></a>
                </div>
            </div>



        </div>
    </div>
    <!-- Container-fluid starts-->


    <div class="container text-center">
        <h1 class="heading">Refer a Friend or Business Partner.</h1>
        <p class="subheading">Referring someone is simple! Follow these easy steps <br /> to start earning rewards:</p>
        <div class="row g-4">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card">
                    <img src="<?php echo e(asset('newAssets/img/referal/1.gif')); ?>" alt="Spread the Word Icon">
                    <h3>Spread the Word</h3>
                    <p>Share how our services can make a difference. Use your unique referral link and address to get them started.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card">
                    <img src="<?php echo e(asset('newAssets/img/referal/2.gif')); ?>" alt="Spread the Word Icon">
                    <h3>They Sign Up</span></h3>
                    <p>Once they contact us or sign up through your referral, we’ll take it from there. Make sure they mention your name or use your referral code.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card">
                    <img src="<?php echo e(asset('newAssets/img/referal/3.gif')); ?>" alt="Spread the Word Icon">
                    <h3>Get Rewarded</h3>
                    <p>After your referral signs up for an annual subscription, you’ll receive your reward. It’s that straightforward!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('appLayouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/profilePages/referal.blade.php ENDPATH**/ ?>