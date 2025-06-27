<?php $__env->startSection('content'); ?>

<?php $__env->startSection('main_content'); ?>

<head>
    <link rel="stylesheet" href="<?php echo e(url('css/app.css')); ?>">
</head>
<style>
    .header-dashboard {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 20px;
        /* background-color: white; */
        border-bottom: 1px solid #eee;
    }

    .header-dashboard h1 {
        font-size: 18px;
        font-weight: 600;
        margin: 0;
    }

    .controls-dashboard {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .pagination-dashboard {
        color: #666;
        font-size: 14px;
    }

    .view-controls a {
        color: #333;
        margin: 0 5px;
        text-decoration: none;
    }

    .filter-btn-dashboard {
        background-color: white;
        border: 1px solid #ddd;
        border-radius: 20px;
        padding: 6px 15px;
        display: flex;
        align-items: center;
        gap: 5px;
        cursor: pointer;
        position: relative;
    }

    .company-card-dashboard {
        border: 1px solid #eee;
        border-radius: 8px;
        overflow: hidden;
        margin-bottom: 20px;
        background-color: white;
        position: relative;
    }

    .company-img-dashboard {
        height: 150px;
        width: 100%;
        object-fit: cover;
    }

    .company-info-dashboard {
        padding: 15px;
    }

    .company-name-dashboard {
        font-weight: 600;
        font-size: 16px;
        margin-bottom: 10px;
    }

    .rating-dashboard {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .star-dashboard {
        color: gold;
        font-size: 14px;
    }

    .location-badge-dashboard {
        position: absolute;
        top: 10px;
        left: 10px;
        background-color: white;
        padding: 3px 8px;
        border-radius: 15px;
        font-size: 12px;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .favorite-dashboard {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: white;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    .availability-dashboard {
        padding: 3px 10px;
        border-radius: 15px;
        font-size: 12px;
    }

    .available-dashboard {
        border: 1px solid #4CAF50;
        color: #4CAF50;
    }

    .weeks-dashboard {
        border: 1px solid #2196F3;
        color: #2196F3;
    }

    .months-dashboard {
        border: 1px solid #FF9800;
        color: #FF9800;
    }

    /* Filter panel */
    .filter-panel-dashboard {
        position: fixed;
        top: 0;
        right: -350px;
        width: 350px;
        height: 100vh;
        background-color: white;
        box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        padding: 20px;
        transition: right 0.3s ease;
        overflow-y: auto;
    }

    .filter-panel-dashboard.show {
        right: 0;
    }

    .filter-header-dashboard {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .filter-section-dashboard {
        margin-bottom: 20px;
    }

    .filter-section-dashboard h3 {
        font-size: 16px;
        margin-bottom: 15px;
    }

    .filter-tag {
        background-color: #f5f5f5;
        border-radius: 20px;
        padding: 3px 9px;
        font-size: 12px;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .filter-tag i {
        margin-right: 5px;
    }

    .filter-actions {
        display: flex;
        gap: 10px;
        margin-top: 20px;
    }

    .btn-clear-dashboard {
        flex: 1;
        background-color: white;
        border: 1px solid #ddd;
        border-radius: 20px;
        padding: 8px;
    }

    .btn-apply-dashboard {
        flex: 1;
        background-color: #673AB7;
        color: white;
        border: none;
        border-radius: 20px;
        padding: 8px;
    }

    .view-more-dashboard {
        text-align: center;
        margin: 20px 0;
    }

    .view-more-dashboard button {
        background-color: white;
        border: 1px solid #ddd;
        border-radius: 20px;
        padding: 8px 20px;
    }

    .filter-btn {
        background-color: #f0f0f0;
        border: 1px solid #ddd;
        border-radius: 20px;
        padding: 8px 20px;
        display: flex;
        align-items: center;
        gap: 8px;
        cursor: pointer;
    }

    .filter-card {
        position: absolute;
        right: 0;
        top: 60px;
        width: 350px;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        z-index: 100;
        display: none;
    }

    .filter-card.active {
        display: block;
    }

    .filter-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 20px;
        border-bottom: 1px solid #eee;
    }

    .filter-header h2 {
        margin: 0;
        font-size: 18px;
    }

    .btn-close {
        background: none;
        border: none;
        font-size: 20px;
        cursor: pointer;
        color: #666;
    }

    .filter-section {
        padding: 15px 20px;
        border-bottom: 1px solid #eee;
    }

    .filter-section h3 {
        margin: 0 0 10px 0;
        font-size: 16px;
        color: #333;
    }

    .filter-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }


    .filter-tag:hover {
        background-color: #e9e9e9;
    }

    .filter-tag i {
        color: #673AB7;
        font-size: 12px;
    }

    .filter-actions {
        display: flex;
        justify-content: space-between;
        padding: 15px 20px;
    }

    .btn-clear {
        background-color: white;
        border: 1px solid #ddd;
        border-radius: 20px;
        padding: 8px 20px;
        font-size: 14px;
        cursor: pointer;
    }

    .btn-apply {
        background-color: #673AB7;
        color: white;
        border: none;
        border-radius: 20px;
        padding: 8px 20px;
        font-size: 14px;
        cursor: pointer;
    }





    /* Map Container */
    .header-map {

        background-color: #7C3AED;
        color: white;
        padding: 15px;
        text-align: center;
        z-index: 100;
    }

    .header-map h5 {
        color: #fff;
    }

    .search-panel {
        background-color: white;
        padding: 15px;
        height: 100%;
        overflow-y: auto;
    }

    iframe {
        width: 100%;
        height: 100%;
        border: 0;
    }

    .search-input-map {
        position: relative;
        margin-bottom: 20px;
    }

    .search-input-map input {
        width: 100%;
        padding: 10px 15px 10px 40px;
        border: 1px solid #ddd;
        border-radius: 25px;
        font-size: 14px;
    }

    .search-input-map i {
        position: absolute;
        left: 15px;
        top: 12px;
        color: #666;
    }

    .location-list {
        max-height: calc(100% - 100px);
        overflow-y: auto;
    }

    .location-item {
        background-color: white;
        /* border-radius: 10px; */
        margin-bottom: 15px;
        overflow: hidden;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        border: 1px solid black;
        padding: 10px;

    }

    .location-number {
        width: 36px;
        height: 36px;
        background-color: #7C3AED;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        border-radius: 5px;
        margin-right: 15px;
    }

    .location-details {
        padding: 15px;
        border-bottom: 1px solid #f1f1f1;
    }

    .location-name {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .location-address {
        font-size: 14px;
        color: #555;
    }

    .view-btn {
        background-color: #7C3AED;
        color: white;
        width: 100%;
        padding: 10px;
        border: none;
        text-align: center;
        font-weight: 500;
    }

    @media (max-width: 991px) {
        .row {
            height: auto;
        }

        .col-lg-4,
        .col-lg-8 {
            height: auto;
        }

        .search-panel {
            height: auto;
            max-height: 50vh;
        }

        iframe {
            height: 50vh;
        }
    }

    /* List Cards */


    /* .list-header {
            background-color: #fff;
            border-bottom: 1px solid #eee;
            font-weight: 600;
            padding: 15px 0;
            margin-bottom: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        
        .list-item {
            background-color: white;
            border-radius: 0;
            border: none;
            border-bottom: 1px solid #eee;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            margin-bottom: 10px;
            transition: all 0.2s ease;
        }
        
        .list-item:hover {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .list-item .row {
            align-items: center;
            padding: 15px 0;
        }
        
        .company-logo {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: #eaeaea;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 8px;
            overflow: hidden;
        }
        
        .company-logo img {
            max-width: 100%;
            max-height: 100%;
        }
        
        .company-name {
            display: flex;
            align-items: center;
        }
        
        .serial-number {
            font-weight: 600;
            color: #555;
        }
        
        .star-filled {
            color: #FFD700;
        }
        
        .star-empty {
            color: #e0e0e0;
        }
        
        .badge-available {
            background-color: #e1ffeb;
            color: #00a845;
            border-radius: 4px;
            padding: 6px 12px;
            font-weight: 400;
            display: inline-block;
        }
        
        .badge-months {
            background-color: #fff2e6;
            color: #ff8c00;
            border-radius: 4px;
            padding: 6px 12px;
            font-weight: 400;
            display: inline-block;
        }
        
        .badge-weeks {
            background-color: #e6f3ff;
            color: #0074cc;
            border-radius: 4px;
            padding: 6px 12px;
            font-weight: 400;
            display: inline-block;
        }
        
        .btn-view-profile {
            background-color: #7b5dfa;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 6px 12px;
            width: 100%;
        }
        
        .btn-view-profile:hover {
            background-color: #6a4ae8;
            color: white;
        }
        
        .btn-more {
            background-color: white;
            color: #333;
            border: 1px solid #ddd;
            border-radius: 20px;
            padding: 6px 16px;
            margin: 20px auto;
            display: block;
        }
        
        .category-text, .distance-text {
            color: #555;
        }
        
       
        @media (max-width: 767px) {
            .list-item .row > div {
                margin-bottom: 10px;
            }
            .company-name {
                font-size: 14px;
            }
        } */
</style>
</style>

<main>
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Dashboard </h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"> <svg class="stroke-icon">
                                    <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-home')); ?>"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="header-dashboard mb-4">
            <h1>Local companies near you</h1>
            <div class="controls-dashboard">
                <div class="pagination-dashboard">Showing: 10 of 100</div>
                <div class="view-controls-dashboard">
                    <a href="#"><i class="fas fa-chevron-left"></i></a>
                    <a href="#"><i class="fas fa-chevron-right"></i></a>
                    <a href="#"><i class="fas fa-list" style="margin-left: 10px;"></i></a>
                </div>
                <button class="filter-btn" id="filterBtn">
                    <i class="fas fa-filter"></i> Filter
                </button>

            </div>
        </div>

        <div class="row">
            <!-- First row of companies -->
            <div class="col-md-3">
                <div class="company-card-dashboard">
                    <div class="location-badge-dashboard">
                        <i class="fas fa-map-marker-alt"></i> 1.2 km
                    </div>
                    <div class="favorite-dashboard">
                        <i class="far fa-heart"></i>
                    </div>
                    <img src="<?php echo e(asset('newAssets/img/dashboard/1.jpg')); ?>" alt="Prax Engineering" class="company-img-dashboard">
                    <div class="company-info-dashboard">
                        <div class="company-name-dashboard">Prax Engineering Ltd</div>
                        <div class="d-flex justify-content-between">
                            <div class="rating-dashboard">
                                <div class="star-dashboard"><i class="fas fa-star"></i> 4.8</div>
                            </div>
                            <div class="availability-dashboard available-dashboard">Available</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="company-card-dashboard">
                    <div class="location-badge-dashboard">
                        <i class="fas fa-map-marker-alt"></i> 2.6 km
                    </div>
                    <div class="favorite-dashboard">
                        <i class="far fa-heart"></i>
                    </div>
                    <img src="<?php echo e(asset('newAssets/img/dashboard/2.jpg')); ?>" alt="A-Tek Engineering" class="company-img-dashboard">
                    <div class="company-info-dashboard">
                        <div class="company-name-dashboard">A-Tek Engineering Limited</div>
                        <div class="d-flex justify-content-between">
                            <div class="rating-dashboard">
                                <div class="star-dashboard"><i class="fas fa-star"></i> 4.2</div>
                            </div>
                            <div class="availability-dashboard weeks-dashboard">4-6 weeks</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="company-card-dashboard">
                    <div class="location-badge-dashboard">
                        <i class="fas fa-map-marker-alt"></i> 9 km
                    </div>
                    <div class="favorite-dashboard">
                        <i class="far fa-heart"></i>
                    </div>
                    <img src="<?php echo e(asset('newAssets/img/dashboard/3.jpg')); ?>" alt="Hereford Engineering" class="company-img-dashboard">
                    <div class="company-info-dashboard">
                        <div class="company-name-dashboard">Hereford Engineering Ltd (DEMO)</div>
                        <div class="d-flex justify-content-between">
                            <div class="rating-dashboard">
                                <div class="star-dashboard"><i class="fas fa-star"></i> 3.9</div>
                            </div>
                            <div class="availability-dashboard months-dashboard">2-3 months</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="company-card-dashboard">
                    <div class="location-badge-dashboard">
                        <i class="fas fa-map-marker-alt"></i> 800 m
                    </div>
                    <div class="favorite-dashboard">
                        <i class="fas fa-heart" style="color: orange;"></i>
                    </div>
                    <img src="<?php echo e(asset('newAssets/img/dashboard/4.jpg')); ?>" alt="Dyfed Precision" class="company-img-dashboard">
                    <div class="company-info-dashboard">
                        <div class="company-name-dashboard">Dyfed Precision Pvt Ltd (DEMO)</div>
                        <div class="d-flex justify-content-between">
                            <div class="rating-dashboard">
                                <div class="star-dashboard"><i class="fas fa-star"></i> 4.3</div>
                            </div>
                            <div class="availability-dashboard available-dashboard">Available</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Second row of companies - duplicated for demonstration -->
            <div class="col-md-3">
                <div class="company-card-dashboard">
                    <div class="location-badge-dashboard">
                        <i class="fas fa-map-marker-alt"></i> 9 km
                    </div>
                    <div class="favorite-dashboard">
                        <i class="far fa-heart"></i>
                    </div>
                    <img src="<?php echo e(asset('newAssets/img/dashboard/5.jpg')); ?>" alt="Hereford Engineering" class="company-img-dashboard">
                    <div class="company-info-dashboard">
                        <div class="company-name-dashboard">Hereford Engineering Ltd (DEMO)</div>
                        <div class="d-flex justify-content-between">
                            <div class="rating-dashboard">
                                <div class="star-dashboard"><i class="fas fa-star"></i> 3.9</div>
                            </div>
                            <div class="availability-dashboard months-dashboard">2-3 months</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="company-card-dashboard">
                    <div class="location-badge-dashboard">
                        <i class="fas fa-map-marker-alt"></i> 800 m
                    </div>
                    <div class="favorite-dashboard">
                        <i class="far fa-heart"></i>
                    </div>
                    <img src="<?php echo e(asset('newAssets/img/dashboard/1.jpg')); ?>" alt="Dyfed Precision" class="company-img-dashboard">
                    <div class="company-info-dashboard">
                        <div class="company-name-dashboard">Dyfed Precision Pvt Ltd (DEMO)</div>
                        <div class="d-flex justify-content-between">
                            <div class="rating-dashboard">
                                <div class="star-dashboard"><i class="fas fa-star"></i> 4.3</div>
                            </div>
                            <div class="availability-dashboard available-dashboard">Available</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="company-card-dashboard">
                    <div class="location-badge-dashboard">
                        <i class="fas fa-map-marker-alt"></i> 1.2 km
                    </div>
                    <div class="favorite-dashboard">
                        <i class="fas fa-heart" style="color: orange;"></i>
                    </div>
                    <img src="<?php echo e(asset('newAssets/img/dashboard/3.jpg')); ?>" alt="Prax Engineering" class="company-img-dashboard">
                    <div class="company-info-dashboard">
                        <div class="company-name-dashboard">Prax Engineering Ltd</div>
                        <div class="d-flex justify-content-between">
                            <div class="rating-dashboard">
                                <div class="star-dashboard"><i class="fas fa-star"></i> 4.8</div>
                            </div>
                            <div class="availability-dashboard available-dashboard">Available</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="company-card-dashboard">
                    <div class="location-badge-dashboard">
                        <i class="fas fa-map-marker-alt"></i> 2.6 km
                    </div>
                    <div class="favorite-dashboard">
                        <i class="far fa-heart"></i>
                    </div>
                    <img src="<?php echo e(asset('newAssets/img/dashboard/2.jpg')); ?>" alt="A-Tek Engineering" class="company-img-dashboard">
                    <div class="company-info-dashboard">
                        <div class="company-name-dashboard">A-Tek Engineering Limited</div>
                        <div class="d-flex justify-content-between">
                            <div class="rating-dashboard">
                                <div class="star-dashboard"><i class="fas fa-star"></i> 4.2</div>
                            </div>
                            <div class="availability-dashboard weeks-dashboard">4-6 weeks</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="view-more-dashboard">
            <button>View more</button>
        </div>
    </div>


    <div class="location-finder">
        <!-- Header -->
        <div class="header-map">
            <div class="d-flex align-items-center justify-content-center">
                <i class="fas fa-users me-2"></i>
                <h5 class="mb-0">Find the perfect fit for your project</h5>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="search-panel">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            <div>Find a location near you</div>
                        </div>

                        <div class="search-input-map">
                            <i class="fas fa-search"></i>
                            <input type="text" placeholder="Enter address or zip code">
                        </div>

                        <div class="location-list">
                            <!-- Location 1 -->
                            <div class="location-item">
                                <div class="d-flex location-details">
                                    <div class="location-number">1</div>
                                    <div>
                                        <div class="location-name">PRAX ENGINEERING LTD</div>
                                        <div class="location-address">St Ives, St. Ives PE27 3NJ, UK</div>
                                    </div>
                                </div>
                                <button class="view-btn">View</button>
                            </div>

                            <!-- Location 2 -->
                            <div class="location-item">
                                <div class="d-flex location-details">
                                    <div class="location-number">2</div>
                                    <div>
                                        <div class="location-name">PRAX ENGINEERING LTD</div>
                                        <div class="location-address">St Ives, St. Ives PE27 3NJ, UK</div>
                                    </div>
                                </div>
                                <button class="view-btn">View</button>
                            </div>

                            <!-- Location 3 -->
                            <div class="location-item">
                                <div class="d-flex location-details">
                                    <div class="location-number">3</div>
                                    <div>
                                        <div class="location-name">PRAX ENGINEERING LTD</div>
                                        <div class="location-address">St Ives, St. Ives PE27 3NJ, UK</div>
                                    </div>
                                </div>
                                <button class="view-btn">View</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158858.182370726!2d-0.10159865000000001!3d51.52864165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2sin!4v1742470993684!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>





        <!-- Map Container -->



        <!-- List Cards -->
        <!-- <div class="container-fluid list-container mt-4 mb-5">
     
        <div class="row list-header d-none d-md-flex">
            <div class="col-md-1 text-center">S.No</div>
            <div class="col-md-2">Company Name</div>
            <div class="col-md-2">Category</div>
            <div class="col-md-2">Ratings</div>
            <div class="col-md-1">Distance</div>
            <div class="col-md-2">Availability</div>
            <div class="col-md-2">Profile</div>
        </div>
        
 
        <div class="card list-item">
            <div class="card-body p-0">
                <div class="row mx-0">
                    <div class="col-md-1 text-center serial-number">01</div>
                    <div class="col-md-2">
                        <div class="company-name">
                            <div class="company-logo">
                                <img src="https://via.placeholder.com/36" alt="Prax Engineering Ltd">
                            </div>
                            <span>Prax Engineering Ltd</span>
                        </div>
                    </div>
                    <div class="col-md-2 category-text">CNC Machining</div>
                    <div class="col-md-2">
                        <div>5.0 
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star star-filled"></i>
                        </div>
                    </div>
                    <div class="col-md-1 distance-text">0.5 km</div>
                    <div class="col-md-2"><span class="badge-available">Available</span></div>
                    <div class="col-md-2"><button class="btn btn-view-profile">View Profile</button></div>
                </div>
            </div>
        </div>
        
        <div class="card list-item">
            <div class="card-body p-0">
                <div class="row mx-0">
                    <div class="col-md-1 text-center serial-number">02</div>
                    <div class="col-md-2">
                        <div class="company-name">
                            <div class="company-logo">
                                <img src="https://via.placeholder.com/36" alt="ABC Company 1">
                            </div>
                            <span>ABC Company 1</span>
                        </div>
                    </div>
                    <div class="col-md-2 category-text">Engineering SME</div>
                    <div class="col-md-2">
                        <div>3.7 
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star-half-alt star-filled"></i>
                            <i class="far fa-star star-empty"></i>
                        </div>
                    </div>
                    <div class="col-md-1 distance-text">2 km</div>
                    <div class="col-md-2"><span class="badge-available">Available</span></div>
                    <div class="col-md-2"><button class="btn btn-view-profile">View Profile</button></div>
                </div>
            </div>
        </div>
        
        <div class="card list-item">
            <div class="card-body p-0">
                <div class="row mx-0">
                    <div class="col-md-1 text-center serial-number">03</div>
                    <div class="col-md-2">
                        <div class="company-name">
                            <div class="company-logo">
                                <img src="https://via.placeholder.com/36" alt="Precision Kingdom">
                            </div>
                            <span>Precision Kingdom</span>
                        </div>
                    </div>
                    <div class="col-md-2 category-text">Machine Suppliers</div>
                    <div class="col-md-2">
                        <div>4.8 
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star-half-alt star-filled"></i>
                        </div>
                    </div>
                    <div class="col-md-1 distance-text">1.1 km</div>
                    <div class="col-md-2"><span class="badge-months">2-3 months</span></div>
                    <div class="col-md-2"><button class="btn btn-view-profile">View Profile</button></div>
                </div>
            </div>
        </div>
        
        <div class="card list-item">
            <div class="card-body p-0">
                <div class="row mx-0">
                    <div class="col-md-1 text-center serial-number">04</div>
                    <div class="col-md-2">
                        <div class="company-name">
                            <div class="company-logo">
                                <img src="https://via.placeholder.com/36" alt="ORD Precision">
                            </div>
                            <span>ORD Precision</span>
                        </div>
                    </div>
                    <div class="col-md-2 category-text">Sheet Metal</div>
                    <div class="col-md-2">
                        <div>3.8 
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star-half-alt star-filled"></i>
                            <i class="far fa-star star-empty"></i>
                        </div>
                    </div>
                    <div class="col-md-1 distance-text">5 km</div>
                    <div class="col-md-2"><span class="badge-weeks">4-6 weeks</span></div>
                    <div class="col-md-2"><button class="btn btn-view-profile">View Profile</button></div>
                </div>
            </div>
        </div>
        
        <div class="card list-item">
            <div class="card-body p-0">
                <div class="row mx-0">
                    <div class="col-md-1 text-center serial-number">05</div>
                    <div class="col-md-2">
                        <div class="company-name">
                            <div class="company-logo">
                                <img src="https://via.placeholder.com/36" alt="CDS Company">
                            </div>
                            <span>CDS Company</span>
                        </div>
                    </div>
                    <div class="col-md-2 category-text">3D Printing</div>
                    <div class="col-md-2">
                        <div>4.1 
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star star-filled"></i>
                            <i class="far fa-star star-empty"></i>
                        </div>
                    </div>
                    <div class="col-md-1 distance-text">4.7 km</div>
                    <div class="col-md-2"><span class="badge-months">2-3 months</span></div>
                    <div class="col-md-2"><button class="btn btn-view-profile">View Profile</button></div>
                </div>
            </div>
        </div>
        
        <div class="card list-item">
            <div class="card-body p-0">
                <div class="row mx-0">
                    <div class="col-md-1 text-center serial-number">06</div>
                    <div class="col-md-2">
                        <div class="company-name">
                            <div class="company-logo">
                                <img src="https://via.placeholder.com/36" alt="Prax Engineering Ltd">
                            </div>
                            <span>Prax Engineering Ltd</span>
                        </div>
                    </div>
                    <div class="col-md-2 category-text">Delivery Service</div>
                    <div class="col-md-2">
                        <div>5.0 
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star star-filled"></i>
                        </div>
                    </div>
                    <div class="col-md-1 distance-text">0.5 km</div>
                    <div class="col-md-2"><span class="badge-available">Available</span></div>
                    <div class="col-md-2"><button class="btn btn-view-profile">View Profile</button></div>
                </div>
            </div>
        </div>
        
        <div class="card list-item">
            <div class="card-body p-0">
                <div class="row mx-0">
                    <div class="col-md-1 text-center serial-number">07</div>
                    <div class="col-md-2">
                        <div class="company-name">
                            <div class="company-logo">
                                <img src="https://via.placeholder.com/36" alt="ABC Company 1">
                            </div>
                            <span>ABC Company 1</span>
                        </div>
                    </div>
                    <div class="col-md-2 category-text">Material Suppliers</div>
                    <div class="col-md-2">
                        <div>3.7 
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star-half-alt star-filled"></i>
                            <i class="far fa-star star-empty"></i>
                        </div>
                    </div>
                    <div class="col-md-1 distance-text">2 km</div>
                    <div class="col-md-2"><span class="badge-available">Available</span></div>
                    <div class="col-md-2"><button class="btn btn-view-profile">View Profile</button></div>
                </div>
            </div>
        </div>
        
        <div class="card list-item">
            <div class="card-body p-0">
                <div class="row mx-0">
                    <div class="col-md-1 text-center serial-number">08</div>
                    <div class="col-md-2">
                        <div class="company-name">
                            <div class="company-logo">
                                <img src="https://via.placeholder.com/36" alt="Precision Kingdom">
                            </div>
                            <span>Precision Kingdom</span>
                        </div>
                    </div>
                    <div class="col-md-2 category-text">CNC Machining</div>
                    <div class="col-md-2">
                        <div>4.8 
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star-half-alt star-filled"></i>
                        </div>
                    </div>
                    <div class="col-md-1 distance-text">1.1 km</div>
                    <div class="col-md-2"><span class="badge-months">2-3 months</span></div>
                    <div class="col-md-2"><button class="btn btn-view-profile">View Profile</button></div>
                </div>
            </div>
        </div>
        
        <div class="card list-item">
            <div class="card-body p-0">
                <div class="row mx-0">
                    <div class="col-md-1 text-center serial-number">09</div>
                    <div class="col-md-2">
                        <div class="company-name">
                            <div class="company-logo">
                                <img src="https://via.placeholder.com/36" alt="ORD Precision">
                            </div>
                            <span>ORD Precision</span>
                        </div>
                    </div>
                    <div class="col-md-2 category-text">CNC Machining</div>
                    <div class="col-md-2">
                        <div>3.8 
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star-half-alt star-filled"></i>
                            <i class="far fa-star star-empty"></i>
                        </div>
                    </div>
                    <div class="col-md-1 distance-text">5 km</div>
                    <div class="col-md-2"><span class="badge-weeks">4-6 weeks</span></div>
                    <div class="col-md-2"><button class="btn btn-view-profile">View Profile</button></div>
                </div>
            </div>
        </div>
        
        <div class="card list-item">
            <div class="card-body p-0">
                <div class="row mx-0">
                    <div class="col-md-1 text-center serial-number">10</div>
                    <div class="col-md-2">
                        <div class="company-name">
                            <div class="company-logo">
                                <img src="https://via.placeholder.com/36" alt="CDS Company">
                            </div>
                            <span>CDS Company</span>
                        </div>
                    </div>
                    <div class="col-md-2 category-text">Material Suppliers</div>
                    <div class="col-md-2">
                        <div>4.1 
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star star-filled"></i>
                            <i class="fas fa-star star-filled"></i>
                            <i class="far fa-star star-empty"></i>
                        </div>
                    </div>
                    <div class="col-md-1 distance-text">4.7 km</div>
                    <div class="col-md-2"><span class="badge-months">2-3 months</span></div>
                    <div class="col-md-2"><button class="btn btn-view-profile">View Profile</button></div>
                </div>
            </div>
        </div>
        
        <button class="btn btn-more">View more</button>
    </div> -->

        <div class="filter-card" id="filterCard">
            <div class="filter-header">
                <h2>Filters</h2>
                <button class="btn-close" id="closeFilter">&times;</button>
            </div>

            <div class="filter-section">
                <h3>Categories:</h3>
                <div class="filter-tags">
                    <div class="filter-tag"><i class="fas fa-plus"></i> CNC Machining</div>
                    <div class="filter-tag"><i class="fas fa-plus"></i> Material Suppliers</div>
                    <div class="filter-tag"><i class="fas fa-plus"></i> Sheet Metal</div>
                    <div class="filter-tag"><i class="fas fa-plus"></i> Cutting Tools Suppliers</div>
                    <div class="filter-tag"><i class="fas fa-plus"></i> Surface Grinding</div>
                    <div class="filter-tag"><i class="fas fa-plus"></i> Shopping</div>
                    <div class="filter-tag"><i class="fas fa-plus"></i> 3D Printing</div>
                    <div class="filter-tag"><i class="fas fa-plus"></i> Machine Suppliers</div>
                    <div class="filter-tag"><i class="fas fa-plus"></i> Surface Treatment</div>
                    <div class="filter-tag"><i class="fas fa-plus"></i> Finance Service</div>
                    <div class="filter-tag"><i class="fas fa-plus"></i> Engineering SME</div>
                    <div class="filter-tag"><i class="fas fa-plus"></i> Delivery Service</div>
                    <div class="filter-tag"><i class="fas fa-plus"></i> R&D</div>
                </div>
            </div>

            <div class="filter-section">
                <h3>Availability:</h3>
                <div class="filter-tags">
                    <div class="filter-tag"><i class="fas fa-plus"></i> Currently Available</div>
                    <div class="filter-tag"><i class="fas fa-plus"></i> Available in 4-6 Weeks</div>
                    <div class="filter-tag"><i class="fas fa-plus"></i> Available in 2-3 Months</div>
                </div>
            </div>

            <div class="filter-section">
                <h3>Ratings:</h3>
                <div class="filter-tags">
                    <div class="filter-tag"><i class="fas fa-star" style="color: gold;"></i> 4.5 & Above</div>
                    <div class="filter-tag"><i class="fas fa-star" style="color: gold;"></i> 4.0 & Above</div>
                    <div class="filter-tag"><i class="fas fa-star" style="color: gold;"></i> 3.5 & Above</div>
                    <div class="filter-tag"><i class="fas fa-star" style="color: gold;"></i> 3.0 & Above</div>
                </div>
            </div>

            <div class="filter-actions">
                <button class="btn-clear">Clear</button>
                <button class="btn-apply">Apply Filter</button>
            </div>
        </div>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterBtn = document.getElementById('filterBtn');
        const filterCard = document.getElementById('filterCard');
        const closeFilter = document.getElementById('closeFilter');

        // Toggle filter card when clicking the filter button
        filterBtn.addEventListener('click', function() {
            filterCard.classList.toggle('active');
        });

        // Close filter card when clicking the close button
        closeFilter.addEventListener('click', function() {
            filterCard.classList.remove('active');
        });

        // Close filter card when clicking outside
        document.addEventListener('click', function(event) {
            if (!filterCard.contains(event.target) && event.target !== filterBtn) {
                filterCard.classList.remove('active');
            }
        });
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('appLayouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/htmlcodes/dashboardnew.blade.php ENDPATH**/ ?>