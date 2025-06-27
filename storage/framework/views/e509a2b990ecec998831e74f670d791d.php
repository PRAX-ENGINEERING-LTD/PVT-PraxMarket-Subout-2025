<head>
  <link rel="stylesheet" href="<?php echo e(url('css/app.css')); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="<?php echo e(asset('newAssets/img/favicon.ico')); ?>" />
  <!-- Bootstrap CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@800&display=swap" rel="stylesheet">
  <title>Premium Page</title>
  <style>
    .hero-container {
      position: relative;
      height: 400px;
      /* Kept as is for background image display */
      margin-bottom: 350px;
      /* Increased from 200px to accommodate bottom: -273px and full content height */
      /* Removed overflow: hidden to allow .company-info to extend below */
    }

    .hero-container-1 {
      position: relative;
    }

    .hero-bg {
      width: 100%;
      height: 100%;
      object-fit: cover;
      position: absolute;
      transition: opacity 1s ease-in-out;
      opacity: 0;
      border-radius: 10px;
      top: 0;
      /* Ensures images stay within the 400px height */
      left: 0;
    }

    .hero-bg.active {
      opacity: 1;
    }

    .company-info {
      position: absolute;
      bottom: -273px;
      /* Updated to your new requirement */
      left: 0;
      right: 0;
      text-align: center;
      background-color: transparent;
    }

    /* No changes to the remaining styles */
    .logo-container {
      width: 123px;
      height: 123px;
      margin: 0 auto;
      background-color: #fff;
      border-radius: 10px;
      padding: 5px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .logo-container img {
      width: 100%;
      height: 100%;
      object-fit: fill;
    }

    .logo-container-v2 {
      width: 123px;
      height: 123px;
      /* margin: 0 auto; */
      background-color: #fff;
      border-radius: 10px;
      padding: 5px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .logo-container-v2 img {
      width: 100%;
      height: 100%;
      object-fit: fill;
    }

    .company-name {
      font-size: 2.5rem;
      font-weight: 700;
      margin-top: 15px;
      color: black !important;
      font-family: 'Manrope-Bold' !important;
    }

    .company-tagline {
      font-size: 22px;
      max-width: 700px;
      margin: 10px auto;
      color: black !important;
      font-family: 'Manrope-Medium' !important;
    }

    .company-details {
      color: #888;
      font-size: 0.9rem;
      margin: 15px 0;
    }

    .company-details span {
      margin: 0 10px;
      font-size: 19px;
      font-family: "Manrope-Medium";
    }

    .action-buttons {
      margin-top: 20px;
    }

    .btn-primary {
      background-color: #7952b3;
      border-color: #7952b3;
      padding: 8px 20px;
      border-radius: 5px;
    }

    .btn-outline-primary {
      border-color: #7952b3;
      color: #7952b3;
      padding: 8px 20px;
      border-radius: 5px;
    }

    .btn-outline-primary:hover {
      background-color: #7952b3;
      color: white;
    }





    .capabilities-section {
      padding: 80px !important;
      position: relative;
      background-image: url("<?php echo e(asset('newAssets/img/premiumpage/carousel/bg3.png')); ?>");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .section-title {
      font-size: 20px;
      font-family: "Manrope-Bold" !important;
      margin-bottom: 30px;
      margin-left: 25px !important;
      color: #262626;
    }

    .carousel-container {
      position: relative;
      overflow: hidden;
      /* height: 355px; */
    }

    .capabilities-carousel {
      display: flex;
      width: 100%;
      height: 100%;
      transition: transform 0.5s ease;
    }

    .carousel-item-wrapper {
      min-width: 100%;
      padding: 0 15px;
    }

    .carousel-card {
      background-color: #fff;
      border-radius: 10px;
      overflow: hidden;
      /* box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; */
      display: flex;
      height: 100%;
      border: 1px solid #b7b5b5;
    }


    .carousel-card-award {
      border-radius: 10px;
      overflow: hidden;
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      display: flex;
      height: 100%;
      border: 1px solid #b7b5b5;
    }

    .carousel-image {
      width: 40%;
      /* background-color: #e0e0e0; */
      display: flex;

      align-items: start;
      justify-content: center;
      padding: 20px
    }

    .carousel-image img {
      width: 100%;
      border-radius: 10px;
      object-fit: contain;
    }

    .carousel-content {
      width: 60%;
      padding: 25px;
    }

    .carousel-controls {
      position: absolute;
      top: 0px;
      right: 37%;
      display: flex;
    }

    .carousel-control {
      width: 36px;
      height: 36px;
      background-color: #a3a3a3;
      border: none;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      margin-left: 5px;
      border-radius: 4px;
      color: #6c757d;
      transition: background-color 0.3s;
    }

    .carousel-control:hover {
      background-color: #dee2e6;
    }

    .industries-card {
      /* background: linear-gradient(124deg, #7c3aed 0%, rgb(91, 33, 182) 100%); */

      border-radius: 10px;
      padding: 25px;
      color: white;
      /* height: 304px; */
    }

    .industries-title {
      font-size: 20px;
      font-family: "Manrope-Bold" !important;
      margin-bottom: 20px;
    }

    .industry-item {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
    }

    .industry-icon {
      width: 40px;
      height: 40px;
      background-color: rgba(255, 255, 255, 0.2);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 15px;
      font-size: 20px;
    }

    .industry-details {
      flex: 1;
    }

    .industry-name {
      margin-bottom: 5px;
      font-family: "Manrope-Bold" !important;
      font-size: 16px;
    }

    .industry-description {
      font-family: "Manrope-Regular" !important;
      font-size: 14px;
      opacity: 0.9;
    }

    .stats-row {
      display: flex;
      align-items: center;
      margin-top: 20px;
      justify-content: space-between;
    }

    .stats-item {
      margin-right: 20px;
    }

    .stats-number {
      font-size: 14px;
      font-family: "Manrope-Regualr" !important;
    }



    .progress-circle {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: conic-gradient(#ffffff 0% 78%, rgba(255, 255, 255, 0.3) 78% 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }

    .progress-circle::before {
      content: '';
      position: absolute;
      width: 46px;
      height: 46px;
      background-color: #6f42c1;
      border-radius: 50%;
    }

    .progress-percentage {
      position: relative;
      z-index: 2;
      font-weight: 600;
    }



    .posts-container {
      padding: 80px !important;
      background-color: #f2f2f3;

    }

    .post-card {
      border-radius: 8px;
      overflow: hidden;
      background-color: white;
      box-shadow: 0 .6021873017743928px .6021873017743928px -1.25px #00000038, 0 2.288533303243457px 2.288533303243457px -2.5px #00000030, 0 10px 10px -3.75px #00000014;
      margin-bottom: 20px;
      border: 1px solid #d4d4d4 !important;
      height: 100%;
    }

    .post-card-main {
      border-radius: 8px;
      overflow: hidden;
      background-color: white;
      box-shadow: 0 .6021873017743928px .6021873017743928px -1.25px #00000038, 0 2.288533303243457px 2.288533303243457px -2.5px #00000030, 0 10px 10px -3.75px #00000014;
      margin-bottom: 20px;
      border: 1px solid #d4d4d4 !important;
      height: 97%;
    }

    .post-image {
      width: 100%;
      height: 200px;
      object-fit: cover;
      padding: 10px;
      border-radius: 15px;
    }
    .post-image-1 {
      width: 100%;
      height: 200px;
      /* object-fit: cover; */
      padding: 10px;
      border-radius: 15px;
    }

    .featured-post .post-image {
      height: 350px;
      padding: 10px;
      border-radius: 15px;
    }

    .featured-post-1 .post-image-1 {
      height: 650px;
      padding: 10px;
      border-radius: 15px;
    }


    .post-content {
      padding: 15px;
    }

    .post-date {
      font-size: 16px;
      color: #262626;
      font-family: "Manrope-Bold" !important;
      margin-bottom: 10px;
    }

    .post-title {
      font-size: 14px;
      font-family: "Manrope-Medium" !important;
      line-height: 1.4;
      color: #262626 !important;
      margin-bottom: 12px;
    }

    .featured-post .post-title {
      font-size: 16px;
      font-family: "Manrope-Medium" !important;
      color: #262626 !important;
    }

    .post-interactions {
      display: flex;
      justify-content: space-evenly;
      padding-top: 10px;
      border-top: 1px solid #eee;
    }

    .interaction {
      display: flex;
      align-items: center;
      gap: 5px;
      color: #262626;
      font-size: 16px;
      font-family: "Manrope-Medium" !important;
    }

    .comment-section {
      padding: 15px;
      border-top: 1px solid #eee;
    }

    .comment-input {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 15px;
    }

    .comment-avatar {
      width: 30px;
      height: 30px;
      border-radius: 50%;
    }

    .comment-box {
      flex-grow: 1;
      border: 1px solid #ddd;
      border-radius: 20px;
      padding: 8px 15px;
      font-size: 0.9rem;
      color: #999;
    }

    .comment-item {
      display: flex;
      gap: 10px;
      margin-bottom: 10px;
    }

    .comment-content {
      flex-grow: 1;
    }

    .commenter-name {
      font-weight: 500;
      font-size: 0.9rem;
    }

    .comment-time {
      font-size: 0.75rem;
      color: #999;
      margin-bottom: 5px;
    }

    .comment-text {
      font-size: 0.85rem;
    }

    .section-title {
      margin-bottom: 20px;
      font-weight: 600;
    }

    .carousel-head-1 {
      font-size: 16px;
      font-family: "Manrope-Bold" !important;
    }


    .industry-total {
      background-color: #fff;
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      padding: 30px;
      color: #333;
      border-radius: 14px;
    }






    .carousel-container-what {
      max-width: 300px;
      height: 350px;
      background: linear-gradient(124deg, #7c3aed 0%, rgb(91, 33, 182) 100%);
      border-radius: 20px;
      padding: 20px;
      overflow: hidden;
      position: relative;
    }

    .carousel-container-what-2 {
      /* max-width: 300px; */
      height: 100%;
      background: linear-gradient(124deg, #7c3aed 0%, rgb(91, 33, 182) 100%);
      border-radius: 20px;
      padding: 20px;
      overflow: hidden;
      position: relative;
    }

    .carousel-title-what {
      color: white;
      text-align: center;
      font-size: 18px;
      font-weight: 800;
      font-family: 'Manrope', sans-serif !important;
      margin-bottom: 20px;
    }

    .carousel-content-what {
      position: relative;
      height: 250px;
      overflow: hidden;
    }

    .carousel-track-what {
      position: absolute;
      width: 100%;
      animation: scrollUp 50s linear infinite;
    }

    .carousel-card-what {
      background-color: white;
      border-radius: 15px;
      padding: 15px;
      margin-bottom: 20px;
      display: flex;
      /* flex-direction: column; */
      align-items: center;
    }

    .card-title-what {
      font-family: "Manrope-Bold" !important;
      font-size: 18px;
      margin-bottom: 10px;
      text-align: start;
    }

    .card-icon-what {
      height: 60px;
      width: 100px;
      display: flex;
      justify-content: center;
      margin-top: 5px;
    }

    .card-icon-what img {
      height: 100%;
      width: auto;
    }

    @keyframes scrollUp {
      0% {
        transform: translateY(0);
      }

      100% {
        transform: translateY(-100%);
      }
    }

    /* For the cloned items to make the infinite loop */
    .carousel-track-what .carousel-card:nth-last-child(-n+4) {
      margin-top: 20px;
    }

    .course-card {
      padding: 26px !important;
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px !important;
      margin-top: 20px !important;
    }

    .what-we-bg {
      position: relative;
      background-image: url("<?php echo e(asset('newAssets/img/premiumpage/bg4.png')); ?>");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      padding: 80px !important;
    }




    .purple-bg {
      background: linear-gradient(124deg, rgb(103 67 239 / 60%) 0%, rgb(91 33 182) 100%);


      color: white;
      border-radius: 10px;
      padding: 20px;
      height: 100%;
    }

    .team-member {
      text-align: center;
    }

    .chart-container {
      position: relative;
      margin: auto;
      height: 125px;
      width: 200px;
    }

    .profile-pic {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      margin: 0 auto;
      display: flex;
      overflow: hidden;
      /* background-color: #e2e3e5; */
      position: relative;
    }

    .navigation-arrows {
      display: flex;
      justify-content: space-between;
      margin-top: -126px;

    }

    .arrow {
      font-size: 18px;
      color: #fff;
      /* background-color: rgba(255, 255, 255, 0.3); */
      width: 30px;
      height: 30px;
      /* border-radius: 50%; */
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      border-radius: 5px;
      background-color: #8f71f5;
      border: none !important;
    }

    .performance-card {
      background-color: white;
      border-radius: 10px;
      padding: 15px;
      margin-top: 15px;
    }

    .metric-row {
      display: flex;
      justify-content: space-between;
      margin: 8px 0;
      font-size: 14px;
      color: black;

    }

    .color-dot {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      display: inline-block;
      margin-right: 5px;
    }

    .blue-dot {
      background-color: #4285F4;
    }

    .orange-dot {
      background-color: #F4B400;
    }

    .green-dot {
      background-color: #0F9D58;
    }

    .purple-dot {
      background-color: #DB4437;
    }

    .video-container {
      width: 100%;
      max-height: 416px;
      border-radius: 10px;
      overflow: hidden;
      background-color: #f8f9fa;
    }

    .video-container img {
      width: 100%;
      max-height: 416px;
      object-fit: cover;
    }

    .carousel-team {
      top: 15px !important;
    }

    .purple-bg h4 {
      padding-bottom: 7px;
      padding-top: 20px;
      color: white;
    }

    .team-member h5,
    p {
      color: #fff !important;
    }

    .team-member h5 {
      font-size: 25px !important;
      margin-bottom: 6px;
    }

    .team-member p {
      font-size: 18px !important;
    }







    .video-container {
      width: 100%;
      height: 100%;
      border-radius: 10px;
      overflow: hidden;
      background-color: #f8f9fa;
    }

    .video-container video {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    /* Optional play button overlay */
    .video-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.2);
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
    }

    .pie-charts-bg {
      background-image: url("<?php echo e(asset('newAssets/img/premiumpage/bg5.png')); ?>");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      padding: 80px !important;
    }







    .carousel-controls-reviews {
      position: absolute;
      top: 0px;
      right: 50%;
      display: flex;
    }

    .awards-section {
      height: 522px;
    }



    .section-title {
      font-size: 23px;
      margin-bottom: 20px;
      text-align: start;
    }

    .reviews-section,
    .awards-section {
      position: relative;
      padding: 0 15px;
    }

    .carousel-controls-reviews,
    .carousel-controls-awards {
      position: absolute;
      top: 10px;
      right: 15px;
      display: flex;
      gap: 10px;
    }



    .carousel-control-review {
      background: #a3a3a3;
      border: none;
      border-radius: 4px;
      width: 29px;
      height: 29px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      cursor: pointer;
      transition: background 0.3s;
    }

    .carousel-control-review :hover {
      background: #0056b3;
    }

    .carousel-control-review i {
      font-size: 1.2rem;
    }

    .review-card {
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 15px;
      background: #fff;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .review-header {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 10px;
    }

    .review-logo {
      width: 40px;
      height: 40px;
      border-radius: 50%;
    }

    .rating {
      color: #f39c12;
      margin-top: 10px;
    }

    .carousel-card-award {
      border: 1px solid #ddd;
      border-radius: 8px;
      overflow: hidden;
      background: #fff;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      background: linear-gradient(124deg, #7c3aed 0%, rgb(91, 33, 182) 100%);

    }

    .carousel-image-award {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 350px;

    }

    .carousel-image-award img {
      width: 100%;
      height: auto;
    }

    .carousel-content-last {
      padding: 15px;
      display: flex;
      align-items: center;
    }

    .carousel-head-1 {
      font-size: 19px;
      margin-bottom: 10px;
    }

    .carousel-head-1-award {
      font-size: 19px;
      margin-bottom: 10px;
      color: #fff !important;
    }

    .carousel-content-last p {
      margin: 0;
      font-size: 13px;
      color: #fff !important;
    }

    /* Responsive Adjustments */
    @media (max-width: 992px) {

      .reviews-section,
      .awards-section {
        margin-bottom: 40px;
      }
    }

    @media (max-width: 576px) {
      .section-title {
        font-size: 1.5rem;
      }

      .carousel-control {
        width: 30px;
        height: 30px;
      }

      .carousel-control i {
        font-size: 1rem;
      }
    }

    .review-card p {
      color: black;
    }

    .carousel-container {
      position: relative;
      overflow: hidden;
      /* Add your existing styles */
    }

    /* Industry cards scroll container */
    .industries-scroll-container {
      height: 350px;
      /* Adjust this to match the height of your carousel */
      overflow: hidden;
      position: relative;
    }

    .industries-scroll-content {
      animation: scrollUp 60s linear infinite;
      position: relative;
      background: linear-gradient(124deg, #7366ff 0%, rgb(91, 33, 182) 100%);
    }

    @keyframes scrollUp {
      0% {
        transform: translateY(0);
      }

      100% {
        transform: translateY(-50%);
        /* This makes it loop halfway */
      }
    }

    /* Pause animation on hover */
    .industries-scroll-container:hover .industries-scroll-content {
      animation-play-state: paused;
    }

    /* Industry card styling */
    .industries-card {
      /* background-color: #1e293b; */
      /* Adjust to match your design */
      border-radius: 8px;
      padding: 20px;
      /* margin-bottom: 20px; */
      color: #fff;
      /* Add your existing styles */
    }

    .industries-title {
      margin-bottom: 20px;
      font-size: 1.5rem;
      /* Add your existing styles */
    }



    .industry-item {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
      /* Add your existing styles */
    }

    .industry-icon {
      font-size: 24px;
      margin-right: 15px;
      /* Add your existing styles */
    }



    .industry-name {
      font-weight: bold;
      margin-bottom: 5px;
      /* Add your existing styles */
    }



    .stats-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      /* Add your existing styles */
    }



    .stats-number {
      font-size: 1.5rem;
      font-weight: bold;
      /* Add your existing styles */
    }

    .stats-label {
      font-size: 14px;
      font-family: "Manrope-Regular" !important;
    }

    .progress-circle {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: conic-gradient(#4CAF50 78%, #2c3e50 0);
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      /* Add your existing styles */
    }

    .progress-circle::before {
      content: '';
      position: absolute;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background-color: #1e293b;
      /* Add your existing styles */
    }

    .progress-percentage {
      position: relative;
      font-size: 0.8rem;
      font-weight: bold;
      color: white;
      /* Add your existing styles */
    }

    .hero-content-bg {
      padding: 20px !important;
      background-image: url("<?php echo e(asset('newAssets/img/premiumpage/bg1.png')); ?>");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;

    }

    .v2-hero-1 {
      background-image:url("<?php echo e(asset('newAssets/img/premiumpage/premiumdefault/bgv2.png')); ?>") !important;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;

    }

    .hero-content-bg-v2 {
      padding: 20px !important;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;

    }

    .social-bg {
      padding: 20px;
      background-color: white;
      box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
      border-radius: 15px;
    }

    .social-widget {
      background-color: white;
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px !important;
    }

    .social-main-bg {
      padding: 0px 80px 0px 80px !important;
    }




    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px;
      background-color: white;
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      border-bottom: 1px solid #dadada;
    }

    .logo img {
      height: 57px;
      width: 100%;
    }

    .nav-item {
      position: relative;
    }

    .nav-link {
      display: flex;
      align-items: center;
      font-weight: 500;
      text-decoration: none;
      padding: 8px 15px;
    }

    .nav-link:hover {
      color: #0d6efd;
    }

    .user-avatar {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      background-color: #f0f0f0;
      overflow: hidden;
      margin-right: 10px;
    }

    .nav li a {
      color: #000 !important;
    }

    .user-avatar img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .dropdown-menu {
      display: none;
      position: absolute;
      right: 0;
      top: 100%;
      min-width: 280px !important;
      background-color: white !important;
      box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px !important;
      border-radius: 8px;
      margin-top: 5px;
      border: 1px solid #eee;
      z-index: 1000;
    }

    .dropdown-item-dash {
      display: block;
      padding: 10px 15px;
      color: #000 !important;
      /* Force black color */
      font-family: 'Manrope-Medium' !important;
      text-decoration: none;
    }

    .dropdown-item h1,
    .dropdown-item h2,
    .dropdown-item h3,
    .dropdown-item p,
    .dropdown-item span {
      color: #000 !important;
    }

    .dropdown-item-dash:hover {
      background-color: #6629c8 !important;
      color: #fff !important;
    }

    .nav-item:hover .dropdown-menu {
      display: block;
    }

    .chevron-icon {
      margin-left: 5px;
      transition: transform 0.3s;
    }

    .nav-item:hover .chevron-icon {
      transform: rotate(180deg);
    }

    .nav-link {
      display: flex !important;
    }

    .chevron-icon {
      margin-left: 5px;
      transition: transform 0.3s;
      fill: #000 !important;
      /* Force black color */
    }

    .ssss {
      color: #000 !important;
    }

    .overview-cont {
      display: block;
      justify-content: center;
      align-items: center;
    }

    .overview-main {
      display: flex;
      align-items: center;
    }

    .overview-cont p {
      color: #000 !important;
      font-family: "Manrope-Regular" !important;
      font-size: 16px;
      color: #262626 !important;

    }

    .company-head {
      padding-bottom: 20px;
      font-family: "Manrope-Bold" !important;
      font-size: 20px;
    }

    .overview-container {
      padding: 80px !important;
      background-image: url("<?php echo e(asset('newAssets/img/premiumpage/overviewbg.png')); ?>");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }


    .footer-bg {
      background:url("<?php echo e(asset('newAssets/img/premiumpage/footerbg.png')); ?>") !important;
      color: #fff;
      padding: 20px 0;
      text-align: center;
      position: relative;
      overflow: hidden;
      border-radius: 14px !important;
      margin-top: 40px;
      top: 29px !important;
      background-position: center !important;
      background-repeat: no-repeat !important;
    }



    .contact-info h3 {
      font-size: 18px;
      margin-bottom: 15px;
      color: white;
    }

    .contact-info p {
      margin: 5px 0;
      font-size: 1rem;
      display: flex;
      align-items: center;
      gap: 10px;
      justify-content: center;
    }

    .contact-info i {
      font-size: 1.2rem;
    }

    .social-media a {
      color: #fff;
      font-size: 1.5rem;
      margin: 0 10px;
      text-decoration: none;
      transition: color 0.3s;
    }

    .social-media a:hover {
      color: #ddd;
    }

    .framer-badge {
      position: absolute;
      bottom: 10px;
      right: 10px;
      background: #fff;
      color: #000;
      padding: 5px 10px;
      border-radius: 5px;
      font-size: 0.8rem;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .framer-badge span {
      margin-right: 5px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .footer-content {
        flex-direction: column;
        gap: 20px;
      }

      .contact-info p {
        font-size: 0.9rem;
      }

      .social-media a {
        font-size: 1.2rem;
      }
    }

    @media (max-width: 480px) {
      .footer {
        padding: 15px 0;
      }

      .contact-info h3 {
        font-size: 1.2rem;
      }

      .contact-info p {
        font-size: 0.8rem;
      }

      .social-media a {
        font-size: 1rem;
        margin: 0 5px;
      }

      .framer-badge {
        bottom: 5px;
        right: 5px;
        font-size: 0.7rem;
        padding: 3px 8px;
      }
    }

    .btn-hero {
      background-color: #7c3aed !important;
      color: #fff !important;
      font-family: 'Manrope-Medium' !important;
      font-size: 16px;
      height: 44px;
      width: 200px;

    }

    .btn-hero-2 {
      font-size: 16px !important;
      height: 44px !important;
      font-family: 'Manrope-Medium' !important;
      color: #7c3aed !important;
      border: 1px solid #7c3aed !important;

    }

    .caro-p {
      color: #000 !important;
      font-family: "Manrope-Regular" !important;
      font-size: 16px;
    }

    .social-media-footer {
      text-align: center;
      display: flex;
      justify-content: center;
      margin-top: 12px;
    }

    .btn-hero-2:hover {
      background-color: unset !important;
    }

    .chat-dummy {
      height: unset !important;
      display: flex !important;
      justify-content: center !important;
      width: unset !important;
    }

    .review-card-dummy {
      min-height: 420px;
      margin-top: 8px;
    }

    .review-dum-img {
      max-width: 343px;
      margin: 0 auto;
      display: flex;
    }

    .review-dum-img2 {
      padding-top: 16px;
      width: 200px;
      display: flex;
      margin: 0 auto;
    }

    .rev-1 {
      color: #A3A3A3 !important;
    }

    .carousel-image-award-dummy {
      display: unset !important;
      width: unset !important;

    }

    .carousel-image-award-dummy img {
      height: 100% !important;
    }

    .carousel-card-award-dummy {
      background: unset !important;
      box-shadow: unset !important;
      background: unset !important;
      border: unset !important;
    }

    .footer-bg-dummy {
      height: 275px !important
    }

    .footer-content-dummy {
      padding: 50px !important;
    }

    .what-2 {
      font-family: 'Manrope', sans-serif !important;
      font-weight: 800;
      /* Extra Bold */
    }

    .cube-dum {
      font-family: "Manrope-Bold" !important;
      font-size: 14px !important;
      color: #333 !important;
    }


    /* Responsive Design */
    @media (max-width: 768px) {
      .footer-content {
        flex-direction: column;
        gap: 20px;
      }

      .contact-info p {
        font-size: 0.9rem;
      }

      .social-media a {
        font-size: 1.2rem;
      }

      .capabilities-section {
        padding: 0px !important;
      }

      .social-chart {
        width: unset !important;
      }

      .company-name {
        font-size: 24px;
      }

      .company-tagline {
        font-size: 16px;

      }

      .company-details span {
        font-size: 16px;

      }

      .carousel-card-award-2 {
        min-height: 300px;
      }

      .action-buttons {
        display: flex !important;
        margin-bottom: 20px !important;
        /* width: 400px !important; */
        justify-self: center;
      }

      .overview-container {
        padding: 20px !important;
      }

      .company-head {
        margin-top: 20px;
      }

      .carousel-container {
        height: unset !important;
        margin-bottom: 20px;
      }

      .carousel-card {
        box-shadow: unset !important;


      }

      .section-title-cab {
        margin-left: 0px !important;
        padding-left: 24px;
        margin-top: 10px;

      }

      .carousel-controls {
        right: 5% !important;
        margin-top: 10px;
      }

      .carousel-container-what {
        max-width: unset !important;
      }

      .carousel-container-what-2 {
        max-width: unset !important;
      }

      .what-we-bg {
        margin-top: 20px !important;
      }

      /* .section-title{
        margin-left: 0px !important;

      } */
    }

    @media (max-width: 480px) {
      .footer {
        padding: 15px 0;
      }

      .action-buttons {
        width: unset !important;
        justify-content: center;
      }

      .contact-info h3 {
        font-size: 1.2rem;
      }

      .contact-info p {
        font-size: 0.8rem;
      }

      .social-media a {
        font-size: 1rem;
        margin: 0 5px;
      }

      .framer-badge {
        bottom: 5px;
        right: 5px;
        font-size: 0.7rem;
        padding: 3px 8px;
      }

      .social-main-bg {
        display: none;
      }

      .carousel-card {
        display: block !important;

      }

      .carousel-image {
        width: 100%;
      }

      .carousel-content {
        width: 100%;
      }

      .caro-p {
        font-size: 14px;
      }

      .what-we-bg {
        padding: 20px !important;
      }

      .posts-container {
        padding: 20px !important;

      }

      .pie-charts-bg {
        padding: 20px !important;

      }

      .navigation-arrows {
        position: fixed;

      }
    }

    .hero-v4 {
      padding: 0px 80px 0px 80px;
    }

    .company-tag-v2 {
      max-width: unset !important;
    }

    .v2-img-hero {
      border-radius: 16px;
    }

    .img-sliders {
      height: 500px;
      width: 100%;
    }

    .img-sliders img {
      height: 500px;
      width: 100%;
    }

    .team-prev:hover {
      color: unset !important;

    }

    .team-next:hover {
      color: unset !important;

    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      background-color: #8f71f5 !important;
    }

    .carousel-control-next,
    .carousel-control-prev {
      color: #fff !important;
    }
    .header-container {
  display: flex;
  align-items: center;
  gap: 15px; /* Adjust spacing between logo and button */
}



    .modal-backdrop {
  background-color: rgba(0, 0, 0, 0.3) !important; /* Reduced from default ~0.5 */
}
  </style>
</head>

<header class="header">
  <div class="header-container">
    <div class="logo">
      <a href="<?php echo e(route('network.index')); ?>">
        <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/PraxMarket.png')); ?>" alt="PRAX MARKET">
      </a>
    </div>
    <div class="profileTogler">
      <?php if($viewType == "default"): ?>
      <a href="<?php echo e(route('dataForPremiumProfile',['viewType'=>'premium'])); ?>" class="btn btn-pill btn-outline-primary">Premium View</a>
      <?php else: ?>
      <a href="<?php echo e(route('dataForPremiumProfile',['viewType'=>'default'])); ?>" class="btn btn-pill btn-outline-primary">Default View</a>
      <?php endif; ?>
    </div>
  </div>


  <nav>
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="#" id="userMenu">
          <div class="user-avatar">
            <?php if(isset(Auth::user()->path)): ?>
            <img loading="lazy" src="<?php echo e(Storage::disk('s3')->url(Auth::user()->path)); ?>" alt="User Avatar">
            <?php else: ?>
            <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/Logo2.png')); ?>" alt="User Avatar">
            <?php endif; ?>

          </div>
          <h4><?php echo e(Auth::user()->name ?? 'Sample Company Name'); ?></h4>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down chevron-icon" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
          </svg>
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item-dash" href="<?php echo e(route('network.index')); ?>"><strong>Go to Network</strong></a>
        </div>
      </li>
    </ul>
  </nav>
</header>

<!-- SOCIAL MEDIA WITH HEADER START -->

<?php if(isset($premiumProfile->layoutType) && $premiumProfile->layoutType == 'TYPE_A'): ?>
<div class="container-fluid hero-content-bg">
  <div class="row">
    <div class="col-12">
      <div class="hero-container">
        <?php if(count($premiumProfile->sliders) > 0): ?>
        <?php $__currentLoopData = $premiumProfile->sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $sliders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <img loading="lazy" src="<?php echo e($sliders->path); ?>" alt="Albon Engineering Building 1" class="hero-bg active">
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
        <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/hero/1.jpg')); ?>" alt="Albon Engineering Building 1" class="hero-bg active">
        <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/hero/2.jpg')); ?>" alt="Albon Engineering Building 2" class="hero-bg">
        <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/hero/3.jpg')); ?>" alt="Albon Engineering Production Floor" class="hero-bg">
        <?php endif; ?>


        <div class="company-info container">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="logo-container">
                <?php if(isset(Auth::user()->path)): ?>
                <img loading="lazy" src="<?php echo e(Storage::disk('s3')->url(Auth::user()->path)); ?>" alt="User Avatar">
                <?php else: ?>
                <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/Logo2.png')); ?>" alt="User Avatar">
                <?php endif; ?>
              </div>
              <h1 class="company-name"><?php echo e($premiumProfile->companyDetails->name ?? 'Sample Company Name'); ?></h1>
              <p class="company-tagline"><?php echo e($premiumProfile->companyTagline ?? 'To engineer precision components that power progress — with craftsmanship, consistency, and care.'); ?></p>
              <div class="company-details">
                <span><?php echo e($premiumProfile->companySpecialistIn ?? 'CNC Specialist'); ?></span> • <span><?php echo e($premiumProfile->employeeCount ?? '10-50 employees'); ?> employees</span>
              </div>
              <div class="action-buttons">
    <button class="btn me-2 btn-hero d-none" data-bs-toggle="modal" data-bs-target="#supplierModal">Contact</button>
      <!-- <button class="btn  btn-hero-2">Request Quote</button> -->
    </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="container-fluid social-main-bg">
    <div class="row">
      <div class="col-lg-12">
        <div class="row social-bg">
          <h2 style="text-align: center;padding-bottom:20px;font-size: 20px;">Social Apps</h2>
          <div class="col-lg-2">
            <div class="card social-widget widget-hover">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center gap-2">
                    <div class="social-icons"><img loading="lazy"
                        src="<?php echo e(asset('assets/images/dashboard-5/social/1.png')); ?>"
                        alt="facebook icon"></div><span>Facebook</span>
                  </div>
                </div>
                <div class="social-content">
                  <div>
                    <h5 class="mb-1"><?php echo e($premiumProfile->fbCount ?? '0'); ?></h5><span
                      class="f-light">Likes</span>
                  </div>
                  <div class="social-chart">
                    <div id="radial-facebook"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="card social-widget widget-hover">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center gap-2">
                    <div class="social-icons"><img loading="lazy"
                        src="<?php echo e(asset('assets/images/dashboard-5/social/2.png')); ?>"
                        alt="instagram icon"></div><span>Instagram</span>
                  </div>
                </div>
                <div class="social-content">
                  <div>
                    <h5 class="mb-1"><?php echo e($premiumProfile->instaCount ?? '0'); ?></h5><span
                      class="f-light">Followers</span>
                  </div>
                  <div class="social-chart">
                    <div id="radial-instagram"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="card social-widget widget-hover">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center gap-2">
                    <div class="social-icons"><img loading="lazy"
                        src="<?php echo e(asset('assets/images/dashboard-5/social/3.png')); ?>"
                        alt="twitter icon"></div><span>X (Twitter)</span>
                  </div>
                </div>
                <div class="social-content">
                  <div>
                    <h5 class="mb-1"><?php echo e($premiumProfile->xCount ?? '0'); ?></h5><span
                      class="f-light">Followers</span>
                  </div>
                  <div class="social-chart">
                    <div id="radial-twitter"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="card social-widget widget-hover">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center gap-2">
                    <div class="social-icons"><img loading="lazy"
                        src="<?php echo e(asset('assets/images/dashboard-5/social/4.png')); ?>"
                        alt="twitter icon"></div><span>Youtube</span>
                  </div>
                </div>
                <div class="social-content">
                  <div>
                    <h5 class="mb-1"><?php echo e($premiumProfile->youtubeCount ?? '0'); ?></h5><span
                      class="f-light">Followers</span>
                  </div>
                  <div class="social-chart">
                    <div id="radial-youtube"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="card social-widget widget-hover">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center gap-2">
                    <div class="social-icons"><img loading="lazy"
                        src="<?php echo e(asset('assets/images/dashboard-5/social/5.png')); ?>"
                        alt="twitter icon"></div><span>LinkedIn</span>
                  </div>
                </div>
                <div class="social-content">
                  <div>
                    <h5 class="mb-1"><?php echo e($premiumProfile->linkedInCount ?? '0'); ?></h5><span
                      class="f-light">Followers</span>
                  </div>
                  <div class="social-chart">
                    <div id="radial-linkedin"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="card social-widget widget-hover">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center gap-2">
                    <div class="social-icons"><img loading="lazy"
                        src="<?php echo e(asset('assets/images/dashboard-5/social/6.png')); ?>"
                        alt="twitter icon"></div><span>Pinterest</span>
                  </div>
                </div>
                <div class="social-content">
                  <div>
                    <h5 class="mb-1"><?php echo e($premiumProfile->pinterestCount ?? '0'); ?></h5><span
                      class="f-light">Followers</span>
                  </div>
                  <div class="social-chart">
                    <div id="radial-pinterest"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<?php else: ?>
<section class="v2-hero-1">
  <div class="container-fluid hero-content-bg-v2">
    <div class="row">
      <div class="col-lg-12">
        <div class="hero-container-1">
          <div class="container-fluid">
            <div class="row justify-content-center hero-v4">
              <div class="col-md-6" style="text-align: start;">
                <div class="logo-container-v2">
                  <?php if(isset(Auth::user()->path)): ?>
                  <img loading="lazy" src="<?php echo e(Storage::disk('s3')->url(Auth::user()->path)); ?>" alt="User Avatar">
                  <?php else: ?>
                  <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/Logo2.png')); ?>" alt="User Avatar">
                  <?php endif; ?>
                </div>
                <h1 class="company-name"><?php echo e($premiumProfile->companyDetails->name ?? 'Sample Company Name'); ?></h1>
                <p class="company-tagline company-tag-v2"><?php echo e($premiumProfile->companyTagline ?? 'To engineer precision components that power progress — with craftsmanship, consistency, and care.'); ?></p>
                <div class="company-details">
                  <span><?php echo e($premiumProfile->companySpecialistIn ?? 'CNC Specialist'); ?></span> • <span><?php echo e($premiumProfile->employeeCount ?? '10-50 employees'); ?> employees</span>

                </div>
                <div class="action-buttons">
    <button class="btn me-2 btn-hero d-none" data-bs-toggle="modal" data-bs-target="#supplierModal">Contact</button>
      <!-- <button class="btn  btn-hero-2">Request Quote</button> -->
    </div>
              </div>
              <div class="col-lg-6">
                <div class="reviews-section">
                  <div id="Type2Carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                    <div class="carousel-inner">
                      <!-- Carousel Item 1 (First 4 cards) -->
                      <?php if(count($premiumProfile->sliders) > 0): ?>
                      <?php $__currentLoopData = $premiumProfile->sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $sliders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="carousel-item active">
                        <div class="row">
                          <div class="col-md-12 mb-4">
                            <img loading="lazy" src="<?php echo e($sliders->path); ?>" alt="Albon Engineering" class="v2-img-hero" style="width:100%;height: 475px;">
                          </div>
                        </div>
                      </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php else: ?>
                      <div class="carousel-item active">
                        <div class="row">
                          <div class="col-md-12 mb-4">
                            <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/premiumdefault/v1.jpg')); ?>" alt="Albon Engineering" class="v2-img-hero" style="width:100%;height: 475px;">
                          </div>
                        </div>
                      </div>

                      <div class="carousel-item">
                        <div class="row">
                          <div class="col-md-12 mb-4">
                            <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/premiumdefault/v2.jpg')); ?>" alt="Albon Engineering" class="v2-img-hero" style="width:100%;height: 475px;">
                          </div>
                        </div>

                      </div>
                      <div class="carousel-item">
                        <div class="row">
                          <div class="col-md-12 mb-4">
                            <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/premiumdefault/v3.jpg')); ?>" alt="Albon Engineering" class="v2-img-hero" style="width:100%;height: 475px;">
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php endif; ?>

                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid social-main-bg">
      <div class="row">
        <div class="col-lg-12">
          <div class="row social-bg">
            <h2 style="text-align: center;padding-bottom:20px;font-size: 20px;">Social Apps</h2>
            <div class="col-lg-2">
              <div class="card social-widget widget-hover">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-2">
                      <div class="social-icons"><img loading="lazy"
                          src="<?php echo e(asset('assets/images/dashboard-5/social/1.png')); ?>"
                          alt="facebook icon"></div><span>Facebook</span>
                    </div>
                  </div>
                  <div class="social-content">
                    <div>
                      <h5 class="mb-1 counter" data-target="12098">0</h5><span
                        class="f-light">Likes</span>
                    </div>
                    <div class="social-chart">
                      <div id="radial-facebook"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="card social-widget widget-hover">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-2">
                      <div class="social-icons"><img loading="lazy"
                          src="<?php echo e(asset('assets/images/dashboard-5/social/2.png')); ?>"
                          alt="instagram icon"></div><span>Instagram</span>
                    </div>
                  </div>
                  <div class="social-content">
                    <div>
                      <h5 class="mb-1 counter" data-target="15080">0</h5><span
                        class="f-light">Followers</span>
                    </div>
                    <div class="social-chart">
                      <div id="radial-instagram"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="card social-widget widget-hover">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-2">
                      <div class="social-icons"><img loading="lazy"
                          src="<?php echo e(asset('assets/images/dashboard-5/social/3.png')); ?>"
                          alt="twitter icon"></div><span>X (Twitter)</span>
                    </div>
                  </div>
                  <div class="social-content">
                    <div>
                      <h5 class="mb-1 counter" data-target="12564">0</h5><span
                        class="f-light">Followers</span>
                    </div>
                    <div class="social-chart">
                      <div id="radial-twitter"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="card social-widget widget-hover">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-2">
                      <div class="social-icons"><img loading="lazy"
                          src="<?php echo e(asset('assets/images/dashboard-5/social/4.png')); ?>"
                          alt="twitter icon"></div><span>Youtube</span>
                    </div>
                  </div>
                  <div class="social-content">
                    <div>
                      <h5 class="mb-1 counter" data-target="85967">0</h5><span
                        class="f-light">Followers</span>
                    </div>
                    <div class="social-chart">
                      <div id="radial-youtube"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="card social-widget widget-hover">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-2">
                      <div class="social-icons"><img loading="lazy"
                          src="<?php echo e(asset('assets/images/dashboard-5/social/5.png')); ?>"
                          alt="twitter icon"></div><span>LinkedIn</span>
                    </div>
                  </div>
                  <div class="social-content">
                    <div>
                      <h5 class="mb-1 counter" data-target="15005">0</h5><span
                        class="f-light">Followers</span>
                    </div>
                    <div class="social-chart">
                      <div id="radial-linkedin"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="card social-widget widget-hover">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-2">
                      <div class="social-icons"><img loading="lazy"
                          src="<?php echo e(asset('assets/images/dashboard-5/social/6.png')); ?>"
                          alt="twitter icon"></div><span>Pinterest</span>
                    </div>
                  </div>
                  <div class="social-content">
                    <div>
                      <h5 class="mb-1 counter" data-target="20015">0</h5><span
                        class="f-light">Followers</span>
                    </div>
                    <div class="social-chart">
                      <div id="radial-pinterest"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<?php endif; ?>




<div class="modal fade" id="supplierModal" tabindex="-1" aria-labelledby="supplierModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="supplierModalLabel">Contact</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="message" class="form-label">Description</label>
                  <textarea class="form-control" id="message" rows="4" placeholder="Enter your message here"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" onclick="sendMessage()">Send</button>
            </div>
          </div>
        </div>
      </div>




<!-- SOCIAL MEDIA WITH HEADER END -->

<?php if($viewType == "premium"): ?>

<!-- COMPANY OVERVIEW START -->

<div class="container-fluid overview-container">
  <div class="row">
    <?php if(isset($premiumProfile->companyOverviewA) && $premiumProfile->sliders): ?>
    <div class="col-lg-7 col-md-12">
      <?php if(count($premiumProfile->sliders) > 0): ?>
      <div class="img-sliders">
        <img loading="lazy" src="<?php echo e($premiumProfile->sliders[0]->path); ?>" alt="Albon Engineering Building 1" class="">
      </div>
      <?php else: ?>
      <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/building.jpg')); ?>" style="width: 100%;object-fit:cover;border-radius:10px" alt="Modern office building with glass facade" />
      <?php endif; ?>
    </div>
    <?php else: ?>
    <div class="col-lg-7 col-md-12">
      <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/building.jpg')); ?>" style="width: 100%;object-fit:cover;border-radius:10px" alt="Modern office building with glass facade" />
    </div>
    <?php endif; ?>
    <?php if(isset($premiumProfile->companyOverviewA)): ?>
    <div class="col-lg-5 col-md-12 col-sm-12 overview-main">
      <div class="overview-cont">
        <h2 class="company-head">Company Overview</h2>
        <p class="company-para"><?php echo e($premiumProfile->companyOverviewA ??  "Company Name is a trusted provider of high-precision engineering and manufacturing solutions, serving industries where accuracy, reliability, and repeatability are non-negotiable. With over [X] years of experience and a highly skilled team of engineers and machinists, we support global clients across the aerospace, automotive, medical, defence, and energy sectors."); ?></p>
        <p class="company-para"><?php echo e($premiumProfile->companyOverviewB ??  "We specialize in delivering complex, tight-tolerance components through advanced CNC machining, prototyping, and production engineering. Our commitment to quality and innovation makes us the partner of choice for clients who demand excellence."); ?></p>
      </div>
    </div>
    <?php else: ?>

    <div class="col-lg-5 col-md-12 col-sm-12 overview-main">
      <div class="overview-cont">
        <h2 class="company-head">Company Overview</h2>
        <p class="company-para"><?php echo e($premiumprofile->imaage ?? 'Overview not available — this supplier hasn’t shared details yet.'); ?></p>
      </div>
    </div>
  </div>
  <?php endif; ?>
</div>
</div>
<!-- COMPANY OVERVIEW END  -->





<!-- overall capablities start here-->

<!-- CAPABLITIES START -->



<div class="container-fluid capabilities-section">
  <div class="row">
    <div class="col-12">
      <h2 class="section-title">Capabilities</h2>
      <div class="carousel-controls">
        <button class="carousel-control prev" id="prevBtn">
          <i class="fas fa-chevron-left" style="color:#fff"></i>
        </button>
        <button class="carousel-control next" id="nextBtn">
          <i class="fas fa-chevron-right" style="color:#fff"></i>
        </button>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <!-- Left column with carousel - unchanged -->
      <?php if(isset($premiumProfile->companyMachines) && count($premiumProfile->companyMachines) > 0): ?>
      <div class="col-lg-8">
        <div class="carousel-container">
          <div class="capabilities-carousel" id="capabilitiesCarousel">
            <!-- Carousel Item 1 -->


            <?php $__currentLoopData = $premiumProfile->companyMachines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $companyMachine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <!-- Carousel Item 2 -->
            <div class="carousel-item-wrapper">
              <div class="carousel-card">
                <div class="carousel-image">
                  <?php if(isset($companyMachine->path)): ?>
                  <img loading="lazy" src="<?php echo e($companyMachine->path); ?>" alt="CNC Machining">
                  <?php else: ?>
                  <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/premiumdefault/Time1.png')); ?>" alt="Precision Component">
                  <?php endif; ?>
                </div>
                <div class="carousel-content">
                  <h2 class="carousel-head-1"><?php echo e($companyMachine->machineName ?? 'Sample Machine Name'); ?></h2>
                  <p class="caro-p"><?php echo e($companyMachine->description ?? "At our company, we're driven by a passion for precision engineering and a relentless pursuit of innovation and quality. We believe every problem is an opportunity to create something new and better"); ?>.</p>
                </div>
              </div>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


          </div>
        </div>
      </div>
      <?php else: ?>
      <div class="col-lg-8">
        <div class="carousel-container">
          <div class="capabilities-carousel" id="capabilitiesCarousel">
            <!-- Carousel Item 1 -->
            <div class="carousel-item-wrapper">
              <div class="carousel-card">
                <div class="carousel-image">
                  <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/premiumdefault/Time1.png')); ?>" alt="Precision Component">
                </div>
                <div class="carousel-content">
                  <h2 class="carousel-head-1">Capability not listed</h2>
                  <p class="caro-p">This supplier hasn’t added details about their capabilities yet. Please check back later.</p>
                </div>
              </div>
            </div>


            <!-- Carousel Item 2 -->
            <div class="carousel-item-wrapper">
              <div class="carousel-card">
                <div class="carousel-image">
                  <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/premiumdefault/Time1.png')); ?>" alt="Precision Component">
                </div>
                <div class="carousel-content">
                  <h2 class="carousel-head-1">Capability not listed</h2>
                  <p class="caro-p">This supplier hasn’t added details about their capabilities yet. Please check back later.</p>
                </div>
              </div>
            </div>

            <!-- Carousel Item 3 -->
            <div class="carousel-item-wrapper">
              <div class="carousel-card">
                <div class="carousel-image">
                  <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/premiumdefault/Time1.png')); ?>" alt="Precision Component">
                </div>
                <div class="carousel-content">
                  <h2 class="carousel-head-1">Capability not listed</h2>
                  <p class="caro-p">This supplier hasn’t added details about their capabilities yet. Please check back later.</p>
                </div>
              </div>
            </div>

            <!-- Carousel Item 4 -->
            <div class="carousel-item-wrapper">
              <div class="carousel-card">
                <div class="carousel-image">
                  <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/premiumdefault/Time1.png')); ?>" alt="Precision Component">
                </div>
                <div class="carousel-content">
                  <h2 class="carousel-head-1">Capability not listed</h2>
                  <p class="caro-p">This supplier hasn’t added details about their capabilities yet. Please check back later.</p>
                </div>
              </div>
            </div>

            <!-- Carousel Item 5 -->
            <div class="carousel-item-wrapper">
              <div class="carousel-card">
                <div class="carousel-image">
                  <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/premiumdefault/Time1.png')); ?>" alt="Precision Component">
                </div>
                <div class="carousel-content">
                  <h2 class="carousel-head-1">Capability not listed</h2>
                  <p class="caro-p">This supplier hasn’t added details about their capabilities yet. Please check back later.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>


      <!-- CAPABLITIES END -->


      <!-- Right column with scrolling industry cards -->
      <?php if(isset($premiumProfile->testData)): ?>
      <div class="col-lg-4 col-md-12 col-sm-12">
        <div class="carousel-container-what-2">
          <h3 class="carousel-title-what">Industries We Serve</h3>
          <div class="carousel-content-what">
            <div class="carousel-track-what">
              <!-- Original items -->
              <div class="industries-card">
                <!-- <h3 class="industries-title" style="color:#fff">Industries We Serve</h3> -->
                <div class="industry-total">
                  <div class="industry-item">
                    <div class="industry-icon">
                      <i class="fas fa-plane"></i>
                    </div>
                    <div class="industry-details">
                      <div class="industry-name">Aerospace & Defence</div>
                      <div class="industry-description">Flight-critical and structural components</div>
                    </div>
                  </div>
                  <div class="stats-row">
                    <div class="stats-item">
                      <div class="stats-number">24</div>
                      <div class="stats-label">Projects</div>
                    </div>
                    <div class="progress-circle">
                      <span class="progress-percentage">78%</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="industries-card">
                <!-- <h3 class="industries-title" style="color:#fff">Industries We Serve</h3> -->
                <div class="industry-total">
                  <div class="industry-item">
                    <div class="industry-icon">
                      <i class="fas fa-plane"></i>
                    </div>
                    <div class="industry-details">
                      <div class="industry-name">Aerospace & Defence</div>
                      <div class="industry-description">Flight-critical and structural components</div>
                    </div>
                  </div>
                  <div class="stats-row">
                    <div class="stats-item">
                      <div class="stats-number">24</div>
                      <div class="stats-label">Projects</div>
                    </div>
                    <div class="progress-circle">
                      <span class="progress-percentage">78%</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="industries-card">
                <!-- <h3 class="industries-title" style="color:#fff">Industries We Serve</h3> -->
                <div class="industry-total">
                  <div class="industry-item">
                    <div class="industry-icon">
                      <i class="fas fa-car"></i>
                    </div>
                    <div class="industry-details">
                      <div class="industry-name">Industrial Equipment</div>
                      <div class="industry-description">OEM parts, jigs, fixtures & spares</div>
                    </div>
                  </div>
                  <div class="stats-row">
                    <div class="stats-item">
                      <div class="stats-number">36</div>
                      <div class="stats-label">Projects</div>
                    </div>
                    <div class="progress-circle">
                      <span class="progress-percentage">92%</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="industries-card">
                <!-- <h3 class="industries-title" style="color:#fff">Industries We Serve</h3> -->
                <div class="industry-total">
                  <div class="industry-item">
                    <div class="industry-icon">
                      <i class="fas fa-heartbeat"></i>
                    </div>
                    <div class="industry-details">
                      <div class="industry-name">Medical & Scientific</div>
                      <div class="industry-description">High-performance, custom machined parts</div>
                    </div>
                  </div>
                  <div class="stats-row">
                    <div class="stats-item">
                      <div class="stats-number">42</div>
                      <div class="stats-label">Projects</div>
                    </div>
                    <div class="progress-circle">
                      <span class="progress-percentage">85%</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="industries-card">
                <!-- <h3 class="industries-title" style="color:#fff">Industries We Serve</h3> -->
                <div class="industry-total">
                  <div class="industry-item">
                    <div class="industry-icon">
                      <i class="fas fa-bolt"></i>
                    </div>
                    <div class="industry-details">
                      <div class="industry-name">Energy & Power</div>
                      <div class="industry-description">Turbine components and sustainable solutions</div>
                    </div>
                  </div>
                  <div class="stats-row">
                    <div class="stats-item">
                      <div class="stats-number">31</div>
                      <div class="stats-label">Projects</div>
                    </div>
                    <div class="progress-circle">
                      <span class="progress-percentage">73%</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="industries-card">
                <!-- <h3 class="industries-title" style="color:#fff">Industries We Serve</h3> -->
                <div class="industry-total">
                  <div class="industry-item">
                    <div class="industry-icon">
                      <i class="fas fa-ship"></i>
                    </div>
                    <div class="industry-details">
                      <div class="industry-name">Marine & Offshore</div>
                      <div class="industry-description">Corrosion-resistant components for harsh environments</div>
                    </div>
                  </div>
                  <div class="stats-row">
                    <div class="stats-item">
                      <div class="stats-number">19</div>
                      <div class="stats-label">Projects</div>
                    </div>
                    <div class="progress-circle">
                      <span class="progress-percentage">81%</span>
                    </div>
                  </div>
                </div>
              </div>


              <div class="industries-card">
                <!-- <h3 class="industries-title" style="color:#fff">Industries We Serve</h3> -->
                <div class="industry-total">
                  <div class="industry-item">
                    <div class="industry-icon">
                      <i class="fas fa-plane"></i>
                    </div>
                    <div class="industry-details">
                      <div class="industry-name">Aerospace & Defence</div>
                      <div class="industry-description">Flight-critical and structural components</div>
                    </div>
                  </div>
                  <div class="stats-row">
                    <div class="stats-item">
                      <div class="stats-number">24</div>
                      <div class="stats-label">Projects</div>
                    </div>
                    <div class="progress-circle">
                      <span class="progress-percentage">78%</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="industries-card">
                <!-- <h3 class="industries-title" style="color:#fff">Industries We Serve</h3> -->
                <div class="industry-total">
                  <div class="industry-item">
                    <div class="industry-icon">
                      <i class="fas fa-car"></i>
                    </div>
                    <div class="industry-details">
                      <div class="industry-name">Automotive</div>
                      <div class="industry-description">Precision parts for high-performance vehicles</div>
                    </div>
                  </div>
                  <div class="stats-row">
                    <div class="stats-item">
                      <div class="stats-number">36</div>
                      <div class="stats-label">Projects</div>
                    </div>
                    <div class="progress-circle">
                      <span class="progress-percentage">92%</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php else: ?>
      <div class="col-lg-4 col-md-12 col-sm-12">
        <div class="carousel-container-what-2">
          <h3 class="carousel-title-what">Industries We Serve</h3>
          <div class="carousel-content-what">
            <div class="carousel-track-what">
              <!-- Original items -->

              <div class="industries-card">
                <!-- <h3 class="industries-title" style="color:#fff">Industries We Serve</h3> -->
                <div class="industry-total">
                  <div class="industry-item">
                    <div class="industry-icon">
                      <i class="fas fa-plane"></i>
                    </div>
                    <div class="industry-details">
                      <div class="industry-name"><?php echo e($premiumprofile->imaage ?? 'No industries listed at this time.'); ?></div>

                    </div>
                  </div>
                  <div class="stats-row">
                    <div class="stats-item">
                      <div class="stats-number"><?php echo e($premiumprofile->imaage ?? 'N/A'); ?></div>
                      <div class="stats-label">Projects</div>
                    </div>
                    <div class="progress-circle">
                      <span class="progress-percentage"><?php echo e($premiumprofile->imaage ?? 'N/A'); ?></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="industries-card">
                <!-- <h3 class="industries-title" style="color:#fff">Industries We Serve</h3> -->
                <div class="industry-total">
                  <div class="industry-item">
                    <div class="industry-icon">
                      <i class="fas fa-plane"></i>
                    </div>
                    <div class="industry-details">
                      <div class="industry-name"><?php echo e($premiumprofile->imaage ?? 'No industries listed at this time.'); ?></div>

                    </div>
                  </div>
                  <div class="stats-row">
                    <div class="stats-item">
                      <div class="stats-number"><?php echo e($premiumprofile->imaage ?? 'N/A'); ?></div>
                      <div class="stats-label">Projects</div>
                    </div>
                    <div class="progress-circle">
                      <span class="progress-percentage"><?php echo e($premiumprofile->imaage ?? 'N/A'); ?></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="industries-card">
                <!-- <h3 class="industries-title" style="color:#fff">Industries We Serve</h3> -->
                <div class="industry-total">
                  <div class="industry-item">
                    <div class="industry-icon">
                      <i class="fas fa-plane"></i>
                    </div>
                    <div class="industry-details">
                      <div class="industry-name"><?php echo e($premiumprofile->imaage ?? 'No industries listed at this time.'); ?></div>

                    </div>
                  </div>
                  <div class="stats-row">
                    <div class="stats-item">
                      <div class="stats-number"><?php echo e($premiumprofile->imaage ?? 'N/A'); ?></div>
                      <div class="stats-label">Projects</div>
                    </div>
                    <div class="progress-circle">
                      <span class="progress-percentage"><?php echo e($premiumprofile->imaage ?? 'N/A'); ?></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="industries-card">
                <!-- <h3 class="industries-title" style="color:#fff">Industries We Serve</h3> -->
                <div class="industry-total">
                  <div class="industry-item">
                    <div class="industry-icon">
                      <i class="fas fa-plane"></i>
                    </div>
                    <div class="industry-details">
                      <div class="industry-name"><?php echo e($premiumprofile->imaage ?? 'No industries listed at this time.'); ?></div>

                    </div>
                  </div>
                  <div class="stats-row">
                    <div class="stats-item">
                      <div class="stats-number"><?php echo e($premiumprofile->imaage ?? 'N/A'); ?></div>
                      <div class="stats-label">Projects</div>
                    </div>
                    <div class="progress-circle">
                      <span class="progress-percentage"><?php echo e($premiumprofile->imaage ?? 'N/A'); ?></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="industries-card">
                <!-- <h3 class="industries-title" style="color:#fff">Industries We Serve</h3> -->
                <div class="industry-total">
                  <div class="industry-item">
                    <div class="industry-icon">
                      <i class="fas fa-plane"></i>
                    </div>
                    <div class="industry-details">
                      <div class="industry-name"><?php echo e($premiumprofile->imaage ?? 'No industries listed at this time.'); ?></div>

                    </div>
                  </div>
                  <div class="stats-row">
                    <div class="stats-item">
                      <div class="stats-number"><?php echo e($premiumprofile->imaage ?? 'N/A'); ?></div>
                      <div class="stats-label">Projects</div>
                    </div>
                    <div class="progress-circle">
                      <span class="progress-percentage"><?php echo e($premiumprofile->imaage ?? 'N/A'); ?></span>
                    </div>
                  </div>
                </div>
              </div>


              <div class="industries-card">
                <!-- <h3 class="industries-title" style="color:#fff">Industries We Serve</h3> -->
                <div class="industry-total">
                  <div class="industry-item">
                    <div class="industry-icon">
                      <i class="fas fa-plane"></i>
                    </div>
                    <div class="industry-details">
                      <div class="industry-name"><?php echo e($premiumprofile->imaage ?? 'No industries listed at this time.'); ?></div>

                    </div>
                  </div>
                  <div class="stats-row">
                    <div class="stats-item">
                      <div class="stats-number"><?php echo e($premiumprofile->imaage ?? 'N/A'); ?></div>
                      <div class="stats-label">Projects</div>
                    </div>
                    <div class="progress-circle">
                      <span class="progress-percentage"><?php echo e($premiumprofile->imaage ?? 'N/A'); ?></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="industries-card">
                <!-- <h3 class="industries-title" style="color:#fff">Industries We Serve</h3> -->
                <div class="industry-total">
                  <div class="industry-item">
                    <div class="industry-icon">
                      <i class="fas fa-plane"></i>
                    </div>
                    <div class="industry-details">
                      <div class="industry-name"><?php echo e($premiumprofile->imaage ?? 'No industries listed at this time.'); ?></div>

                    </div>
                  </div>
                  <div class="stats-row">
                    <div class="stats-item">
                      <div class="stats-number"><?php echo e($premiumprofile->imaage ?? 'N/A'); ?></div>
                      <div class="stats-label">Projects</div>
                    </div>
                    <div class="progress-circle">
                      <span class="progress-percentage"><?php echo e($premiumprofile->imaage ?? 'N/A'); ?></span>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>

    </div>
  </div>
</div>


<!-- overall capablities end here-->





<!-- why choose us start here-->

<div class="container-fluid what-we-bg">
  <div class="row justify-content-center">
    <?php if(isset($premiumprofile->imaage)): ?>
    <div class="col-lg-3 col-md-12 col-sm-12">
      <div class="carousel-container-what">
        <h3 class="carousel-title-what">Why Choose Us?</h3>
        <div class="carousel-content-what">
          <div class="carousel-track-what">
            <!-- Original items -->
            <div class="carousel-card-what">
              <h5 class="card-title-what">Tight Tolerance Experts</h5>
              <div class="card-icon-what">
                <img loading="lazy" src="<?php echo e(asset('assets/images/dashboard-7/icon-2.svg')); ?>"
                  alt="total teachers">
              </div>
            </div>
            <div class="carousel-card-what">
              <h5 class="card-title-what">State-Of-The-Art Facility</h5>
              <div class="card-icon-what">
                <img loading="lazy"
                  src="<?php echo e(asset('assets/images/dashboard-7/icon1.svg')); ?>" alt="total students">
              </div>
            </div>
            <div class="carousel-card-what">
              <h5 class="card-title-what">Certified Engineers</h5>
              <div class="card-icon-what">
                <img loading="lazy"
                  src="<?php echo e(asset('assets/images/dashboard-7/icon-3.svg')); ?>"
                  alt="Total parents">
              </div>
            </div>
            <div class="carousel-card-what">
              <h5 class="card-title-what">24/7 Support</h5>
              <div class="card-icon-what">
                <img loading="lazy" src="<?php echo e(asset('assets/images/dashboard-7/icon-2.svg')); ?>"
                  alt="total teachers">
              </div>
            </div>

            <!-- Cloned items for infinite loop -->
            <div class="carousel-card-what">
              <h5 class="card-title-what">Tight Tolerance Experts</h5>
              <div class="card-icon-what">
                <img loading="lazy" src="<?php echo e(asset('assets/images/dashboard-7/icon-2.svg')); ?>"
                  alt="total teachers">
              </div>
            </div>
            <div class="carousel-card-what">
              <h5 class="card-title-what">State-Of-The-Art Facility</h5>
              <div class="card-icon-what">
                <img loading="lazy"
                  src="<?php echo e(asset('assets/images/dashboard-7/icon1.svg')); ?>" alt="total students">
              </div>
            </div>
            <div class="carousel-card-what">
              <h5 class="card-title-what">Certified Engineers</h5>
              <div class="card-icon-what">
                <img loading="lazy" src="<?php echo e(asset('assets/images/dashboard-7/icon-2.svg')); ?>"
                  alt="total teachers">
              </div>
            </div>
            <div class="carousel-card-what">
              <h5 class="card-title-what">24/7 Support</h5>
              <div class="card-icon-what">
                <img loading="lazy"
                  src="<?php echo e(asset('assets/images/dashboard-7/icon1.svg')); ?>" alt="total students">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php else: ?>
    <div class="col-lg-3 col-md-12 col-sm-12">
      <div class="carousel-container-what">
        <h3 class="carousel-title-what">Why Choose Us?</h3>
        <div class="carousel-content-what">
          <div class="carousel-track-what">
            <!-- Original items -->
            <div class="carousel-card-what">
              <h5 class="card-title-what"><?php echo e($premiumprofile->imaage ?? 'No highlights added yet'); ?></h5>
              <div class="card-icon-what">
                <img loading="lazy" src="<?php echo e(asset('assets/images/dashboard-7/icon-2.svg')); ?>"
                  alt="total teachers">
              </div>
            </div>
            <div class="carousel-card-what">
              <h5 class="card-title-what"><?php echo e($premiumprofile->imaage ?? 'No highlights added yet'); ?></h5>
              <div class="card-icon-what">
                <img loading="lazy"
                  src="<?php echo e(asset('assets/images/dashboard-7/icon1.svg')); ?>" alt="total students">
              </div>
            </div>
            <div class="carousel-card-what">
              <h5 class="card-title-what"><?php echo e($premiumprofile->imaage ?? 'No highlights added yet'); ?></h5>
              <div class="card-icon-what">
                <img loading="lazy"
                  src="<?php echo e(asset('assets/images/dashboard-7/icon-3.svg')); ?>"
                  alt="Total parents">
              </div>
            </div>
            <div class="carousel-card-what">
              <h5 class="card-title-what"><?php echo e($premiumprofile->imaage ?? 'No highlights added yet'); ?></h5>
              <div class="card-icon-what">
                <img loading="lazy" src="<?php echo e(asset('assets/images/dashboard-7/icon-2.svg')); ?>"
                  alt="total teachers">
              </div>
            </div>

            <!-- Cloned items for infinite loop -->
            <div class="carousel-card-what">
              <h5 class="card-title-what"><?php echo e($premiumprofile->imaage ?? 'No highlights added yet'); ?></h5>
              <div class="card-icon-what">
                <img loading="lazy" src="<?php echo e(asset('assets/images/dashboard-7/icon-2.svg')); ?>"
                  alt="total teachers">
              </div>
            </div>
            <div class="carousel-card-what">
              <h5 class="card-title-what"><?php echo e($premiumprofile->imaage ?? 'No highlights added yet'); ?></h5>
              <div class="card-icon-what">
                <img loading="lazy"
                  src="<?php echo e(asset('assets/images/dashboard-7/icon1.svg')); ?>" alt="total students">
              </div>
            </div>
            <div class="carousel-card-what">
              <h5 class="card-title-what"><?php echo e($premiumprofile->imaage ?? 'No highlights added yet'); ?></h5>
              <div class="card-icon-what">
                <img loading="lazy" src="<?php echo e(asset('assets/images/dashboard-7/icon-2.svg')); ?>"
                  alt="total teachers">
              </div>
            </div>
            <div class="carousel-card-what">
              <h5 class="card-title-what"><?php echo e($premiumprofile->imaage ?? 'No highlights added yet'); ?></h5>
              <div class="card-icon-what">
                <img loading="lazy"
                  src="<?php echo e(asset('assets/images/dashboard-7/icon1.svg')); ?>" alt="total students">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>


    <?php if(isset($premiumProfile->jobTags) && count($premiumProfile->jobTags) > 0): ?>
    <div class="col-lg-9 col-md-12 col-sm-12">
      <div class="card course-card">
        <h3 style="text-align: center;margin-bottom: 20px;" class="what-2">What We do</h3>
        <div class="card-body pt-0">
          <div class="course-main-card d-flex flex-wrap">
            <?php if(count($premiumProfile->jobTags) > 0): ?>
            <?php $__currentLoopData = $premiumProfile->jobTags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $jobTags): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="course-wrapper">
              <div class="course-icon-box">
                <div class="icon-wrap">
                  <img loading="lazy" src="<?php echo e(asset('assets/images/dashboard-3/course/1.svg')); ?>" alt="clock vector">
                </div>
                <img loading="lazy" class="arrow-bg" src="<?php echo e(asset('assets/images/dashboard-3/course/back-arrow/1.png')); ?>" alt="square border arrow">
              </div>
              <h6 class="f-14 cube-dum"><?php echo e($jobTags ?? 'CNC Milling & <br /> Turning'); ?></h6>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <div class="course-wrapper">
              <div class="course-icon-box">
                <div class="icon-wrap">
                  <img loading="lazy" src="<?php echo e(asset('assets/images/dashboard-3/course/1.svg')); ?>" alt="clock vector">
                </div>
                <img loading="lazy" class="arrow-bg" src="<?php echo e(asset('assets/images/dashboard-3/course/back-arrow/1.png')); ?>" alt="square border arrow">
              </div>
              <h6 class="f-14">CNC Milling & <br /> Turning</h6>
            </div>
            <div class="course-wrapper">
              <div class="course-icon-box">
                <div class="icon-wrap">
                  <img loading="lazy" src="<?php echo e(asset('assets/images/dashboard-3/course/2.svg')); ?>" alt="web development vector">
                </div>
                <img loading="lazy" class="arrow-bg" src="<?php echo e(asset('assets/images/dashboard-3/course/back-arrow/2.png')); ?>" alt="square border arrow">
              </div>
              <h6 class="f-14">EDM & Wire <br />Cutting</h6>
            </div>
            <div class="course-wrapper">
              <div class="course-icon-box">
                <div class="icon-wrap">
                  <img loading="lazy" src="<?php echo e(asset('assets/images/dashboard-3/course/3.svg')); ?>" alt="business vector">
                </div>
                <img loading="lazy" class="arrow-bg" src="<?php echo e(asset('assets/images/dashboard-3/course/back-arrow/1.png')); ?>" alt="square border arrow">
              </div>
              <h6 class="f-14">Prototype to <br /> Production</h6>
            </div>
            <div class="course-wrapper">
              <div class="course-icon-box">
                <div class="icon-wrap">
                  <img loading="lazy" src="<?php echo e(asset('assets/images/dashboard-3/course/4.svg')); ?>" alt="marketing vector">
                </div>
                <img loading="lazy" class="arrow-bg" src="<?php echo e(asset('assets/images/dashboard-3/course/back-arrow/3.png')); ?>" alt="square border arrow">
              </div>
              <h6 class="f-14">Surface <br /> Tretments</h6>
            </div>
            <div class="course-wrapper">
              <div class="course-icon-box">
                <div class="icon-wrap">
                  <img loading="lazy" src="<?php echo e(asset('assets/images/dashboard-3/course/4.svg')); ?>" alt="marketing vector">
                </div>
                <img loading="lazy" class="arrow-bg" src="<?php echo e(asset('assets/images/dashboard-3/course/back-arrow/3.png')); ?>" alt="square border arrow">
              </div>
              <h6 class="f-14">CAD/CAM <br /> Engineering Support</h6>
            </div>
            <div class="course-wrapper">
              <div class="course-icon-box">
                <div class="icon-wrap">
                  <img loading="lazy" src="<?php echo e(asset('assets/images/dashboard-3/course/4.svg')); ?>" alt="marketing vector">
                </div>
                <img loading="lazy" class="arrow-bg" src="<?php echo e(asset('assets/images/dashboard-3/course/back-arrow/3.png')); ?>" alt="square border arrow">
              </div>
              <h6 class="f-14">Quality & <br />Inspection</h6>
            </div>
            <?php endif; ?>


          </div>
        </div>
      </div>
    </div>
    <?php else: ?>
    <div class="col-xl-9">
      <div class="card course-card">
        <h3 style="text-align: center;margin-bottom: 20px;">What We do</h3>
        <div class="card-body pt-0">
          <div class="course-main-card d-flex flex-wrap">
            <div class="course-wrapper">
              <div class="course-icon-box">
                <div class="icon-wrap">
                  <img loading="lazy" src="<?php echo e(asset('assets/images/dashboard-3/course/1.svg')); ?>" alt="clock vector">
                </div>
                <img loading="lazy" class="arrow-bg" src="<?php echo e(asset('assets/images/dashboard-3/course/back-arrow/1.png')); ?>" alt="square border arrow">
              </div>
              <h6 class="f-14 cube-dum"><?php echo e($premiumprofile->imaage ?? 'N/A'); ?></h6>
            </div>
            <div class="course-wrapper">
              <div class="course-icon-box">
                <div class="icon-wrap">
                  <img loading="lazy" src="<?php echo e(asset('assets/images/dashboard-3/course/2.svg')); ?>" alt="web development vector">
                </div>
                <img loading="lazy" class="arrow-bg" src="<?php echo e(asset('assets/images/dashboard-3/course/back-arrow/2.png')); ?>" alt="square border arrow">
              </div>
              <h6 class="f-14 cube-dum"><?php echo e($premiumprofile->imaage ?? 'N/A'); ?></h6>
            </div>
            <div class="course-wrapper">
              <div class="course-icon-box">
                <div class="icon-wrap">
                  <img loading="lazy" src="<?php echo e(asset('assets/images/dashboard-3/course/3.svg')); ?>" alt="business vector">
                </div>
                <img loading="lazy" class="arrow-bg" src="<?php echo e(asset('assets/images/dashboard-3/course/back-arrow/1.png')); ?>" alt="square border arrow">
              </div>
              <h6 class="f-14 cube-dum"><?php echo e($premiumprofile->imaage ?? 'N/A'); ?></h6>
            </div>
            <div class="course-wrapper">
              <div class="course-icon-box">
                <div class="icon-wrap">
                  <img loading="lazy" src="<?php echo e(asset('assets/images/dashboard-3/course/4.svg')); ?>" alt="marketing vector">
                </div>
                <img loading="lazy" class="arrow-bg" src="<?php echo e(asset('assets/images/dashboard-3/course/back-arrow/3.png')); ?>" alt="square border arrow">
              </div>
              <h6 class="f-14 cube-dum"><?php echo e($premiumprofile->imaage ?? 'N/A'); ?></h6>
            </div>
            <div class="course-wrapper">
              <div class="course-icon-box">
                <div class="icon-wrap">
                  <img loading="lazy" src="<?php echo e(asset('assets/images/dashboard-3/course/4.svg')); ?>" alt="marketing vector">
                </div>
                <img loading="lazy" class="arrow-bg" src="<?php echo e(asset('assets/images/dashboard-3/course/back-arrow/3.png')); ?>" alt="square border arrow">
              </div>
              <h6 class="f-14 cube-dum"><?php echo e($premiumprofile->imaage ?? 'N/A'); ?></h6>
            </div>
            <div class="course-wrapper">
              <div class="course-icon-box">
                <div class="icon-wrap">
                  <img loading="lazy" src="<?php echo e(asset('assets/images/dashboard-3/course/4.svg')); ?>" alt="marketing vector">
                </div>
                <img loading="lazy" class="arrow-bg" src="<?php echo e(asset('assets/images/dashboard-3/course/back-arrow/3.png')); ?>" alt="square border arrow">
              </div>
              <h6 class="f-14 cube-dum"><?php echo e($premiumprofile->imaage ?? 'N/A'); ?></h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
  </div>
</div>


<div class="container-fluid posts-container">
    <div class="row">
        <?php if(isset($premiumProfile->posts) && count($premiumProfile->posts) > 0): ?>
            <!-- Featured Post (First Post) in col-md-5 -->
            <div class="col-md-5">
                <div class="post-card-main featured-post-1">
                    <img src="<?php echo e($premiumProfile->posts[0]->path); ?>" alt="Post Image" class="post-image-1">
                    <div class="post-content">
                        <div class="post-date">Posted on <?php echo e($premiumProfile->posts[0]->postedOn ?? 'Posted on sample date'); ?></div>
                        <div class="post-title"><?php echo e($premiumProfile->posts[0]->description ?? 'Sample description of the post.'); ?></div>
                        <div class="post-interactions">
                            <div class="interaction">
                                <i class="far fa-heart"></i> <?php echo e($premiumProfile->posts[0]->totalLikes ?? '12k'); ?>

                            </div>
                            <div class="interaction">
                                <i class="far fa-comment"></i> <?php echo e($premiumProfile->posts[0]->totalComments ?? '3.2k'); ?>

                            </div>
                            <!-- <div class="interaction">
                                <i class="far fa-bookmark"></i> <?php echo e($premiumProfile->posts[0]->bookmarks ?? '5.6k'); ?>

                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Posts in col-md-7 -->
            <div class="col-md-7">
                <h4 class="section-title">Posts</h4>
                <div class="row">
                    <?php $__currentLoopData = array_slice($premiumProfile->posts, 1, 6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- Display up to 6 additional real posts in col-md-4 -->
                        <div class="col-md-4 mb-4">
                            <div class="post-card">
                                <img src="<?php echo e($post->path); ?>" alt="Post Image" class="post-image">
                                <div class="post-content">
                                    <div class="post-date">Posted on <?php echo e($post->postedOn ?? 'Posted on sample date'); ?></div>
                                    <div class="post-title"><?php echo e($post->description ?? 'Sample description of the post.'); ?></div>
                                    <div class="post-interactions">
                                        <div class="interaction">
                                            <i class="far fa-heart"></i> <?php echo e($post->totalLikes ?? '12k'); ?>

                                        </div>
                                        <div class="interaction">
                                            <i class="far fa-comment"></i> <?php echo e($post->totalComments ?? '3.2k'); ?>

                                        </div>
                                        <!-- <div class="interaction">
                                            <i class="far fa-bookmark"></i> <?php echo e($post->bookmarks ?? '5.6k'); ?>

                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <!-- Fill remaining slots with dummy posts -->
                    <?php for($i = count(array_slice($premiumProfile->posts, 1, 6)); $i < 6; $i++): ?>
                        <?php
                            $dummyPosts = [
                                [
                                    'image' => asset('newAssets/img/premiumpage/social/1.jpg'),
                                    'alt' => 'Skyscrapers',
                                    'date' => 'Posted on March 19, 2025',
                                    'title' => 'Complete machining of complex parts thanks to Y-axis.'
                                ],
                                [
                                    'image' => asset('newAssets/img/premiumpage/2.png'),
                                    'alt' => 'Payment Device',
                                    'date' => 'Posted on March 19, 2025',
                                    'title' => 'Complete machining of complex parts thanks to Y-axis.'
                                ],
                                [
                                    'image' => asset('newAssets/img/premiumpage/3.png'),
                                    'alt' => 'Computer Screen',
                                    'date' => 'Posted on March 19, 2025',
                                    'title' => 'Complete machining of complex parts thanks to Y-axis.'
                                ],
                                [
                                    'image' => asset('newAssets/img/premiumpage/4.png'),
                                    'alt' => 'Payment Card',
                                    'date' => 'Posted on March 19, 2025',
                                    'title' => 'Complete machining of complex parts thanks to Y-axis.'
                                ],
                                [
                                    'image' => asset('newAssets/img/premiumpage/5.png'),
                                    'alt' => 'Abstract Shape',
                                    'date' => 'Posted on March 19, 2025',
                                    'title' => 'Complete machining of complex parts thanks to Y-axis.'
                                ],
                                [
                                    'image' => asset('newAssets/img/premiumpage/6.png'),
                                    'alt' => 'Sports Car',
                                    'date' => 'Posted on March 19, 2025',
                                    'title' => 'Complete machining of complex parts thanks to Y-axis.'
                                ]
                            ];
                            $dummyPost = $dummyPosts[$i];
                        ?>
                        <div class="col-md-4 mb-4">
                            <div class="post-card">
                                <img src="<?php echo e($dummyPost['image']); ?>" alt="<?php echo e($dummyPost['alt']); ?>" class="post-image">
                                <div class="post-content">
                                    <div class="post-date"><?php echo e($dummyPost['date']); ?></div>
                                    <div class="post-title"><?php echo e($dummyPost['title']); ?></div>
                                    <div class="post-interactions">
                                        <div class="interaction">
                                            <i class="far fa-heart"></i> 12k
                                        </div>
                                        <div class="interaction">
                                            <i class="far fa-comment"></i> 3.2k
                                        </div>
                                        <div class="interaction">
                                            <i class="far fa-bookmark"></i> 5.6k
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        <?php else: ?>
            <!-- Dummy Content if No Posts -->
            <div class="col-md-5">
                <div class="post-card-main featured-post-1">
                    <img src="<?php echo e(asset('newAssets/img/premiumpage/social/1.jpg')); ?>" alt="Skyscrapers" class="post-image-1">
                    <div class="post-content">
                        <div class="post-date">Posted on March 19, 2025</div>
                        <div class="post-title">Complete machining of complex parts thanks to Y-axis. 1000s of Mill-turned components machined on our DMG MORI CLX 350-V6.</div>
                        <div class="post-interactions">
                            <div class="interaction">
                                <i class="fas fa-heart text-danger"></i> 12k
                            </div>
                            <div class="interaction">
                                <i class="far fa-comment"></i> 3.2k
                            </div>
                            <!-- <div class="interaction">
                                <i class="far fa-bookmark"></i> 5.6k
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <h4 class="section-title">Posts</h4>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="post-card">
                            <img src="<?php echo e(asset('newAssets/img/premiumpage/social/1.jpg')); ?>" alt="Skyscrapers" class="post-image">
                            <div class="post-content">
                                <div class="post-date">Posted on March 19, 2025</div>
                                <div class="post-title">Complete machining of complex parts thanks to Y-axis.</div>
                                <div class="post-interactions">
                                    <div class="interaction">
                                        <i class="far fa-heart"></i> 12k
                                    </div>
                                    <div class="interaction">
                                        <i class="far fa-comment"></i> 3.2k
                                    </div>
                                    <!-- <div class="interaction">
                                        <i class="far fa-bookmark"></i> 5.6k
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="post-card">
                            <img src="<?php echo e(asset('newAssets/img/premiumpage/2.png')); ?>" alt="Payment Device" class="post-image">
                            <div class="post-content">
                                <div class="post-date">Posted on March 19, 2025</div>
                                <div class="post-title">Complete machining of complex parts thanks to Y-axis.</div>
                                <div class="post-interactions">
                                    <div class="interaction">
                                        <i class="far fa-heart"></i> 12k
                                    </div>
                                    <div class="interaction">
                                        <i class="far fa-comment"></i> 3.2k
                                    </div>
                                    <!-- <div class="interaction">
                                        <i class="far fa-bookmark"></i> 5.6k
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="post-card">
                            <img src="<?php echo e(asset('newAssets/img/premiumpage/3.png')); ?>" alt="Computer Screen" class="post-image">
                            <div class="post-content">
                                <div class="post-date">Posted on March 19, 2025</div>
                                <div class="post-title">Complete machining of complex parts thanks to Y-axis.</div>
                                <div class="post-interactions">
                                    <div class="interaction">
                                        <i class="far fa-heart"></i> 12k
                                    </div>
                                    <div class="interaction">
                                        <i class="far fa-comment"></i> 3.2k
                                    </div>
                                    <!-- <div class="interaction">
                                        <i class="far fa-bookmark"></i> 5.6k
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="post-card">
                            <img src="<?php echo e(asset('newAssets/img/premiumpage/4.png')); ?>" alt="Payment Card" class="post-image">
                            <div class="post-content">
                                <div class="post-date">Posted on March 19, 2025</div>
                                <div class="post-title">Complete machining of complex parts thanks to Y-axis.</div>
                                <div class="post-interactions">
                                    <div class="interaction">
                                        <i class="far fa-heart"></i> 12k
                                    </div>
                                    <div class="interaction">
                                        <i class="far fa-comment"></i> 3.2k
                                    </div>
                                    <!-- <div class="interaction">
                                        <i class="far fa-bookmark"></i> 5.6k
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="post-card">
                            <img src="<?php echo e(asset('newAssets/img/premiumpage/5.png')); ?>" alt="Abstract Shape" class="post-image">
                            <div class="post-content">
                                <div class="post-date">Posted on March 19, 2025</div>
                                <div class="post-title">Complete machining of complex parts thanks to Y-axis.</div>
                                <div class="post-interactions">
                                    <div class="interaction">
                                        <i class="far fa-heart"></i> 12k
                                    </div>
                                    <div class="interaction">
                                        <i class="far fa-comment"></i> 3.2k
                                    </div>
                                    <!-- <div class="interaction">
                                        <i class="far fa-bookmark"></i> 5.6k
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="post-card">
                            <img src="<?php echo e(asset('newAssets/img/premiumpage/6.png')); ?>" alt="Sports Car" class="post-image">
                            <div class="post-content">
                                <div class="post-date">Posted on March 19, 2025</div>
                                <div class="post-title">Complete machining of complex parts thanks to Y-axis.</div>
                                <div class="post-interactions">
                                    <div class="interaction">
                                        <i class="far fa-heart"></i> 12k
                                    </div>
                                    <div class="interaction">
                                        <i class="far fa-comment"></i> 3.2k
                                    </div>
                                    <!-- <div class="interaction">
                                        <i class="far fa-bookmark"></i> 5.6k
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>










<div class="container-fluid pie-charts-bg mt-5">
  <div class="row">
    <!-- Team Members Column -->
    <?php if(isset($premiumProfile->teamMembers) && count($premiumProfile->teamMembers) > 0): ?>
    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
      <div class="purple-bg">
        <h4 class="text-center mb-4">Team Members</h4>

        <div class="team-carousel">
          <!-- Fixed: Unique ID for dynamic carousel -->
          <div id="teamCarouselDynamic" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
              <?php $__currentLoopData = $premiumProfile->teamMembers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $teamMember): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="carousel-item carousel-team <?php echo e($index === 0 ? 'active' : ''); ?>">
                <div class="profile-pic">
                  <?php if(isset($teamMember->path)): ?>
                  <img loading="lazy" src="<?php echo e($teamMember->path); ?>" alt="Team member <?php echo e($index + 1); ?>" class="img-fluid rounded-circle">
                  <?php else: ?>
                  <img loading="lazy" src="<?php echo e(asset('assets/images/dashboard-12/user/7.png')); ?>" alt="Team member <?php echo e($index + 1); ?>" class="img-fluid">
                  <?php endif; ?>
                </div>
                <div class="team-member mt-3">
                  <h5><?php echo e($teamMember->userName ?? 'User Name'); ?></h5>
                  <p><?php echo e($teamMember->userRole ?? 'User Role'); ?></p>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <!-- Fixed: Proper Bootstrap carousel controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#teamCarouselDynamic" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#teamCarouselDynamic" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <?php else: ?>
    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
      <div class="purple-bg">
        <h4 class="text-center mb-4">Sample Team Members</h4>

        <div class="team-carousel">
          <!-- Fixed: Unique ID for sample carousel -->
          <div id="teamCarouselSample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
              <!-- Team Member 1 -->
              <div class="carousel-item carousel-team active">
                <div class="profile-pic">
                  <img loading="lazy" src="<?php echo e(asset('assets/images/dashboard-12/user/7.png')); ?>" alt="Team member 1" class="img-fluid">
                </div>
                <div class="team-member mt-3">
                  <h5>User Name</h5>
                  <p>Sample Description of the role.</p>
                </div>
              </div>

              <!-- Team Member 2 -->
              <div class="carousel-item carousel-team">
                <div class="profile-pic">
                  <img loading="lazy" src="<?php echo e(asset('assets/images/dashboard-12/user/4.png')); ?>" alt="Team member 2" class="img-fluid">
                </div>
                <div class="team-member mt-3">
                  <h5>User Name</h5>
                  <p>Sample Description of the role.</p>
                </div>
              </div>

              <!-- Team Member 3 -->
              <div class="carousel-item carousel-team">
                <div class="profile-pic">
                  <img loading="lazy" src="<?php echo e(asset('assets/images/dashboard-12/user/8.png')); ?>" alt="Team member 3" class="img-fluid">
                </div>
                <div class="team-member mt-3">
                  <h5>User Name</h5>
                  <p>Sample Description of the role.</p>
                </div>
              </div>
            </div>

            <!-- Fixed: Proper Bootstrap carousel controls -->
            <button class="carousel-control-prev team-prev" type="button" data-bs-target="#teamCarouselSample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next team-next" type="button" data-bs-target="#teamCarouselSample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>

    <!-- Performance Metrics Column -->
    <?php if(isset($premiumprofile->performancemetricsdata)): ?>
    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
      <div class="purple-bg">
        <h4 class="mb-4">Performance Metrics</h4>

        <div class="performance-card">
          <div class="chart-container">
            <canvas id="performanceChart"></canvas>
          </div>

          <div class="metric-rows mt-4">
            <div class="metric-row">
              <span><span class="color-dot blue-dot"></span> Project Overview</span>
              <span>60%</span>
            </div>
            <div class="metric-row">
              <span><span class="color-dot orange-dot"></span> Delivery Time</span>
              <span>25%</span>
            </div>
            <div class="metric-row">
              <span><span class="color-dot green-dot"></span> Response Time</span>
              <span>75%</span>
            </div>
            <div class="metric-row">
              <span><span class="color-dot purple-dot"></span> Page Visits</span>
              <span>40%</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php else: ?>
    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
      <div class="purple-bg">
        <h4 class="mb-4">Performance Metrics</h4>

        <div class="performance-card">
          <div class="chart-container chat-dummy">
            <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/premiumdefault/p2.png')); ?>" alt="" style="width: 128px;">
          </div>

          <div class="metric-rows mt-4">
            <div class="metric-row">
              <span><span class="color-dot blue-dot"></span> Project Overview</span>
              <span>0%</span>
            </div>
            <div class="metric-row">
              <span><span class="color-dot orange-dot"></span> Delivery Time</span>
              <span>0%</span>
            </div>
            <div class="metric-row">
              <span><span class="color-dot green-dot"></span> Response Time</span>
              <span>0%</span>
            </div>
            <div class="metric-row">
              <span><span class="color-dot purple-dot"></span> Page Visits</span>
              <span>0%</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>

    <!-- Video/Image Column -->
    <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
      <div class="video-container position-relative">
        <!-- HTML5 Video Element -->
        <video autoplay muted loop>
          <!-- Sample video sources -->
          <?php if(isset($premiumProfile->path )): ?>
          <source src="<?php echo e($premiumProfile->path); ?>" type="video/mp4">
          <?php else: ?>
          <source src="<?php echo e(asset('newAssets/img/premiumpage/herovideo.mp4')); ?>" type="video/mp4">
          <?php endif; ?>

          <!-- Fallback message for browsers that don't support video -->
          Your browser does not support the video tag.
        </video>
      </div>
    </div>
  </div>
</div>






<div class="container-fluid capabilities-section">
  <div class="row">
    <!-- Reviews Column -->
    <?php if(isset($premiumprofile->imaage)): ?>
    <div class="col-lg-6">
      <div class="reviews-section">
        <h2 class="section-title">Reviews</h2>
        <div class="carousel-controls-reviews">
          <button class="carousel-control-review prev" id="reviewsPrevBtn">
            <i class="fas fa-chevron-left"></i>
          </button>
          <button class="carousel-control-review  next" id="reviewsNextBtn">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>
        <div id="reviewsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
          <div class="carousel-inner">
            <!-- Carousel Item 1 (First 4 cards) -->
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="review-card">
                    <div class="review-header">
                      <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/Logo2.png')); ?>" alt="Albon Engineering" class="review-logo">
                      <div>
                        <div><strong>Albon Engineering</strong></div>
                        <div style="color:#727272">Posted on March 19, 2025</div>
                      </div>
                    </div>
                    <p>Complete machining of complex parts thanks to Y-axis. 000s of Mill-turned components machined on our DMG MORI CLX 350-V6... <a href="#">Read more</a></p>
                    <div class="rating">1.6 ★★★★★</div>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="review-card">
                    <div class="review-header">
                      <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/Logo2.png')); ?>" alt="Albon Engineering" class="review-logo">
                      <div>
                        <div><strong>Albon Engineering</strong></div>
                        <div style="color:#727272">Posted on March 19, 2025</div>
                      </div>
                    </div>
                    <p>Complete machining of complex parts thanks to Y-axis. 1000s of Mill-turned components machined on our DMG MORI CLX 350-V6... <a href="#">Read more</a></p>
                    <div class="rating">4.6 ★★★★★</div>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="review-card">
                    <div class="review-header">
                      <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/Logo2.png')); ?>" alt="Albon Engineering" class="review-logo">
                      <div>
                        <div><strong>Albon Engineering</strong></div>
                        <div style="color:#727272">Posted on March 19, 2025</div>
                      </div>
                    </div>
                    <p>Complete machining of complex parts thanks to Y-axis. 000s of Mill-turned components machined on our DMG MORI CLX 350-V6... <a href="#">Read more</a></p>
                    <div class="rating">1.3 ★★★★★</div>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="review-card">
                    <div class="review-header">
                      <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/Logo2.png')); ?>" alt="Albon Engineering" class="review-logo">
                      <div>
                        <div><strong>Albon Engineering</strong></div>
                        <div style="color:#727272">Posted on March 19, 2025</div>
                      </div>
                    </div>
                    <p>Complete machining of complex parts thanks to Y-axis. 1000s of Mill-turned components machined on our DMG MORI CLX 350-V6... <a href="#">Read more</a></p>
                    <div class="rating">4.3 ★★★★★</div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Carousel Item 2 (Next 4 cards) -->
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="review-card">
                    <div class="review-header">
                      <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/Logo2.png')); ?>" alt="Albon Engineering" class="review-logo">
                      <div>
                        <div><strong>Albon Engineering</strong></div>
                        <div style="color:#727272">Posted on March 19, 2025</div>
                      </div>
                    </div>
                    <p>Complete machining of complex parts thanks to Y-axis. 000s of Mill-turned components machined on our DMG MORI CLX 350-V6... <a href="#">Read more</a></p>
                    <div class="rating">2.5 ★★★★★</div>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="review-card">
                    <div class="review-header">
                      <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/Logo2.png')); ?>" alt="Albon Engineering" class="review-logo">
                      <div>
                        <div><strong>Albon Engineering</strong></div>
                        <div style="color:#727272">Posted on March 19, 2025</div>
                      </div>
                    </div>
                    <p>Complete machining of complex parts thanks to Y-axis. 1000s of Mill-turned components machined on our DMG MORI CLX 350-V6... <a href="#">Read more</a></p>
                    <div class="rating">3.8 ★★★★★</div>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="review-card">
                    <div class="review-header">
                      <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/Logo2.png')); ?>" alt="Albon Engineering" class="review-logo">
                      <div>
                        <div><strong>Albon Engineering</strong></div>
                        <div style="color:#727272">Posted on March 19, 2025</div>
                      </div>
                    </div>
                    <p>Complete machining of complex parts thanks to Y-axis. 000s of Mill-turned components machined on our DMG MORI CLX 350-V6... <a href="#">Read more</a></p>
                    <div class="rating">1.9 ★★★★★</div>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="review-card">
                    <div class="review-header">
                      <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/Logo2.png')); ?>" alt="Albon Engineering" class="review-logo">
                      <div>
                        <div><strong>Albon Engineering</strong></div>
                        <div style="color:#727272">Posted on March 19, 2025</div>
                      </div>
                    </div>
                    <p>Complete machining of complex parts thanks to Y-axis. 1000s of Mill-turned components machined on our DMG MORI CLX 350-V6... <a href="#">Read more</a></p>
                    <div class="rating">4.1 ★★★★★</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php else: ?>
    <div class="col-lg-6">
      <div class="reviews-section">
        <h2 class="section-title">Reviews</h2>
        <div class="carousel-controls-reviews">
          <button class="carousel-control-review prev" id="reviewsPrevBtn">
            <i class="fas fa-chevron-left"></i>
          </button>
          <button class="carousel-control-review  next" id="reviewsNextBtn">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>
        <div id="reviewsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
          <div class="carousel-inner">
            <!-- Carousel Item 1 (First 4 cards) -->
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-12 mb-4">
                  <div class="review-card review-card-dummy">
                    <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/premiumdefault/p3.png')); ?>" alt="Albon Engineering" class="review-dum-img">
                    <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/premiumdefault/p4.png')); ?>" alt="Albon Engineering" class="review-dum-img2">
                    <p class="rev-1" style="margin-bottom: 0px;text-align:center;margin-top: 20px;color:#a3a3a3">Customers haven’t left any reviews for this supplier.</p>
                    <p class="rev-1" style="margin-bottom: 0px;text-align:center">Once they do, you’ll see them here!</p>
                    <!-- <div class="review-header">
                         
                          <div>
                            <div><strong>Albon Engineering</strong></div>
                            <div style="color:#727272">Posted on March 19, 2025</div>
                          </div>
                        </div>
                        <p>Complete machining of complex parts thanks to Y-axis. 000s of Mill-turned components machined on our DMG MORI CLX 350-V6... <a href="#">Read more</a></p>
                        <div class="rating">1.6 ★★★★★</div> -->
                  </div>
                </div>
              </div>
            </div>
            <!-- Carousel Item 2 (Next 4 cards) -->
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-12 mb-4">
                  <div class="review-card review-card-dummy">
                    <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/premiumdefault/p3.png')); ?>" alt="Albon Engineering" class="review-dum-img">
                    <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/premiumdefault/p4.png')); ?>" alt="Albon Engineering" class="review-dum-img2">
                    <p class="rev-1" style="margin-bottom: 0px;text-align:center;margin-top: 20px;">Customers haven’t left any reviews for this supplier.</p>
                    <p class="rev-1" style="margin-bottom: 0px;text-align:center;">Once they do, you’ll see them here!</p>
                    <!-- <div class="review-header">
                         
                          <div>
                            <div><strong>Albon Engineering</strong></div>
                            <div style="color:#727272">Posted on March 19, 2025</div>
                          </div>
                        </div>
                        <p>Complete machining of complex parts thanks to Y-axis. 000s of Mill-turned components machined on our DMG MORI CLX 350-V6... <a href="#">Read more</a></p>
                        <div class="rating">1.6 ★★★★★</div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>

    <!-- Awards Column -->
    <?php if(isset($premiumprofile->imaage)): ?>
    <div class="col-lg-6">
      <div class="awards-section">
        <h2 class="section-title">Awards</h2>
        <div class="carousel-controls-awards">
          <button class="carousel-control-review  prev" id="awardsPrevBtn">
            <i class="fas fa-chevron-left"></i>
          </button>
          <button class="carousel-control-review  next" id="awardsNextBtn">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>
        <div id="awardsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
          <div class="carousel-inner">
            <!-- Carousel Item 1 -->
            <div class="carousel-item active">
              <div class="carousel-card-award">
                <div class="carousel-image-award">
                  <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/Certificate.png')); ?>" alt="Quality Control">
                </div>
                <div class="carousel-content-last">
                  <div>
                    <h2 class="carousel-head-1-award">Award Title</h2>
                    <p>Complete machining of complex parts thanks to Y-axis. 1000s of Mill-turned components machined on our DMG MORI CLX 350-V6…</p>
                  </div>

                </div>
              </div>
            </div>
            <!-- Carousel Item 2 -->
            <div class="carousel-item">
              <div class="carousel-card-award">
                <div class="carousel-image-award">
                  <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/Certificate.png')); ?>" alt="Quality Control">
                </div>
                <div class="carousel-content-last">
                  <div>
                    <h2 class="carousel-head-1-award">Award Title</h2>
                    <p>Complete machining of complex parts thanks to Y-axis. 1000s of Mill-turned components machined on our DMG MORI CLX 350-V6…</p>
                  </div>

                </div>
              </div>
            </div>
            <!-- Carousel Item 3 -->
            <div class="carousel-item">
              <div class="carousel-card-award">
                <div class="carousel-image-award">
                  <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/Certificate.png')); ?>" alt="Quality Control">
                </div>
                <div class="carousel-content-last">
                  <div>
                    <h2 class="carousel-head-1-award">Award Title</h2>
                    <p>Complete machining of complex parts thanks to Y-axis. 1000s of Mill-turned components machined on our DMG MORI CLX 350-V6…</p>
                  </div>

                </div>
              </div>
            </div>
            <!-- Carousel Item 4 -->
            <div class="carousel-item">
              <div class="carousel-card-award">
                <div class="carousel-image-award">
                  <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/Certificate.png')); ?>" alt="Engineering Design">
                </div>
                <div class="carousel-content-last">
                  <div>
                    <h2 class="carousel-head-1-award">Award Title</h2>
                    <p>Complete machining of complex parts thanks to Y-axis. 1000s of Mill-turned components machined on our DMG MORI CLX 350-V6…</p>
                  </div>
                </div>

              </div>
            </div>
            <!-- Carousel Item 5 -->
            <div class="carousel-item">
              <div class="carousel-card-award">
                <div class="carousel-image-award">
                  <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/Certificate.png')); ?>" alt="Quality Control">
                </div>
                <div class="carousel-content-last">
                  <div>
                    <h2 class="carousel-head-1-award">Award Title</h2>
                    <p>Complete machining of complex parts thanks to Y-axis. 1000s of Mill-turned components machined on our DMG MORI CLX 350-V6…</p>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php else: ?>
    <div class="col-lg-6">
      <div class="awards-section">
        <h2 class="section-title">Awards</h2>
        <div class="carousel-controls-awards">
          <button class="carousel-control-review  prev" id="awardsPrevBtn">
            <i class="fas fa-chevron-left"></i>
          </button>
          <button class="carousel-control-review  next" id="awardsNextBtn">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>
        <div id="awardsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
          <div class="carousel-inner">
            <!-- Carousel Item 1 -->
            <div class="carousel-item active">
              <div class="carousel-card-award carousel-card-award-dummy">
                <div class="carousel-image-award carousel-image-award-dummy">
                  <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/premiumdefault/p7.png')); ?>" alt="Quality Control">
                </div>

              </div>
            </div>
            <!-- Carousel Item 2 -->
            <div class="carousel-item">
              <div class="carousel-card-award carousel-card-award-dummy">
                <div class="carousel-image-award carousel-image-award-dummy">
                  <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/premiumdefault/p7.png')); ?>" alt="Quality Control">
                </div>
              </div>
            </div>
            <!-- Carousel Item 3 -->

            <!-- Carousel Item 4 -->

            <!-- Carousel Item 5 -->

          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
  </div>
</div>

<?php endif; ?>

<?php if(isset($premiumProfile->companyDetails)): ?>
<section class="footer-bg">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">


        <div class="footer-content">
          <div class="contact-info">
            <h3 style="text-align: center;">Contact:</h3>
            <p><i class="fas fa-map-marker-alt"></i><?php echo e($premiumProfile->companyDetails->address ?? 'Sample Address of the company'); ?></p>
            <p><i class="fas fa-phone"></i><?php echo e($premiumProfile->companyDetails->contactNumber ?? '0000000'); ?></p>
            <p><i class="fas fa-envelope"></i> <?php echo e($premiumProfile->companyDetails->email ?? 'example@gmail.com'); ?></p>
            <p><i class="fas fa-globe"></i> <?php echo e($premiumProfile->companyDetails->website ?? 'www.example.com'); ?></p>
          </div>
          <div class="social-media-footer" style="text-align: center;">
            <a href="<?php echo e($premiumProfile->facebookurl ?? 'https://www.facebook.com'); ?>" target="_blank" style="    margin-right: 10px;">
              <div class="social-icons"><img loading="lazy"
                  src="<?php echo e(asset('assets/images/dashboard-5/social/1.png')); ?>"
                  alt="facebook icon"></div>
            </a>
            <a href="<?php echo e($premiumProfile->instagramUrl ?? 'https://www.instagram.com'); ?>" target="_blank" style="    margin-right: 10px;">
              <div class="social-icons"><img loading="lazy"
                  src="<?php echo e(asset('assets/images/dashboard-5/social/2.png')); ?>"
                  alt="facebook icon"></div>
            </a>
            <a href="<?php echo e($premiumProfile->youtubeUrl ?? 'https://www.youtube.com'); ?>" target="_blank" style="    margin-right: 10px;">
              <div class="social-icons"><img loading="lazy"
                  src="<?php echo e(asset('assets/images/dashboard-5/social/4.png')); ?>"
                  alt="facebook icon"></div>
            </a>
            <a href="<?php echo e($premiumProfile->linkedInUrl ?? 'https://www.linkedin.com'); ?>" target="_blank" style="    margin-right: 10px;">
              <div class="social-icons"><img loading="lazy"
                  src="<?php echo e(asset('assets/images/dashboard-5/social/5.png')); ?>"
                  alt="facebook icon"></div>
            </a>

          </div>
        </div>




      </div>

    </div>
  </div>
</section>
<?php else: ?>
<section class="footer-bg footer-bg-dummy">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">


        <div class="footer-content footer-content-dummy">
          <div class="contact-info">
            <img loading="lazy"
              src="<?php echo e(asset('newAssets/img/premiumpage/premiumdefault/f2.png')); ?>"
              alt="facebook icon" style="width:24px">
            <h3 style="text-align: center;margin-top: 10px;margin-bottom: 10px;"><?php echo e($premiumprofile->imaage ?? 'Contact details not available'); ?></h3>
            <p><i class="fas fa-map-marker-alt"></i><?php echo e($premiumprofile->imaage ?? 'This supplier hasn’t provided any contact information yet.'); ?></p>
            <!-- <p><i class="fas fa-phone"></i> 0044 79610087</p>
            <p><i class="fas fa-envelope"></i> info@praxmarket.com</p>
            <p><i class="fas fa-globe"></i> praxmarket.com</p> -->
          </div>
          <div class="social-media-footer" style="text-align: center;">
            <a href="#" target="_blank" style="    margin-right: 10px;">
              <div class="social-icons"><img loading="lazy"
                  src="<?php echo e(asset('newAssets/img/premiumpage/premiumdefault/f1.png')); ?>"
                  alt="facebook icon" style="width:150px"></div>
            </a>


          </div>
        </div>




      </div>

    </div>
  </div>

</section>
<?php endif; ?>









<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
<script src="<?php echo e(asset('assets/js/counter/counter-custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/chart/apex-chart/apex-chart.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/chart/apex-chart/stock-prices.js')); ?>"></script>


<script src="<?php echo e(asset('assets/js/vector-map1/jsvectormap.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/vector-map1/world.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/vector-map1/custom-vectormap.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/dashboard/dashboard_5.js')); ?>"></script>

<!-- Image Slider Script -->
<script>
  $(document).ready(function() {
    // Auto-changing background images
    let currentImageIndex = 0;
    const bgImages = $('.hero-bg');
    const totalImages = bgImages.length;

    function changeBackground() {
      $(bgImages[currentImageIndex]).removeClass('active');
      currentImageIndex = (currentImageIndex + 1) % totalImages;
      $(bgImages[currentImageIndex]).addClass('active');
    }

    // Change background every 5 seconds
    setInterval(changeBackground, 1500);
  });
</script>



<!-- Carousel Script -->
<script>
  $(document).ready(function() {
    const carousel = $('#capabilitiesCarousel');
    const items = $('.carousel-item-wrapper');
    const totalItems = items.length;
    let currentIndex = totalItems; // Start at the first original item (after cloned prepend)
    let autoSlideInterval;
    let isTransitioning = false;

    // Clone items for infinite loop
    items.clone().addClass('cloned').prependTo(carousel);
    items.clone().addClass('cloned').appendTo(carousel);

    // Update total items including clones
    const allItems = $('.carousel-item-wrapper');
    const totalAllItems = allItems.length;

    // Set initial position to the first original item
    carousel.css('transform', `translateX(${-currentIndex * 100}%)`);

    // Update carousel position
    function updateCarousel(animate = true) {
      if (isTransitioning) return;
      isTransitioning = true;

      carousel.css({
        'transition': animate ? 'transform 0.5s ease-in-out' : 'none',
        'transform': `translateX(${-currentIndex * 100}%)`
      });

      // Handle seamless loop
      if (currentIndex >= totalItems * 2) {
        setTimeout(() => {
          carousel.css('transition', 'none');
          currentIndex = totalItems; // Reset to first original item
          carousel.css('transform', `translateX(${-currentIndex * 100}%)`);
          isTransitioning = false;
        }, 500); // Match transition duration
      } else if (currentIndex < totalItems) {
        setTimeout(() => {
          carousel.css('transition', 'none');
          currentIndex = totalItems + (currentIndex % totalItems); // Reset to last original item
          carousel.css('transform', `translateX(${-currentIndex * 100}%)`);
          isTransitioning = false;
        }, 500); // Match transition duration
      } else {
        isTransitioning = false;
      }
    }

    // Move to the next slide
    function nextSlide() {
      if (isTransitioning) return;
      currentIndex++;
      updateCarousel();
    }

    // Move to the previous slide
    function prevSlide() {
      if (isTransitioning) return;
      currentIndex--;
      updateCarousel();
    }

    // Start automatic sliding
    function startAutoSlide() {
      autoSlideInterval = setInterval(nextSlide, 4000); // Slide every 4 seconds
    }

    // Stop automatic sliding
    function stopAutoSlide() {
      clearInterval(autoSlideInterval);
    }

    // Next button click
    $('#nextBtn').click(function() {
      if (isTransitioning) return;
      stopAutoSlide();
      nextSlide();
      startAutoSlide();
    });

    // Previous button click
    $('#prevBtn').click(function() {
      if (isTransitioning) return;
      stopAutoSlide();
      prevSlide();
      startAutoSlide();
    });

    // Pause auto-slide on hover
    carousel.hover(
      function() {
        stopAutoSlide(); // Pause on hover
      },
      function() {
        startAutoSlide(); // Resume on hover out
      }
    );

    // Initialize carousel and start auto-sliding
    updateCarousel(false); // Initial position without animation
    startAutoSlide();

    // Handle transition end to ensure smooth looping
    carousel.on('transitionend', function() {
      if (currentIndex >= totalItems * 2 || currentIndex < totalItems) {
        updateCarousel(false); // Reset position without animation
      }
    });
  });
</script>



<script>
  // Utility functions for transparency
  const Utils = {
    transparentize: (color, opacity) => {
      // Convert hex to rgba
      if (color.startsWith('#')) {
        const r = parseInt(color.slice(1, 3), 16);
        const g = parseInt(color.slice(3, 5), 16);
        const b = parseInt(color.slice(5, 7), 16);
        return `rgba(${r}, ${g}, ${b}, ${opacity})`;
      }
      return color;
    }
  };

  function colorize(opaque, hover, ctx) {
    const v = ctx.parsed;
    const c = v < -50 ? '#D60000' :
      v < 0 ? '#F46300' :
      v < 50 ? '#0358B6' :
      '#44DE28';
    const opacity = hover ? 1 - Math.abs(v / 150) - 0.2 : 1 - Math.abs(v / 150);
    return opaque ? c : Utils.transparentize(c, opacity);
  }

  function hoverColorize(ctx) {
    return colorize(false, true, ctx);
  }



  // Chart data
  const data = {
    labels: ['Project Overview', 'Delivery Time', 'Response Time', 'Page Visits'],
    datasets: [{
      data: [60, 25, 75, 40],
      backgroundColor: [
        '#4285F4',
        '#F4B400',
        '#44DE28',
        '#0F9D58'
      ],
      hoverBackgroundColor: [
        Utils.transparentize('#4285F4', 0.8),
        Utils.transparentize('#F4B400', 0.8),
        Utils.transparentize('#44DE28', 0.8),
        Utils.transparentize('#0F9D58', 0.8)
      ],
      borderWidth: 1
    }]
  };

  // Chart configuration
  const config = {
    type: 'pie',
    data: data,
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false
        },
        tooltip: {
          enabled: false
        }
      }
    }
  };

  // Create chart
  const ctx = document.getElementById('performanceChart').getContext('2d');
  new Chart(ctx, config);
</script>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Reviews Carousel
  const reviewsCarousel = document.querySelector('#reviewsCarousel');
  const reviewsPrevBtn = document.querySelector('#reviewsPrevBtn');
  const reviewsNextBtn = document.querySelector('#reviewsNextBtn');

  reviewsPrevBtn.addEventListener('click', () => {
    bootstrap.Carousel.getOrCreateInstance(reviewsCarousel).prev();
  });

  reviewsNextBtn.addEventListener('click', () => {
    bootstrap.Carousel.getOrCreateInstance(reviewsCarousel).next();
  });

  // Awards Carousel
  const awardsCarousel = document.querySelector('#awardsCarousel');
  const awardsPrevBtn = document.querySelector('#awardsPrevBtn');
  const awardsNextBtn = document.querySelector('#awardsNextBtn');

  awardsPrevBtn.addEventListener('click', () => {
    bootstrap.Carousel.getOrCreateInstance(awardsCarousel).prev();
  });

  awardsNextBtn.addEventListener('click', () => {
    bootstrap.Carousel.getOrCreateInstance(awardsCarousel).next();
  });
</script>

<script>
        // JavaScript to handle the send button click
        function sendMessage() {
        const message = document.getElementById('message').value;
        if (message.trim() === '') {
          alert('Please enter a message.');
          return;
        }
        // Add your logic to handle the message (e.g., send to server)
        console.log('Message sent:', message);
        // Clear the textarea
        document.getElementById('message').value = '';
        // Close the modal
        const modal = bootstrap.Modal.getInstance(document.getElementById('supplierModal'));
        modal.hide();
      }
      </script>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('appLayouts.simple.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/premiumprofile/premiumprofilepage.blade.php ENDPATH**/ ?>