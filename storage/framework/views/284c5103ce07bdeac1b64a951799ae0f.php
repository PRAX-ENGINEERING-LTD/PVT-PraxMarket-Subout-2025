<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAX Market</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }



        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 40px;
            background-color: #ffffff;
            border-bottom: 1px solid #e0e0e0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            position: relative;
            z-index: 100;
        }

        .logo {
            display: flex;
            align-items: center;
            width: 165px;
        }

        .logo img {
            width: 186px;
            margin-right: 12px;
            height: 58px;

        }

        /* Normal desktop navigation */
        .nav-links {
            display: flex;
            gap: 5px;
        }

        .nav-links a {
    text-decoration: none;
    color: #000000;
    font-size: 16px;
    font-weight: 500;
    font-family: "Manrope-Semi", Arial, sans-serif;
    position: relative;
    display: inline-block;
    padding: 10px 15px;
    border-radius: 5px;
    transition: color 0.3s ease-in-out;
    z-index: 1;
}

.nav-links a::before {
    content: '';
    position: absolute;
    top: 0;
    left: 50%;
    width: 0;
    height: 100%;
    background-color: #DDD6FE;
    border-radius: 8px;
    transition: all 0.3s ease-in-out;
    transform: translateX(-50%) scale(0); /* Start scaled down to 0 */
    transform-origin: center; /* Scale from the center */
    z-index: -1;
}

.nav-links a:hover {
    color: #000000;
}

.nav-links a:hover::before {
    width: 100%;
    transform: translateX(-50%) scale(1); /* Zoom to full size */
}

        .auth-buttons {
            display: flex;
            gap: 8px;
        }

        .header-btn {
            padding: 9px 15px !important;
            border-radius: 5px !important;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
        }
        .btn-login {
    border: 1px solid #7366ff !important;
    border-radius: 8px !important;
    color: #7366ff;
    background: transparent;
    font-family: "Manrope-Medium", Arial, sans-serif;
    position: relative;
    overflow: hidden;
    cursor: pointer;
    padding: 10px 20px;
    font-size: 16px;
    transition: color 0.4s ease-in-out, border-color 0.4s ease-in-out, background-color 0.4s ease-in-out;
}

        .btn-signup {
            position: relative;
            border-radius: 8px !important;
            overflow: hidden;
            background-color: #7366ff !important;
            color: white;
            border: 1px solid #7366ff !important;
            font-family: "Manrope-Medium", Arial, sans-serif;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: color 0.4s ease-in-out, border-color 0.4s ease-in-out, background-color 0.4s ease-in-out;
        }

        .btn-signup:hover {
           color:white !important;
        }
        .btn-login:hover {
    background-color: #7366ff !important;
    color: #fff;
}

        /* Route Active */
        .nav-links a.active,
        .mobile-nav-links a.active {
            background-color: #ddd6fe !important;
            color: black !important;
        }

        /* Mobile menu styles */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: #6b46c1;
            z-index: 102;
        }

        /* Mobile menu container - fixed positioning approach */
        .mobile-menu {
            position: fixed;
            top: 0;
            right: -100%;
            width: 80%;
            height: 100%;
            background-color: #ffffff;
            padding: 80px 20px 20px;
            box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
            z-index: 101;
            transition: all 0.6s cubic-bezier(0.4, 0, 0.4, 1);
            transform: translateX(100%) scale(0.95);
            opacity: 0;
            overflow-y: auto;
        }

        .mobile-menu.active {
            right: 0;
            transform: translateX(0) scale(1);
            opacity: 1;
        }

        .mobile-nav-links {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .mobile-nav-links a {
            text-decoration: none;
            color: #000000;
            font-size: 18px;
            font-weight: 500;
            padding: 12px 15px;
            border-radius: 8px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            opacity: 0;
            transform: translateX(20px);
            display: block;
            margin-bottom: 8px;
        }

        .mobile-menu.active .mobile-nav-links a {
            opacity: 1;
            transform: translateX(0);
        }

        .mobile-menu.active .mobile-nav-links a:nth-child(1) { transition-delay: 0.1s; }
        .mobile-menu.active .mobile-nav-links a:nth-child(2) { transition-delay: 0.15s; }
        .mobile-menu.active .mobile-nav-links a:nth-child(3) { transition-delay: 0.2s; }
        .mobile-menu.active .mobile-nav-links a:nth-child(4) { transition-delay: 0.25s; }
        .mobile-menu.active .mobile-nav-links a:nth-child(5) { transition-delay: 0.3s; }

        .mobile-nav-links a:hover {
            background-color: #DDD6FE;
            transform: translateX(5px) scale(1.02);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .mobile-auth-buttons {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 30px;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            transition-delay: 0.3s;
        }

        .mobile-menu.active .mobile-auth-buttons {
            opacity: 1;
            transform: translateY(0);
        }

        .close-menu-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: #6b46c1;
            z-index: 103;
            display: block;
            transition: all 0.3s ease;
            opacity: 0;
            transform: rotate(-90deg);
        }

        .mobile-menu.active .close-menu-btn {
            opacity: 1;
            transform: rotate(0deg);
        }

        .close-menu-btn:hover {
            transform: rotate(90deg);
            color: #4c1d95;
        }

        /* Overlay background */
        .menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 100;
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            backdrop-filter: blur(0px);
        }

        .menu-overlay.active {
            opacity: 1;
            visibility: visible;
            backdrop-filter: blur(4px);
        }

        /* Media query for mobile */
        @media (max-width: 768px) {
            .header {
                padding: 10px 20px;
            }

            .logo img {
                width: 180px;
                height: 44px;
            }

            .mobile-menu-btn {
                display: block;
            }

            .nav-links,
            .auth-buttons {
                display: none;
            }
            .mobile-menu{
                width: 60%;
            }
            .btn-login{
                max-width: 300px;
                text-align: center;
            }
            .btn-signup{
                max-width: 300px;
                text-align: center;
            }
        }
        @media (max-width: 425px) {
            .mobile-menu{
                width: 80%;
            }
            .btn-login{
                max-width: 200px;
                text-align: center;
            }
            .btn-signup{
                max-width: 200px;
                text-align: center;
            }
        }
        #desktopDashBtn,
        #desktopLoginBtn,
        #desktopSignupBtn,
        #mobileDashBtn,
        #mobileLoginBtn,
        #mobileSignupBtn {
            text-decoration: none;
        }

        #desktopDashBtn:hover,
        #desktopLoginBtn:hover,
        #desktopSignupBtn:hover,
        #mobileDashBtn:hover,
        #mobileLoginBtn:hover,
        #mobileSignupBtn:hover,
        #desktopDashBtn:focus,
        #desktopLoginBtn:focus,
        #desktopSignupBtn:focus,
        #mobileDashBtn:focus,
        #mobileLoginBtn:focus,
        #mobileSignupBtn:focus {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="logo">
            <a href="<?php echo e(route('home.showHomePage')); ?>"> <img src="<?php echo e(asset('newAssets/img/header/prax_logo1.png')); ?>" alt="Prax Market Logo"></a>

        </div>

        <!-- Desktop Navigation -->
        <!-- Desktop Navigation -->
        <nav class="nav-links">
            <?php if(!request()->routeIs('home.showHomePage')): ?>
            <a href="<?php echo e(route('home.showHomePage')); ?>">Home</a>
            <?php endif; ?>

            <?php if(!request()->routeIs('home.showAboutUsPage')): ?>
            <a href="<?php echo e(route('home.showAboutUsPage')); ?>">About us</a>
            <?php endif; ?>

            <?php if(!request()->routeIs('home.showHowItWorksPage')): ?>
            <a href="<?php echo e(route('home.showHowItWorksPage')); ?>">How it works</a>
            <?php endif; ?>

            <?php if(!request()->routeIs('home.showPricingPage')): ?>
            <a href="<?php echo e(route('home.showPricingPage')); ?>">Pricing</a>
            <?php endif; ?>

            <?php if(!request()->routeIs('home.showContactUsPage')): ?>
            <a href="<?php echo e(route('home.showContactUsPage')); ?>">Contact us</a>
            <?php endif; ?>
        </nav>

        <!-- Desktop Auth Buttons -->
        <div class="auth-buttons">



            <?php if(Auth::check()): ?>
            <a href="<?php echo e(route('network.index')); ?>" class="header-btn btn-signup" id="desktopDashBtn">Go To Console</a>
            <?php else: ?>
            <?php if(!request()->routeIs('login')): ?>
            <a href="<?php echo e(route('login')); ?>" class="header-btn btn-login" id="desktopLoginBtn">SIGN IN</a>
            <?php endif; ?>
            <?php if(!request()->routeIs('signup')): ?>

            <a href="<?php echo e(route('signup')); ?>" class="header-btn btn-signup" id="desktopSignupBtn">SIGN UP</a>
            <?php endif; ?>
            <?php endif; ?>

        </div>

        <!-- Mobile Menu Button -->
        <button class="mobile-menu-btn" id="mobileMenuBtn">☰</button>
    </header>

    <!-- Mobile Menu - Separate from header -->
    <div class="mobile-menu" id="mobileMenu">
        <button class="close-menu-btn" id="closeMenuBtn">✕</button>

        <nav class="mobile-nav-links">

            <?php if(!request()->routeIs('home.showHomePage')): ?>
            <a href="<?php echo e(route('home.showHomePage')); ?>">Home</a>
            <?php endif; ?>

            <?php if(!request()->routeIs('home.showAboutUsPage')): ?>
            <a href="<?php echo e(route('home.showAboutUsPage')); ?>">About us</a>
            <?php endif; ?>

            <?php if(!request()->routeIs('home.showHowItWorksPage')): ?>
            <a href="<?php echo e(route('home.showHowItWorksPage')); ?>">How it works</a>
            <?php endif; ?>

            <?php if(!request()->routeIs('home.showPricingPage')): ?>
            <a href="<?php echo e(route('home.showPricingPage')); ?>">Pricing</a>
            <?php endif; ?>

            <?php if(!request()->routeIs('home.showContactUsPage')): ?>
            <a href="<?php echo e(route('home.showContactUsPage')); ?>">Contact us</a>
            <?php endif; ?>

        </nav>

        <div class="mobile-auth-buttons">

            <?php if(Auth::check()): ?>
            <a href="<?php echo e(route('network.index')); ?>" class="header-btn btn-signup" id="mobileDashBtn">Go To Console</a>
            <?php else: ?>
            <?php if(!request()->routeIs('login')): ?>

            <a href="<?php echo e(route('login')); ?>" class="header-btn btn-login" id="mobileLoginBtn">SIGN IN</a>

            <?php endif; ?>
            <?php if(!request()->routeIs('signup')): ?>

            <a href="<?php echo e(route('signup')); ?>" class="header-btn btn-signup" id="mobileSignupBtn">SIGN UP</a>
            <?php endif; ?>
            <?php endif; ?>


        </div>
    </div>

    <!-- Overlay for mobile menu -->
    <div class="menu-overlay" id="menuOverlay"></div>

    <script>
        // Get all necessary elements
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const closeMenuBtn = document.getElementById('closeMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const menuOverlay = document.getElementById('menuOverlay');

        // Open mobile menu with smooth animation
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.add('active');
            menuOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        });

        // Close mobile menu function with smooth animation
        function closeMenu() {
            mobileMenu.classList.remove('active');
            menuOverlay.classList.remove('active');
            document.body.style.overflow = '';
        }

        // Close menu when clicking the close button
        closeMenuBtn.addEventListener('click', closeMenu);

        // Close menu when clicking the overlay
        menuOverlay.addEventListener('click', closeMenu);

        // Close menu when pressing Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
                closeMenu();
            }
        });

        // Add touch swipe support for closing menu
        let touchStartX = 0;
        let touchEndX = 0;

        mobileMenu.addEventListener('touchstart', e => {
            touchStartX = e.changedTouches[0].screenX;
        });

        mobileMenu.addEventListener('touchend', e => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        });

        function handleSwipe() {
            const swipeThreshold = 100;
            if (touchEndX - touchStartX > swipeThreshold) {
                closeMenu();
            }
        }
    </script>
</body>

</html><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/staticPages/layouts/header.blade.php ENDPATH**/ ?>