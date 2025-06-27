<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Precision Engineering Marketplace</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery -->
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .hero-marquee {
      position: relative;
      width: 100%;
      height: auto;
      overflow: hidden;
    }

    #particles-hero {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      z-index: 0;
      pointer-events: none;
    }

    .background-video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
    }

    .hero-section {
      position: relative;
      text-align: center;
      z-index: 2;
    }

    .hero-title {
      font-size: 56px;
      font-weight: 700;
      max-width: 1000px;
      margin: 0 auto 1rem;
      line-height: 1.2;
      background: linear-gradient(290deg, rgb(245, 243, 255) 0%, rgb(196, 181, 253) 100%);
      background-clip: text;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-family: "Manrope-Semi" !important;
      padding-top: 27px;
    }

    .hero-subtitle {
      max-width: 677px;
      font-size: 16px;
      margin: 0 auto;
      line-height: 1.6;
      color: #fff;
      opacity: 0.9;
      font-family: "Manrope-Medium" !important;
    }

    /* Marquee Carousel */
    .marquee-container-home {
      position: relative;
      width: 100%;
      height: 300px; /* Increased to 300px to match the image */
      overflow: hidden;
      margin-bottom: 108px;
    }

    .center-item-container {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      z-index: 100;
      width: 219px;
      height: 240px;
    }

    .center-item {
      width: 100%;
      height: 100%;
      border-radius: 16px;
      background: linear-gradient(340deg, #ddd6fe 0%, rgb(237, 233, 254) 100%);
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .center-item img {
      width: 80%;
      height: 80%;
      /* object-fit: contain; */
    }

    .marquee-track {
      position: absolute;
      display: flex;
      top: 50%;
      transform: translateY(-50%);
      height: 200px; /* Increased to match larger marquee items */
    }

    .marquee-item-home {
      flex: 0 0 auto;
      width: 200px; /* Increased to 200px to match the image */
      height: 200px; /* Increased to 200px to match the image */
      margin: 0 10px;
      border-radius: 5px;
      overflow: hidden;
      position: relative;
      background-color: #f2f2f2;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    .marquee-item-home img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .marquee-item-label {
      position: absolute;
      bottom: 0;
      top: 0;
      left: 0;
      right: 0;
     background:rgb(94 94 94 / 11%);
      color: black;
      padding: 8px;
      font-size: 14px; /* Increased to 16px to match the image */
      text-align: center;
      font-family: "Manrope-Bold" !important;
    }

    .marquee-left-container {
      position: absolute;
      width: 50%;
      height: 100%;
      left: 0;
      overflow: hidden;
    }

    .marquee-left-container::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 50%;
      /* background: linear-gradient(to right, #2e1065 60%, rgba(46, 16, 101, 0)); */
      z-index: 2;
    }

    .marquee-right-container {
      position: absolute;
      width: 50%;
      height: 100%;
      right: 0;
      overflow: hidden;
    }

    .marquee-right-container::after {
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      height: 100%;
      width: 50%;
      /* background: linear-gradient(to left, #2e1065 60%, rgba(46, 16, 101, 0)); */
      z-index: 2;
    }

    /* Trusted Section */
    .trusted-section {
      text-align: center;
      /* padding: 4rem 1rem; */
    }

    .trusted-title {
      font-size: 20px;
      /* margin-bottom: 2rem; */
      background: linear-gradient(290deg, rgb(245, 243, 255) 0%, rgb(196, 181, 253) 100%) !important;
      background-clip: text !important;
      -webkit-background-clip: text !important;
      -webkit-text-fill-color: transparent !important;
      margin-bottom: 0px;
      font-family: "Manrope-Bold" !important;
    }

    .logo-container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: nowrap; /* Changed to nowrap for marquee effect */
      gap: 40px;
    }

    .logo-item {
      height: 40px;
      opacity: 0.8;
      /* min-width: 100px; */
    }

    .trusted-section {
      overflow: hidden;
      width: 100%;
      /* padding: 40px 0; */
    }

    .logo-group {
      width: 100%; /* Adjusted to full width for better marquee effect */
      max-width: 1200px !important; /* Increased for wider display */
      margin: 0 auto;
    }


    .marquee-wrapper {
      position: relative;
      overflow: hidden;
      width: 100%;
      padding: 20px 0px 80px 0px;
    }

    .marquee-wrapper::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 50px;
      background: linear-gradient(to right, #2e1065 10%, rgba(46, 16, 101, 0));
      z-index: 2;
    }

    .marquee-wrapper::after {
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      height: 100%;
      width: 50px;
      background: linear-gradient(to left, #2e1065 10%, rgba(46, 16, 101, 0));
      z-index: 2;
    }

    .logo-container {
      display: flex;
      animation: marquee 10s linear infinite;
    }

    @keyframes marquee {
      0% {
        transform: translateX(0);
      }
      100% {
        transform: translateX(-50%);
      }
    }

    @media (max-width: 768px) {
      .hero-title {
        font-size: 24px;
      }
      .hero-subtitle{
        font-size: 16px;
      }
      .trusted-title {
        font-size: 16px;
      }
    }
  </style>
</head>

<body>
  <div class="container-fluid p-0 hero-marquee">
    <div id="particles-hero"></div>
    <video class="background-video" autoplay loop muted>
      <source src="<?php echo e(asset('newAssets/img/homecomponents/heromarquee/lightrays1.mp4')); ?>" type="video/mp4" preload="none" loading="lazy">
      Your browser does not support the video tag.
    </video>
    <!-- Hero Section -->
    <div class="hero-section">
      <div class="container">
        <h1 class="hero-title">The Definitive Marketplace for the Precision Engineering Industry.</h1>
        <p class="hero-subtitle">PRAX Market is where manufacturers, customers, and suppliers come together to transform the industry. We make it easier, faster, and more efficient to find the right partners, get the job done, and grow your business.</p>
      </div>
    </div>

    <!-- Marquee Carousel -->
    <div class="marquee-container-home">
      <!-- Center Fixed Item -->
      <div class="center-item-container">
        <div class="center-item">
          <img src="<?php echo e(asset('newAssets/img/homecomponents/heromarquee/prax_logo2.png')); ?>" alt="Center Item">
        </div>
      </div>

      <!-- Left Marquee Container -->
      <div class="marquee-left-container">
        <div class="marquee-track marquee-left">
          <div class="marquee-item-home">
            <img src="<?php echo e(asset('newAssets/img/homecomponents/heromarquee/hero/1.png')); ?>" alt="CNC Machining" loading="lazy" />
            <div class="marquee-item-label">CNC Machining Services</div>
          </div>
          <div class="marquee-item-home">
            <img src="<?php echo e(asset('newAssets/img/homecomponents/heromarquee/hero/2.png')); ?>" alt="3D Printing" loading="lazy">
            <div class="marquee-item-label">Sheet Metal Fabrication</div>
          </div>
          <div class="marquee-item-home">
            <img src="<?php echo e(asset('newAssets/img/homecomponents/heromarquee/hero/3.png')); ?>" alt="Surface Treatment" loading="lazy">
            <div class="marquee-item-label">Surface Treatment & Finishing</div>
          </div>
          <div class="marquee-item-home">
            <img src="<?php echo e(asset('newAssets/img/homecomponents/heromarquee/hero/4.png')); ?>" alt="Engineering SME" loading="lazy">
            <div class="marquee-item-label">Metrology & Inspection Services</div>
          </div>
          
          <div class="marquee-item-home">
            <img src="<?php echo e(asset('newAssets/img/homecomponents/heromarquee/hero/5.png')); ?>" alt="3D Printing" loading="lazy">
            <div class="marquee-item-label">Material Suppliers</div>
          </div>

          <div class="marquee-item-home">
            <img src="<?php echo e(asset('newAssets/img/homecomponents/heromarquee/hero/6.png')); ?>" alt="Surface Treatment" loading="lazy">
            <div class="marquee-item-label">CNC Cutting Tool Supliers</div>
          </div>
        
          <!-- Duplicate items for continuous loop -->
          <div class="marquee-item-home">
            <img src="<?php echo e(asset('newAssets/img/homecomponents/heromarquee/hero/1.png')); ?>" alt="CNC Machining" loading="lazy" />
            <div class="marquee-item-label">CNC Machining Services</div>
          </div>
          <div class="marquee-item-home">
            <img src="<?php echo e(asset('newAssets/img/homecomponents/heromarquee/hero/2.png')); ?>" alt="3D Printing" loading="lazy">
            <div class="marquee-item-label">Sheet Metal Fabrication</div>
          </div>
          <div class="marquee-item-home">
            <img src="<?php echo e(asset('newAssets/img/homecomponents/heromarquee/hero/3.png')); ?>" alt="Surface Treatment" loading="lazy">
            <div class="marquee-item-label">Surface Treatment & Finishing</div>
          </div>
          <div class="marquee-item-home">
            <img src="<?php echo e(asset('newAssets/img/homecomponents/heromarquee/hero/4.png')); ?>" alt="Engineering SME" loading="lazy">
            <div class="marquee-item-label">Metrology & Inspection Services</div>
          </div>
        </div>
      </div>

      <!-- Right Marquee Container -->
      <div class="marquee-right-container">
        <div class="marquee-track marquee-right">
        <div class="marquee-item-home">
            <img src="<?php echo e(asset('newAssets/img/homecomponents/heromarquee/hero/7.png')); ?>" alt="CNC Machining" loading="lazy">
            <div class="marquee-item-label">Pricision Grinding Services</div>
          </div>
          <div class="marquee-item-home">
            <img src="<?php echo e(asset('newAssets/img/homecomponents/heromarquee/hero/8.png')); ?>" alt="3D Printing" loading="lazy">
            <div class="marquee-item-label">Logistics & Supply Chain Support    
            </div>
          </div>
          <div class="marquee-item-home">
            <img src="<?php echo e(asset('newAssets/img/homecomponents/heromarquee/hero/9.png')); ?>" alt="Surface Treatment" loading="lazy">
            <div class="marquee-item-label">3D Printing Services</div>
          </div>
          <div class="marquee-item-home">
            <img src="<?php echo e(asset('newAssets/img/homecomponents/heromarquee/hero/10.png')); ?>" alt="Engineering SME" loading="lazy">
            <div class="marquee-item-label">Technology & R&D</div>
          </div>
         
          <div class="marquee-item-home">
            <img src="<?php echo e(asset('newAssets/img/homecomponents/heromarquee/hero/11.png')); ?>" alt="CNC Machining" loading="lazy">
            <div class="marquee-item-label">Machine & Equipment Supliers</div>
          </div>
          <div class="marquee-item-home">
            <img src="<?php echo e(asset('newAssets/img/homecomponents/heromarquee/hero/12.png')); ?>" alt="Surface Treatment" loading="lazy">
            <div class="marquee-item-label">Finance & Business Services</div>
          </div>

         
          <!-- Duplicate items for continuous loop -->
          <div class="marquee-item-home">
            <img src="<?php echo e(asset('newAssets/img/homecomponents/heromarquee/hero/7.png')); ?>" alt="CNC Machining" loading="lazy">
            <div class="marquee-item-label">Pricision Grinding Services</div>
          </div>
          <div class="marquee-item-home">
            <img src="<?php echo e(asset('newAssets/img/homecomponents/heromarquee/hero/8.png')); ?>" alt="3D Printing" loading="lazy">
            <div class="marquee-item-label">Logistics & Supply Chain Support    
            </div>
          </div>
          <div class="marquee-item-home">
            <img src="<?php echo e(asset('newAssets/img/homecomponents/heromarquee/hero/9.png')); ?>" alt="Surface Treatment" loading="lazy">
            <div class="marquee-item-label">3D Printing Services</div>
          </div>
          <div class="marquee-item-home">
            <img src="<?php echo e(asset('newAssets/img/homecomponents/heromarquee/hero/10.png')); ?>" alt="Engineering SME" loading="lazy">
            <div class="marquee-item-label">Technology & R&D</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Trusted Section -->
    <!-- <div class="trusted-section">
      <div class="container logo-group">
        <h2 class="trusted-title">Trusted by 1000+ Suppliers and Customers.</h2>
        <div class="marquee-wrapper">
          <div class="logo-container" id="logoContainer">
             Original logos -->
            <!-- <img class="logo-item" src="<?php echo e(asset('newAssets/img/homecomponents/heromarquee/logo-group1.png')); ?>" alt="Partner Logo">
          </div>
        </div>
      </div>
    </div>  -->
  </div>

  <script>
    $(document).ready(function() {
      // Get the width of a single item plus its margin
      const itemWidth = $('.marquee-item-home').outerWidth(true);

      setupInfiniteMarquee('.marquee-left', 0.5); // Left side moves right
      setupInfiniteMarquee('.marquee-right', -0.5); // Right side moves left

      function setupInfiniteMarquee(selector, speed) {
        const $track = $(selector);
        const $container = $track.parent();
        const containerWidth = $container.width();

        // Get all original items and their total width
        const $items = $track.find('.marquee-item-home');
        let totalWidth = $items.length * itemWidth;

        // Double the items to ensure we have enough for a continuous loop
        const $clonedItems = $items.clone();
        $track.append($clonedItems);

        // Add more clones if needed to fill the container
        while (totalWidth < containerWidth * 3) {
          $track.append($items.clone());
          totalWidth += $items.length * itemWidth;
        }

        // Set the initial position based on direction
        let position = (speed < 0) ? 0 : containerWidth - totalWidth / 2;
        $track.css({
          'left': position + 'px',
          'width': totalWidth + 'px'
        });

        // Animation function using requestAnimationFrame for smooth motion
        function animate() {
          position += speed;

          // Create seamless loop
          if (speed < 0) { // Moving left
            if (position < -itemWidth * $items.length) {
              position += itemWidth * $items.length;
            }
          } else { // Moving right
            if (position > 0) {
              position -= itemWidth * $items.length;
            }
          }

          $track.css('left', position + 'px');
          requestAnimationFrame(animate);
        }

        // Start animation
        animate();
      }
    });

    document.addEventListener('DOMContentLoaded', function() {
      const logoContainer = document.getElementById('logoContainer');
      const originalLogos = logoContainer.querySelectorAll('.logo-item');
      
      // Clone logos for seamless looping
      originalLogos.forEach(logo => {
        const clone = logo.cloneNode(true);
        logoContainer.appendChild(clone);
      });

      // Calculate total width of all logos
      const totalWidth = Array.from(logoContainer.children).reduce((width, logo) => {
        return width + logo.offsetWidth + 40; // 40px for gap
      }, 0);

      // Set container width to total width
      logoContainer.style.width = `${totalWidth}px`;

      // Create animation
      const animationDuration = 20; // seconds
      logoContainer.style.animation = `marquee ${animationDuration}s linear infinite`;

      // Add animation reset when it completes
      logoContainer.addEventListener('animationend', () => {
        logoContainer.style.animation = 'none';
        logoContainer.offsetHeight; // Trigger reflow
        logoContainer.style.animation = `marquee ${animationDuration}s linear infinite`;
      });
    });

    $(document).ready(function() {
      if (document.getElementById('particles-hero')) {
        particlesJS('particles-hero', {
          "particles": {
            "number": {
              "value": 100,
              "density": {
                "enable": true,
                "value_area": 800
              }
            },
            "color": {
              "value": "#8B5CF6"
            },
            "shape": {
              "type": "circle"
            },
            "opacity": {
              "value": 1,
            },
            "size": {
              "value": 1,
            },
            "move": {
              "enable": true,
              "speed": 1,
              "direction": "none",
              "random": false,
              "out_mode": "out"
            },
            "line_linked": {
              "enable": false,
            },
          }
        });
      }
    });
  </script>
</body>

</html><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/staticPages/home/homeComponents/heromarquee.blade.php ENDPATH**/ ?>