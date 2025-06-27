@extends('appLayouts.app')
@section('content')
@section('main_content')

<head>
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="{{asset('newAssets/img/favicon.ico')}}" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@800&display=swap" rel="stylesheet">
</head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        // Handle View Company click
        $(document).on('click', '.viewCompany', function(event) {
            // Prevent navigation if clicking the favorite icon or its ancestors
            if ($(event.target).closest('.favorite-dashboard-icon').length || $(event.target).closest('.confirmModalAlert').length) {
                return; // Skip navigation for favorite icon or its <a> tag
            }

            // Navigate to the company page
            var companyid = $(this).attr("companyid");
            if (companyid) {
                window.location.href = "{{ url('view-company') }}/" + companyid;
            }
        });

        // Handle favorite icon click
        $(document).on('click', '.favorite-dashboard-icon, .confirmModalAlert', function(event) {
            // Stop the click from bubbling up to .viewCompany
            event.stopPropagation();

            // The confirmModalAlert logic (attached to the <a> tag) will handle the bookmark action
            var companyId = $(this).closest('.viewCompany').attr('companyid');
            ('Favorite icon clicked for company ID: ' + companyId);
            // No navigation logic here; confirmModalAlert handles the bookmark action
        });

        // Handle Profile button click
        $(document).on('click', '.profile-btn', function() {
            var companyid = $(this).attr("companyid");
            if (companyid) {
                window.location.href = "{{ url('view-company') }}/" + companyid;
            } else {
            }
        });

        // Handle Chat button click
        $(document).on('click', '.chat-btn-map', function() {
            var companyid = $(this).attr("companyid");
            if (companyid) {
                window.location.href = "{{ url('view-company') }}/" + companyid;
            } else {
            }
        });
    });
</script>


<div class="container-fluid dash-wrapper">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="head-dash">Bookmark</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('network.index') }}"> <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                            </svg></a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<style>
    .dash-wrapper .page-title {
        margin: 0 -27px 8px !important;

    }

    #map {
        height: 100%;
        width: 100%;
        flex-grow: 1;
        /* Allow it to grow and fill available space */
    }

    #map-container {
        flex: 0 0 73%;
        /* 70% width for the map */
        padding-left: 0px;
        padding-right: 0px;
        display: none;
        /* Initially hidden */
    }

    #locations-container {
        flex: 0 0 27%;
        /* 30% width for the list */
        /* padding-left: 24px; */
        padding-right: 0px;
        height: 500px;
        /* overflow-y: auto; */
    }

    .location-item {
        cursor: pointer;
    }

    .page-title {
        padding:8px !important;
    }

    .head-dash {
        font-family: 'Manrope', sans-serif !important;
        font-weight: 800 !important;
    }
</style>
<style>
    #map {
        height: 500px;
        width: 100%;
    }

    .location-number {
        font-size: 18px;
        font-weight: bold;
        color: black;
        padding-right: 8px;
    }


    .header-dashboard {
        display: flex;
        align-items: center;
        gap: 12px;
        /* border-bottom: 1px solid #e5e7eb; */
        padding-bottom: 8px;
        padding-top: 8px;
        /* padding-top: 20px; */
        flex-wrap: wrap;
    }
    .header-dashboard-one {
        display: flex;
        align-items: center;
        gap: 12px;
        /* border-bottom: 1px solid #e5e7eb; */
        /* padding-bottom: 8px; */
        /* padding-top: 20px; */
        flex-wrap: wrap;
        margin-right:14px;
    }
    
    .header-dashboard-one h1 {
        font-size: 18px;
        font-weight: 600;
        margin-left: 17px;
    }

    .header-dashboard h1 {
        font-size: 18px;
        font-weight: 600;
        margin: 0;
    }

    .controls-dashboard {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .pagination-dashboard {
        color: #666;
        font-size: 14px;
    }

    .view-controls-dashboard {
        display: flex;
        justify-content: center;
        /* padding-bottom: 10px; */
    }

    .view-controls-dashboard-one {
        display: flex;
        justify-content: center;
        padding-bottom: 10px;
    }


    .view-controls-dashboard a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        background-color: #7C3AED;
        border-radius: 50%;
        color: white;
        text-decoration: none;
        margin-right: 8px;
    }

    .compare-btn {
        background-color: #7C3AED;
        border: 1px solid #ddd;
        border-radius: 20px;
        padding: 8px 20px;
        display: flex;
        align-items: center;
        gap: 8px;
        cursor: pointer;
        color: #fff;
        margin-left: 10px;
        font-family: 'Manrope-Bold';
    }

    .filter-btn {
        background-color: #f0f0f0;
        border: 1px solid rgb(163, 163, 163) !important;
        border-radius: 20px;
        padding: 8px 20px;
        display: flex;
        align-items: center;
        gap: 8px;
        cursor: pointer !important;
        font-family: 'Manrope-Bold';
    }

    .filter-btn.active {
        /* Active state with colored border */
        border: 2px solid #7366FF !important;
        /* Blue border for active state */

    }

    .company-card-dashboard {
        border: 1px solid rgb(212, 212, 212);
        border-radius: 8px;
        overflow: hidden;
        margin-bottom: 10px;
        background-color: white;
        position: relative;
        height: 280px;
        box-shadow: rgba(0, 0, 0, 0.22) 0px 0.602187px 0.602187px -1.25px, rgba(0, 0, 0, 0.19) 0px 2.28853px 2.28853px -2.5px, rgba(0, 0, 0, 0.08) 0px 10px 10px -3.75px;
    }

    .company-img-dashboard {
        height: 180px;
        width: 100%;
        /* This makes the image take the full width of its container */
        /* object-fit: contain; */
        /* Ensures the entire image is visible without cropping, maintaining aspect ratio */
        display: block;
        /* Removes any default inline spacing */
        max-width: 100%;
        /* Prevents the image from exceeding the container's width */
    }

    .company-info-dashboard {
        padding: 10px 16px 16px 16px;
    }

    .company-info-dashboard {
        position: relative;
    }

    .company-name-container {
        position: relative;
        display: inline-block;
    }

    .company-name-dashboard {
        max-width: 200px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        cursor: default;
        position: relative;
        /* padding-bottom: 15px; */
        font-weight: 600;
        font-size: 20px;
        font-family: "Manrope-Bold" !important;

    }

    /* Tooltip styling */
    .company-name-dashboard::before {
        content: attr(data-tooltip);
        position: absolute;
        bottom: 100%;
        left: 50%;
        transform: translateX(-50%);
        padding: 5px 10px;
        background-color: #333;
        color: white;
        border-radius: 4px;
        font-size: 14px;
        white-space: nowrap;
        visibility: hidden;
        opacity: 0;
        transition: opacity 0.3s;
        z-index: 1000;
    }

    /* Arrow for tooltip */
    .company-name-dashboard::after {
        content: "";
        position: absolute;
        bottom: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: #333 transparent transparent transparent;
        transform: translateY(100%);
        visibility: hidden;
        opacity: 0;
        transition: opacity 0.3s;
        z-index: 1000;
    }

    /* Show tooltip on hover */
    /* .company-name-dashboard:hover::before,
  .company-name-dashboard:hover::after {
    visibility: visible;
    opacity: 1;
  } */
    .rating-dashboard {
        background-color: #fff;
        border: 1px solid #a3a3a3;
        color: #ffc107;
        border-radius: 4px;
        padding: 8px;
        font-size: 14px;
        display: flex !important;
        height: 28px;
        align-items: center;
        font-family: 'Manrope-Bold' !important;
    }

    .star-dashboard {
        color: gold;
        font-size: 12px;
    }

    .location-badge-dashboard {
        position: absolute;
        top: 16px;
        left: 16px;
        background-color: #e5e5e5;
        padding: 8px 6px 8px 2px;
        border-radius: 3px;
        height: 28px;
        font-size: 14px;
        font-family: 'Manrope-Bold';
        border: 1px solid #d4d4d4;
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0.8;
    }


    .location-badge-dashboard-two {
        position: absolute;
        top: 11px;
        left: 10px;
        background-color: #E5E5E5;
        padding: 3px 8px;
        border-radius: 3px;
        font-size: 12px;
        display: flex;
        font-weight: 700;
        border: 1px solid rgb(212, 212, 212);
        align-items: center;
        gap: 0px;
    }

    .favorite-dashboard {
        position: absolute;
        top: 16px;
        right: 16px;
        /* background-color: white; */
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
        position: relative;
        display: inline-block;
    }

    .nodata-dashboard::before {
        content: attr(data-original-title);
        position: absolute;
        bottom: 116% !important;
        left: -82% !important;
        transform: translateX(-50%);
        padding: 5px 10px;
        background: linear-gradient(124deg, #7c3aed 0%, rgb(91, 33, 182) 100%);
        color: white;
        font-size: 14px;
        border-radius: 5px;
        white-space: nowrap;
        margin-bottom: 5px;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.2s, visibility 0.2s;
        z-index: 1;
    }

    .nodata-dashboard::after {
        content: '';
        position: absolute;
        bottom: 28px !important;
        left: 50% !important;
        transform: translateX(-50%);
        width: 0;
        height: 0;
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        border-top: 8px solid #7c3aed;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.2s, visibility 0.2s;
        z-index: 1;
    }


    .availability-dashboard::before {
        content: attr(data-original-title);
        position: absolute;
        bottom: 116%;
        left: 0%;
        transform: translateX(-50%);
        padding: 5px 10px;
        background: linear-gradient(124deg, #7c3aed 0%, rgb(91, 33, 182) 100%);
        color: white;
        font-size: 14px;
        border-radius: 5px;
        white-space: nowrap;
        font-family: "Manrope-Medium";
        margin-bottom: 5px;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.2s, visibility 0.2s;
        z-index: 1;
    }

    .availability-dashboard::after {
        content: '';
        position: absolute;
        bottom: 28px;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 0;
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        border-top: 8px solid #7c3aed;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.2s, visibility 0.2s;
        z-index: 1;
    }

    .availability-dashboard:hover::before,
    .availability-dashboard:hover::after {
        opacity: 1;
        visibility: visible;
    }

    /* Style for the inner yellow box (if needed as a separate element) */
    .availability-dashboard .tooltip-inner {
        display: inline-block;
        padding: 2px 6px;
        background-color: #f7c948;
        /* Yellow background */
        color: black;
        font-size: 12px;
        border-radius: 3px;
        margin-left: 5px;
    }

    .availability-dashboard-header {
        padding: 6px 12px;
        border-radius: 999px;
        font-size: 14px;
        font-weight: 500;
        text-align: center;
    }

    .available-nodata {
        border: 1px solid #d9d9d9;
        color: black;
        background-color: #dddddd;
        border-radius: 0px;
        font-family: 'Manrope-Bold';
        margin-top: 3px;
        border-radius: 4px;
        padding: 3px 10px;
    }

    .available-dashboard {
        border: 1px solid #16A34A;
        color: #16A34A;
        background-color: #F0fdf4;
        border-radius: 0px;
        font-family: 'Manrope-Medium';
        border-radius: 4px;
        padding: 8px;
        font-size: 14px;
        height: 28px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .weeks-dashboard {
        border: 1px solid #eab308;
        color: #eab308;
        background-color: #FEFCE8;
        border-radius: 0px;
        font-family: 'Manrope-Medium';
        font-size: 14px;
        border-radius: 4px;
        padding: 8px;
        height: 28px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .months-dashboard {
        border: 1px solid #dc2626;
        color: #dc2626;
        background-color: #fef2f2;
        border-radius: 0px;
        font-family: 'Manrope-Medium';
        border-radius: 4px;
        padding: 8px;
        font-size: 14px;
        height: 28px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .months-dashboard::before {
        left: 0% !important;
    }

    .weeks-dashboard::before {
        left: -0% !important;
    }

    .nodata-dashboard {
        border: 1px solid #404040;
        color: #404040;
        background-color: #E5E5E5;
        border-radius: 0px;
        font-family: 'Manrope-Bold';
        /* margin-top: 3px; */
        border-radius: 4px;
        padding: 8px;
        height: 28px;
        display: flex;
        justify-content: center;
        align-items: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }


    /* Filter panel */
    .filter-card {
        position: absolute;
        max-height: 600px;
        right: 0;
        top: 350px;
        width: 350px;
        overflow-y: auto;
        /* Enable vertical scrolling when content overflows */
        overflow-x: hidden;
        /* Prevent horizontal scrolling */
        background-color: white;
        /* border-radius: 8px; */
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
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

    /* .btn-close {
        background: none;
        border: none;
        font-size: 20px;
        cursor: pointer;
        color: #666;
    } */

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

    .filter-tag {
        /* background-color: #f6f6f6; */
        /* border-radius: 20px; */
        font-size: 12px;
        padding: 7px;
        cursor: pointer;
        display: flex;
        font-family: 'Manrope-Semi';
        align-items: center;
        color: #737373;
        gap: 5px;
        border-radius: 4px;
        border: 1px solid rgb(163, 163, 163);
    }

    /* 
    .filter-tag:hover {
        background-color: #e9e9e9;
    } */

    .filter-tag i {
        color: rgb(115, 115, 115);
        font-size: 10px;
    }

    .filter-actions {
        display: flex;
        /* justify-content: space-between; */
        padding: 15px 20px;
        gap: 10px;
    }

    .fa-check:before {
        color: rgb(124, 58, 237) !important;
    }

    .btn-clear,
    .btn-apply {
        background-color: white;
        border: 1px solid #ddd;
        border-radius: 20px;
        padding: 8px 20px;
        font-size: 14px;
        cursor: pointer;
    }

    .btn-apply {
        background-color: #7C3AED;
        color: white;
        border: none;
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
        padding: 16px;
        /* height: 100%; */
        height: 100vh;
        overflow-y: auto;
        /* width: 334px; */
        width: 298px;
        border-radius: 0px !important;
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
        width: 265px;
        padding: 10px 15px 10px 40px;
        border: 1px solid #a3a3a3;
        border-radius: 25px;
        font-size: 14px;
        height: 32px;
    }

    .search-input-map i {
        position: absolute;
        left: 15px;
        top: 9px;
        color: #b2b2b2;
    }

    .location-list {
        max-height: calc(100% - 100px);
        /* overflow-y: auto; */
    }

    .location-item {
        background-color: white;
        margin-bottom: 15px;
        overflow: hidden;
        /* box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); */
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

    .trigger-icon {
        transition: transform 0.3s;
    }

    .trigger-icon.rotated {
        transform: rotate(90deg);
    }

    .company-cards {
        display: block;
        /* Show company cards by default */
    }

    .location-finder {
        display: none;
        /* Hide map view by default */
    }

    /* Calendar Sidebar (Moved to right side) */
    .calendar-sidebar {
        position: fixed;
        top: 0;
        right: -300px;
        /* Start from the right */
        width: 300px;
        height: 100vh;
        background-color: white;
        box-shadow: -2px 0 5px rgba(0, 0, 0, 0.1);
        /* Shadow on the left */
        z-index: 1000;
        padding: 20px;
        transition: right 0.3s ease;
        /* Transition from right */
        overflow-y: auto;
    }

    .calendar-sidebar.show {
        right: 0;
        /* Slide in to the right edge */
    }

    .calendar-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .calendar-header h3 {
        margin: 0;
        font-size: 18px;
    }

    .calendar-header .btn-close {
        background: none;
        border: none;
        font-size: 20px;
        cursor: pointer;
        color: #666;
    }

    .calendar-controls {
        display: flex;
        gap: 10px;
        margin-bottom: 20px;
    }

    .calendar-controls select {
        padding: 5px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 14px;
        cursor: pointer;
        width: 120px;
    }

    .calendar {
        margin-bottom: 20px;
    }

    .calendar table {
        width: 100%;
        border-collapse: collapse;
    }

    .calendar th,
    .calendar td {
        text-align: center;
        padding: 10px;
        border: 1px solid #eee;
    }

    .calendar th {
        background-color: #f5f5f5;
        font-weight: 600;
    }

    .calendar td {
        cursor: pointer;
    }

    .calendar td.today {
        background-color: #e9ecef;
        font-weight: bold;
    }

    .calendar td.event {
        background-color: #6c5ce7;
        font-weight: bold;
        color: white;
    }

    .upcoming-events h4 {
        margin-bottom: 10px;
        font-size: 16px;
    }

    .event-item {
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-bottom: 10px;
        background-color: #EFF6FF;
        border-left: solid;
        border-left-color: #3B82F6;
    }

    .event-item span {
        display: block;
        font-size: 14px;
    }

    @media (max-width: 991px) {
        .row {
            height: auto;
        }

        .col-lg-4,
        .col-lg-8 {
            height: auto;
        }

        .availability-dashboard-header {
            display: none !important;
        }

        .search-input-map {
            margin-left: 50px;
        }

        .page-title {
            padding-top: 60px !important;
        }


        /* iframe {
            height: 50vh;
        } */
    }


    .services-title {
        background: #7366ff;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 20px;
        font-family: 'Manrope-Bold' !important;
        margin-bottom: 8px;
    }

    .service-card {
        background-color: white;
        border-radius: 15px;
        padding: 12px;
        /* display: flex; */
        align-items: center;
        /* margin-bottom: 1rem; */
        box-shadow: rgba(46, 35, 94, 0.07) 0px 9px 20px 0px, rgba(46, 35, 94, 0.07) 0px -9px 20px 0px;
        position: relative;
        overflow: hidden;
        transition: transform 0.2s;
        height: 140px;
        margin-bottom: -8px;
        /* width: 180px; */
    }

    .service-card.active-subcategory {
        background-color: #f5f3ff;
        /* Purple background for active state */
        color: #000000;
        /* White text */
        border: 1px solid #7C3AED;
    }

    .service-card.active-subcategory .service-name,
    .service-card.active-subcategory .service-count {
        color: #7C3AED;
    }

    .service-card:hover {
        transform: translateY(-3px);
        border: 1px solid #7C3AED;
        background-color: #f5f3ff;
        /* box-shadow: rgba(0, 0, 0, 0.35) 0px 2px 8px; */
    }

    .service-icon {
        /* width: 50px;
        height: 50px; */
        display: flex;
        align-items: center;
        justify-content: center;
        /* margin-right: 15px; */
    }

    .service-icon img {
        max-width: 92px;
        /* margin: 0 auto; */
        max-height: 103px;
    }

    .service-name {
        font-family: 'Manrope-Bold' !important;
        font-size: 14px;
        text-align: center;
        margin-bottom: 10px;
        /* white-space: nowrap; */
    }

    .service-count {
        position: absolute;
        bottom: 14px;
        right: 14px;
        color: #7366ff;
        /* font-weight: 600; */
        font-size: 11px;
        font-family: 'Manrope-Bold' !important;
    }

    /* Modal and content styling */
    .custom-modal-width {
        max-width: 1400px !important;
        /* Explicitly set max-width */
        width: 100% !important;
        /* Full width within the screen */
        margin: 0 auto;
        /* Center the modal */
    }

    /* Modal and content styling */
    .modal-dialog-centered {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: calc(100% - 1rem);
    }

    /* Comparison Modal */
    .modal-content {
        height: auto !important;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .model-content-bg {
        background-color: #E5E5E5;
        padding: 25px;
        /* Increased padding for wider modal */
        display: flex;
        flex-direction: column;
        /* min-height: 600px; */
    }

    .chart-content,
    .card-chart-bg {
        padding: 0;
        display: flex;
        flex-direction: column;
    }

    #chart-wrapper {
        position: relative;
        height: 300px;
        width: 100%;
        margin: 0 auto;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        background-color: white;
    }

    #comparisonChart {
        width: 100% !important;
        height: 100% !important;
    }

    .chart-y-labels {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 40px 0;
        color: #777;
        font-size: 14px;
        width: 50px;
    }

    .chart-y-label {
        position: relative;
        text-align: right;
        padding-right: 10px;
    }

    .chart-y-label::after {
        content: '';
        position: absolute;
        left: 50px;
        top: 50%;
        width: calc(100% - 50px);
        height: 1px;
        background-color: #eee;
        z-index: -1;
    }

    .supplier-card {
        border-radius: 8px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        background: white;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
        width: 316px;
    }

    .supplier-card-map {
        border-radius: 12px;
        background: white;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
        width: 265px;
        margin-bottom: 20px;
        border: 1px solid #A3A3A3;
        padding: 8px !important;
    }

    .supplier-logo {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #f0f0f0;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    /* 
    .supplier-logo img {
        max-width: 100%;
        max-height: 100%;
    } */

    .supplier-badge {
        font-size: 12px;
        /* padding: 4px 8px; */
        border-radius: 4px;
        margin-right: 5px;
        display: inline-block;
    }

    .top-rated {
        background: linear-gradient(145deg, #2563EB 0%, #1E40AF 100%);
        color: white;
    }

    .top-rated-map {
        /* border: 1px solid #747474; */
        color: white;
    }


    .nearest-supplier {
        background: linear-gradient(145deg, #16A34A 0%, #166534 100%);
        color: white;
    }

    .best-availability {
        background: linear-gradient(145deg, #16A34A 0%, #166534 100%);

        color: white;
    }

    .view-location-btn {
        font-size: 12px;
        padding: 4px 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: white;
        color: #333;
    }

    .waiting-badge {
        background-color: #e6f0ff;
        color: #4169E1;
        padding: 4px 8px;
        border-radius: 4px;
        font-size: 12px;
        border: 1px solid #4169E1;
    }

    .availability-badge {
        background-color: #e6f7e6;
        color: #4CAF50;
        padding: 4px 8px;
        border-radius: 4px;
        font-size: 12px;
        border: 1px solid #4CAF50;
    }

    .profile-btn {
        background-color: white;
        border: 1px solid #A3A3A3;
        /* color: #333; */
        padding: 6px;
        border-radius: 7px;
    }

    .chat-btn {
        background-color: #7C3AED;
        border: none;
        color: white;
        /* padding: 6px; */
        border-radius: 7px;
        white-space: nowrap;
        height: 35px;
    }

    .chat-btn-map,
    .btn-purple-map {
        background-color: #7366ff;
        border: none;
        color: white;
        /* padding: 6px; */
        height: 35px;
        border-radius: 7px;
        white-space: nowrap;
    }

    /* .chat-btn, .btn-purple-map {
        background-color: #6c5ce7;
        border: none;
        color: white;
        padding: 6px;
        border-radius: 4px;
        white-space: nowrap;
    } */


    .supplier-contact-info {
        font-size: 14px;
        margin: 4px 0;
        display: flex;
        align-items: center;
        color: black;
        font-family: 'Manrope-Semi';
    }

    .supplier-contact-info i {
        width: 16px;
        margin-right: 5px;
    }

    /* Ensure cards are side by side */
    .card-chart-bg .row {
        height: 100%;
    }

    .card-chart-bg .col-6 {
        padding: 0 10px;
        /* Increased padding for wider modal spacing */
    }

    .supplier-card .mt-auto {
        margin-top: auto !important;
    }

    .icon-bg {
        background-color: #7366FF !important;
        padding: 8px;
        border-radius: 50%;
        color: #fff;
        display: flex;
        justify-content: center;
    }

    .compare-btn,
    .filter-btn {
        display: flex;
        align-items: center;
        gap: 6px;
        padding: 8px 16px;
        border-radius: 999px;
        border: none;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
    }

    .dropdown-wrapper-dash {
        display: flex;
        align-items: center;
        position: relative;
        margin-left: 17px;
    }

    .dropdown-label-dash {
        color: #737373;
        font-size: 14px;
        margin-right: 6px;
        font-family: 'Manrope-Bold';
    }

    .dropdown-label-dash-one {
        color: #737373;
        font-size: 14px;
        /* margin-right: 6px; */
        font-family: 'Manrope-Bold';
    }

    .dropdown-select-dash {
        padding: 3px 4px 4px 5px;
        font-size: 14px;
        border: 1px solid #A3A3A3;
        border-radius: 3px;
        /* border-radius: 999px; */
        appearance: none;
        background-color: white;
        cursor: pointer;
        width: 45px;
        font-family: 'Manrope-Bold';
        height: 28px;
    }

    .dropdown-arrow-dash {
        position: absolute;
        right: 4px;
        top: 52%;
        transform: translateY(-50%);
        pointer-events: none;
        width: 10px;
        height: 10px;
    }

    .dropdown-arrow-dash:before {
        content: "";
        position: absolute;
        width: 0;
        height: 0;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-top: 5px solid #6b7280;
    }

    .search-wrapper-dash {
        position: relative;
        /* width: 360px; */
    }

    .search-input-dash {
        padding: 8px 12px 8px 36px;
        font-size: 14px;
        border: 1px solid #A3A3A3;
        border-radius: 999px;
        width: 320px;
        box-sizing: border-box;
        background-color: white;
    }

    .search-input-dash:focus {
        outline: none;
        /* Remove default focus outline */
        border: 1px solid #A3A3A3;
        /* Keep the same border */
        /* Optional: you can add a subtle box-shadow to indicate focus */
        box-shadow: 0 0 0 2px rgba(209, 213, 219, 0.2);
    }

    .search-icon-dash {
        position: absolute;
        left: 12px;
        top: 47%;
        transform: translateY(-50%);
        color: #6b7280;
    }

    .header-dash-two {
        display: flex;
        justify-content: start;
        align-items: center;
        gap: 12px;
    }


    .controls-dashboard {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-left: auto;
    }

    @media (max-width: 425px) {
        .header-dashboard {
            flex-wrap: wrap;
            gap: 15px;
        }
        .header-dashboard-one {
            flex-wrap: wrap;
            gap: 15px;
        }

        .controls-dashboard {
            /* margin-left: 0;
            width: 100%; */
            justify-content: space-between;
            /* margin-top: 10px; */
        }
    }

    @media (max-width: 425px) {
        .search-wrapper-dash {
            width: 100%;
            order: 3;
        }

        .controls-dashboard {
            flex-wrap: wrap;
        }

        .search-panel {
            background-color: unset !important;

        }

        .card {
            box-shadow: unset !important;
            margin-bottom: 0px !important;
        }
    }

    @media (max-width: 768px) {
        .card-body {
            display: none !important;
        }

        #map-container {
            flex: unset !important;
            /* height: 855px !important; */
        }

        .search-panel {
            background-color: unset !important;

        }

        .card {
            box-shadow: unset !important;
            margin-bottom: 0px !important;
        }

        /* .map-view{
            width: 100% !important;
    height: 100% !important;
    position: relative;
    overflow: hidden !important;
      } */
    }

    .extra-row {
        transition: all 0.3s ease;
    }

    .input-map:focus {
        outline: none;
        /* Remove default focus outline */
        border: 1px solid #d1d5db;
        /* Keep the same border */
        /* Optional: you can add a subtle box-shadow to indicate focus */
        box-shadow: 0 0 0 2px rgba(209, 213, 219, 0.2);
    }

    .custom-close-btn {
        /* background-color: #7C3AED !important; */
        border-radius: 86% !important;
        border: 0px;
        display: flex;
        padding: 10px;
        align-items: center;
        justify-content: center;
    }

    .map-view {
        display: flex !important;
        flex-wrap: wrap !important;
        height: 100vh !important;
        margin: 0;
    }

    .location-view {
        height: 100% !important;
        display: block;
    }

    .map-view-new {
        height: 100% !important;
        /* Fill the height of the row */
        display: flex !important;
        flex-direction: column !;
        display: none;
        /* Hide map view initially, no !important */
        /* display: block; */
    }

    .company-cards {
        display: block;
        /* Default state */
    }

    .location-finder {
        display: none;
        /* Default state */
    }

    .view-less {
        border-radius: 23px;
        border: 1px solid #a3a3a3;
        padding: 8px;
        /* height: 39px; */
        display: flex;
        /* background-color: #f5f5f5 !important; */
        text-align: center;
        font-family: 'Manrope-Bold';
        width: 105px;
    }

    .view-more {
        border-radius: 48px;
        border: 1px solid #a3a3a3;
        padding: 8px;
        /* height: 39px; */
        display: flex;
        /* background-color: #f5f5f5 !important; */
        font-family: 'Manrope-Bold';
        text-align: center;
        width: 105px;
    }

    .availability-dashboard-header {
        cursor: pointer;
        opacity: 0.8;
        transition: all 0.2s ease;
        padding: 2px 6px;
        border-radius: 4px;
        font-size: 14px;
        font-weight: 500;
        text-align: center;
    }

    .availability-dashboard-header:hover {
        opacity: 1;
        transform: scale(1.02);
    }

    .availability-dashboard-header.active {
        opacity: 1;
        transform: scale(1.05);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .available-dashboard.active {
        background-color: #4CAF50;
        color: white;
        border-color: #4CAF50;
    }

    .weeks-dashboard.active {
        background-color: #3B82F6;
        color: white;
        border-color: #3B82F6;
    }

    .months-dashboard.active {
        background-color: #F97316;
        color: white;
        border-color: #F97316;
    }

    .no-results-message {
        background-color: #f8f9fa;
        border-radius: 8px;
        margin: 20px 0;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        border: 1px solid #e9ecef;
    }

    .no-results-message i {
        color: #6c757d;
    }

    .no-results-message h5 {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 8px;
        color: #343a40;
    }

    .no-results-message p {
        font-size: 14px;
        margin-bottom: 0;
    }

    .index-number {
        position: relative;
        display: inline-block;
        width: 32px;
        height: 32px;
        background-color: #7366FF;
        border-radius: 5px;
        color: #ffffff !important;
        font-size: 16px !important;
        font-weight: bold;
        text-align: center;
        line-height: 32px;
        margin-right: 16px !important;
        margin-bottom: 10px !important;
        border-radius: 23px;
    }

    /* .index-number::after {
        content: '';
        position: absolute;
        bottom: -16px;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 0;
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        border-top: 16px solid #7C3AED;
    } */

    .full-page-loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        visibility: hidden;
        opacity: 0;
        transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    .full-page-loader.is-active {
        visibility: visible;
        opacity: 1;
    }

    .loader {
        width: 50px;
        aspect-ratio: 1;
        border-radius: 50%;
        border: 8px solid #EDE9FE;
        border-right-color: #7C3AED;
        animation: rotate 1s infinite linear;
    }

    @keyframes rotate {
        100% {
            transform: rotate(360deg);
        }
    }

    .search-input-dash::placeholder {
        color: #000000;
        font-family: 'Manrope-Bold';
    }

    #mapIcon {
        position: relative;
        display: inline-block;
    }

    .rating-container {
        position: relative;
        display: inline-block;
        cursor: pointer;
    }

    .rating-value {
        display: inline-block;
        padding: 2px 5px;
        font-size: 14px;
        font-family: "Manrope-Bold" !important;
    }




    .rating-container:hover::before,
    .rating-container-sharp:hover::after {
        opacity: 1;
        visibility: visible;
    }




    .viewCompany {
        position: relative;
        cursor: pointer;
    }

    .rating-container::before {
        content: 'Based on ' attr(data-reviews) ' reviews';
        position: absolute;
        bottom: 116%;
        left: 95%;
        transform: translateX(-50%);
        padding: 5px 10px;
        background: linear-gradient(124deg, #7c3aed 0%, rgb(91, 33, 182) 100%);
        color: white;
        font-size: 14px;
        border-radius: 5px;
        white-space: nowrap;
        font-family: 'Manrope-Medium';
        margin-bottom: 5px;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.2s, visibility 0.2s;
        z-index: 1;

    }

    .rating-container-sharp::after {
        content: '';
        position: absolute;
        bottom: 28px;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 0;
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        border-top: 8px solid #7c3aed;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.2s, visibility 0.2s;
        z-index: 1;
    }

    .rating-container:hover::before,
    .rating-container-sharp:hover::after {
        opacity: 1;
        visibility: visible;
    }

    #mapIcon {
        position: relative;
        /* Ensure the pseudo-elements are positioned relative to #mapIcon */
    }

    #mapIcon::before {
        content: attr(data-tooltip);
        position: absolute;
        bottom: 100%;
        /* Place tooltip above the icon */
        left: 50%;
        /* Center horizontally */
        transform: translateX(-50%);
        /* Adjust to center */
        padding: 5px 10px;
        background: linear-gradient(124deg, #7c3aed 0%, rgb(91, 33, 182) 100%);
        color: white;
        font-size: 14px;
        border-radius: 5px;
        white-space: nowrap;
        margin-bottom: 10px;
        /* Space between tooltip and arrow */
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.2s, visibility 0.2s;
        z-index: 1000;
        /* Higher z-index to ensure visibility */
    }

    #mapIcon::after {
        content: '';
        position: absolute;
        bottom: 100%;
        /* Align with the bottom of the tooltip */
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 0;
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        border-top: 8px solid #7c3aed;
        /* Match the tooltip's starting gradient color */
        margin-bottom: 2px;
        /* Small gap to align with tooltip */
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.2s, visibility 0.2s;
        z-index: 1000;
    }

    #mapIcon:hover::before,
    #mapIcon:hover::after {
        opacity: 1;
        visibility: visible;
    }

    #gridIcon {
        position: relative;
        /* Ensure pseudo-elements are positioned relative to #gridIcon */
    }

    #gridIcon::before {
        content: attr(data-tooltip);
        /* Use data-tooltip attribute for text */
        position: absolute;
        bottom: 100%;
        /* Place tooltip above the icon */
        left: 50%;
        /* Center horizontally */
        transform: translateX(-50%);
        /* Adjust to center */
        padding: 5px 10px;
        background: linear-gradient(124deg, #7c3aed 0%, rgb(91, 33, 182) 100%);
        /* Match #mapIcon gradient */
        color: white;
        font-size: 14px;
        border-radius: 5px;
        white-space: nowrap;
        margin-bottom: 10px;
        /* Space between tooltip and arrow */
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.2s, visibility 0.2s;
        z-index: 1000;
        /* High z-index to ensure visibility */
    }

    #gridIcon::after {
        content: '';
        /* Empty content for arrow */
        position: absolute;
        bottom: 100%;
        /* Align with the bottom of the tooltip */
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 0;
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        border-top: 8px solid #7c3aed;
        /* Match #mapIcon arrow color */
        margin-bottom: 2px;
        /* Small gap to align with tooltip */
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.2s, visibility 0.2s;
        z-index: 1000;
    }

    #gridIcon:hover::before,
    #gridIcon:hover::after {
        opacity: 1;
        visibility: visible;
    }

    .company-card-dashboard {
        transition: transform 0.3s ease;
        /* Smooth transition for transform */
    }

    .company-card-dashboard:hover {
        transform: translateY(-5px);
    }

    rating-container {
        position: relative;
        display: inline-block;
        cursor: pointer;
    }

    .rating-value {
        display: inline-block;
        padding: 2px 5px;
        font-size: 14px;
        font-family: "Manrope-Bold" !important;
    }




    .rating-container:hover::before,
    .rating-container-sharp:hover::after {
        opacity: 1;
        visibility: visible;
    }




    .viewCompany {
        position: relative;
        cursor: pointer;
    }

    .favorite-dashboard-icon {
        position: absolute;
        top: 2px;
        right: -3px;
        background-color: #E5E5E5 !important;
        width: 30px;
        border: 1px solid #D4D4D4 !important;
        height: 26px;
        border-radius: 16%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        padding: 6px;
        transition: all 0.3s ease;
        opacity: 0.8;
    }

    .favorite-dashboard-icon img {
        filter: grayscale(100%);
        transition: filter 0.3s ease;
        width: 18px;
        object-fit: cover;
    }

    .favorite-dashboard-icon.active {
        background-color: #22C55E !important;
        border: 1px solid #22C55E !important;
    }

    .favorite-dashboard-icon.active img {
        filter: none !important;
    }

    .favorite-dashboard-icon:hover {
        transform: scale(1.05);
    }

    .filter-card {
        position: fixed;
        right: 10px;
        top: 50px;
        width: 350px;
        background-color: white;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.35);
        z-index: 1000;
        display: none;
    }

    .filter-card.active {
        display: block !important;
        background-color: rgb(255, 255, 255);
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
        border: 1px solid #7366ff;
        background-color: #f5f3ff;
    }

    .filter-tag.active {
        background-color: rgb(237, 233, 254) !important;
        border: 1px solid rgb(124, 58, 237) !important;
        color: rgb(124, 58, 237);
    }


    .filter-actions {
        display: flex;
        padding: 15px 20px;
        gap: 10px;
    }

    .btn-clear,
    .btn-apply {
        background-color: white;
        border: 1px solid #ddd;
        border-radius: 20px;
        padding: 8px 20px;
        font-size: 14px;
        cursor: pointer;
    }

    .apply-filter-btn {
        padding: 16px;
        border: 1px solid rgb(167, 139, 250) !important;
        border-radius: 48px !important;
        width: 108px !important;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 14px;
        background-color: #7366ff !important;
        color: #fff;
        font-family: 'Manrope-Bold';
        white-space: nowrap;
    }

    .clear-filter-btn {
        padding: 16px;
        border: 1px solid rgb(163, 163, 163) !important;
        border-radius: 48px !important;
        width: 117px !important;
        color: black;
        height: 40px;
        font-size: 14px;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 68px !important;
        background-color: rgb(229 229 229 / 0%) !important;
        font-family: 'Manrope-Bold';
    }

    .map-km {
        height: 28px;
        font-size: 11px;
        padding: 4px;
        background-color: #EDE9FE;
        color: #7366FF;
        border-radius: 5px;
        border: 1px solid #7366FF;
        /* width: 70px; */
        display: flex;
        justify-content: center;
    }

    #applyFilterBtn:disabled,
    #clearFilterBtn:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }


    @media (min-width: 996px) and (max-width: 1196px) {
        #locations-container {
            flex: 0 0 10%;
        }

        #map-container {
            flex: 0 0 66%;
        }
    }

    @media (min-width: 1923px) and (max-width: 2560px) {
        #locations-container {
            flex: 0 0 13%;
        }

        #map-container {
            flex: 0 0 86%;
        }
    }

    /* Media query for screens 2560px and larger */


    @media (max-width: 1021px) {
        #map-container {
            height: 371px !important;
            width: 100% !important;
            /* margin-top: 50px !important; */
        }

        /* .map-view-new { */
        /* overflow: unset !important; */
        /* width: 300px !important; */
        /* } */

        #locations-container {
            flex: unset !important;
            /* padding-left: 0px; */
            height: unset !important;
            overflow-y: unset !important;
            margin-bottom: 20px !important;
        }

        .search-panel {
            background-color: white;
            padding: 15px;
            height: 100% !important;
            /* height: 100vh; */
            overflow-y: auto;
            width: unset !important;
        }

        .supplier-card-map {
            width: 100% !important;
        }
    }

    .dp-img {
        display: flex;
        justify-content: start;
        align-items: center;
        margin-bottom: 8px;
    }

    .img-sub {
        background-color: #fff;
        padding: 0px;
        /* box-shadow: 0 42.11px 27.86px #29489808, 0 8.91px 7.13px #29489805, 0 2.02px 3.44px #29489803; */
        border-radius: 10px;
        padding: 4px;
        /* height: 52px; */
    }

    .search-input-dash::placeholder {
        color: black;
        font-size: 14px;
        font-family: "Manrope-Bold" !important;
    }

    .search-panel .card-body {
        padding: 20px 0px 20px 0px !important;
    }

    .find-t {
        font-size: 16px;
        font-family: "Manrope-Semi" !important;

    }

    .input-map::placeholder {
        color: #a3a3a3;
        opacity: 1;
        font-size: 14px;
        font-family: "Manrope-Medium" !important;
    }

    /* Target the InfoWindow container */
    .gm-style-iw {
        background-color: #ffffff !important;
        border-radius: 8px !important;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2) !important;
        padding: 10px !important;
    }

    .gm-style .gm-style-iw-c {
        flex-direction: row-reverse !important;
    }

    /* Target the content inside the InfoWindow */
    .gm-style-iw .gm-style-iw-d {
        font-size: 14px !important;
        color: #333333 !important;
        font-weight: bold !important;
        padding: 5px !important;
        overflow: hidden !important;
        /* Hide overflow content */
        white-space: nowrap !important;
        /* Prevent text from wrapping */
        text-overflow: ellipsis !important;
        /* Add ellipsis for overflow text */
        max-width: 220px !important;
        /* Limit width to ensure truncation */
    }

    .gm-style-iw-chr {
        position: relative !important;
        bottom: 11px !important;
        border-radius: 50px !important;
        left: 14px !important;
    }

    /* Customize the close button */

    /* Adjust the arrow/tail of the InfoWindow */
    .gm-style-iw-t {
        filter: drop-shadow(0 2px 5px rgba(0, 0, 0, 0.2));
    }

    /* .services-container {
        padding-top: 30px;
    }
  */


    .viewSubcategory:nth-child(n+14) {
        display: none;
    }
    .new-dash-4{
        color:#7366ff;
    }

    /* Ensure tooltips don't block clicks */
</style>

<div class="header-dashboard-one">
  
<h1 class="new-dash-4">Available Services:</h1>
   

    <div class="controls-dashboard">
        <div class="view-controls-dashboard">
            <a href="#" id="mapIcon" data-tooltip="Map View">
                <!-- <i class="fas fa-map "></i> -->
                <img src="{{ asset('newAssets/img/dashboard/map.png') }}" class="trigger-icon icon-bg" style="    width: 100%;
    object-fit: cover;
    height: 100%;" />
            </a>
            <a href="#" id="gridIcon" data-tooltip="Grid View" style="display: none;">
                <!-- <i class="fa-solid fa-border-all icon-bg"></i> -->
                <img src="{{ asset('newAssets/img/dashboard/grid.png') }}" class="icon-bg" style="    width: 100%;
    object-fit: cover;
    height: 100%;" />
            </a>
            <button class="filter-btn" id="filterBtn">
                <img src="{{ asset('newAssets/img/dashboard/filter.png') }}" style="width:16px" />Filter
            </button>
        </div>
    </div>
</div>

<div class="container-fluid  services-container">
    <h1 class="services-title service-dash-main"></h1>
    <!-- Your existing services cards remain unchanged -->
    <div class="row gx-2">
        <div class="col" style="display: none;">
            <!-- <div class="service-card">
                <div class="service-icon">`
                    <img src="{{ asset('newAssets/img/dashboard/icons/1.png') }}" alt="CNC Machining">
                </div>
                <div class="service-name">CNC Machining</div>
                <div class="service-count">207</div>
            </div>  -->
        </div>
        <!-- Other service cards -->
    </div>


</div>
<!-- <hr  style="margin-bottom: 8px; margin-top: 8px;"/> -->
<div class="header-dashboard">
    <div class="dropdown-wrapper-dash">
        <span class="dropdown-label-dash">Show:</span>
        <select class="dropdown-select-dash" id="perPageSelect">
            <option value="8">8</option>
            <option value="16">16</option>
            <option value="32">32</option>
            <option value="64">64</option>
        </select>
        <img style="width: 20px;
        object-fit: cover;margin-left: -23px;" src="{{ asset('newAssets/img/dashboard/icons/13.png') }}" alt="CNC Machining" class="dropdown-arrow-dash">
        <!-- <div class="dropdown-arrow-dash"></div> -->
    </div>

    <div class="search-wrapper-dash">
        <div class="search-icon-dash">
            <img style="width: 20px;object-fit: cover;" src="{{ asset('newAssets/img/dashboard/icons/search.png') }}" alt="CNC Machining">
        </div>
        <input type="text" class="search-input-dash" id="searchInput" placeholder="Search">
    </div>

    <div class="controls-dashboard">
        <span class="dropdown-label-dash-one">Capacity:</span>
        <div class="availability-dashboard-header available-dashboard">Available</div>
        <div class="availability-dashboard-header weeks-dashboard">4-6 Weeks</div>
        <div class="availability-dashboard-header months-dashboard">2-3 Months</div>
        <div class="view-controls-dashboard">
        </div>
    </div>
</div>

<div class="container-fluid">


    @if(count($errors) > 0)
    @include('appLayouts.addedLayouts._alert', array('alertType' => 'error'))
    @endif

    @if(session('job_deleted'))
    @include('appLayouts.addedLayouts._alert', array('alertType' => 'success', 'message' => session('job_deleted')))
    @elseif(session('job_stored'))
    @include('appLayouts.addedLayouts._alert', array('alertType' => 'success', 'message' => session('job_stored')))
    @elseif(session('job_updated'))
    @include('appLayouts.addedLayouts._alert', array('alertType' => 'success', 'message' => session('job_updated')))
    @endif

    <div class="row g-3" id="companyRow">
        <p style="text-align: center; font-size: 20px; font-weight: 700;">Loading companies...</p>
    </div>

    <div class="view-controls-dashboard-one text-center" style="display: none;">
        <button id="viewMoreBtn" class="mx-2 view-more">View More</button>
        <button id="viewLessBtn" class="mx-2 view-less">View Less</button>
    </div>
</div>

<div class="container-fluid">
    <div class="row g-0">
        <div class="col-xl-3 location-view" id="locations-container" style="display: none;">
            <div class="card search-panel">
                <div class="d-flex align-items-center justify-content-center">

                    <h5 class="mb-0 find-t"> <img src="{{ asset('newAssets/img/dashboard/8.png') }}" style="width:20px;margin-right: 5px;margin-top: -3px;" />Find a location near you</h5>
                </div>
                <div class="card-body">
                    <div class="search-input-map mb-3">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Enter address or zip code" class="input-map">
                    </div>
                    <div class="location-list" id="location-list">
                        <!-- Location items will be populated dynamically -->
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-9 col-12" id="map-container" style="display: none;">
            <div id="map" class="map-view map-view-new"></div>
        </div>
    </div>
</div>
<div class="full-page-loader" id="fullPageLoader">
    <div class="loader"></div>
</div>
<div class="filter-card" id="filterCard">
    <div class="filter-header">
        <h2>Filters</h2>
        <button style="font-size: 12px;" class="btn-close" id="closeFilter"></button>
    </div>
    <div class="filter-section">
        <h3>Categories</h3>
        <div class="filter-tags">
            <div class="filter-tag" data-type="category" data-value="1"><i class="fas fa-plus"></i>Category 1</div>
            <div class="filter-tag" data-type="category" data-value="2"><i class="fas fa-plus"></i>Category 2</div>
            <div class="filter-tag" data-type="category" data-value="3"><i class="fas fa-plus"></i>Category 3</div>
        </div>
    </div>
    <div class="filter-section">
        <h3>Availability</h3>
        <div class="filter-tags">
            <div class="filter-tag" data-type="availability" data-value="IMMEDIATE"><i class="fas fa-plus"></i>Currently Available</div>
            <div class="filter-tag" data-type="availability" data-value="WEEKS"><i class="fas fa-plus"></i>Available in 4-6 Weeks</div>
            <div class="filter-tag" data-type="availability" data-value="MONTHS"><i class="fas fa-plus"></i>Available in 2-3 Months</div>
        </div>
    </div>
    <div class="filter-section">
        <h3>Ratings</h3>
        <div class="filter-tags">
            <div class="filter-tag" data-type="rating" data-value="4.5"><i class="fas fa-star" style="color: gold;"></i> 4.5 & Above</div>
            <div class="filter-tag" data-type="rating" data-value="4.0"><i class="fas fa-star" style="color: gold;"></i> 4.0 & Above</div>
            <div class="filter-tag" data-type="rating" data-value="3.5"><i class="fas fa-star" style="color: gold;"></i> 3.5 & Above</div>
            <div class="filter-tag" data-type="rating" data-value="3.0"><i class="fas fa-star" style="color: gold;"></i> 3.0 & Above</div>
        </div>
    </div>
    <div class="filter-section">
        <h3>Distance</h3>
        <div class="filter-tags">
            <div class="filter-tag" data-type="distance" data-value="10"><i class="fas fa-plus"></i>10 km</div>
            <div class="filter-tag" data-type="distance" data-value="45"><i class="fas fa-plus"></i>45 km</div>
            <div class="filter-tag" data-type="distance" data-value="55"><i class="fas fa-plus"></i>55 km</div>
        </div>
    </div>
    <div class="filter-actions">
        <button class="clear-filter-btn" id="clearFilterBtn">Clear</button>
        <button class="apply-filter-btn" id="applyFilterBtn">Apply Filter</button>
    </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key={{ config('constants.websiteConfigurations.googleApiKey') }}&libraries=places" async defer></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Shared Variables
        let map;
        let markers = [];
        let infoWindow;
        let locations = [];
        let allCompanies = [];
        let selectedSubcatIds = new Set();
        let activeFilters = new Set();
        let selectedDistances = new Set();
        let selectedRatings = new Set();
        let filteredCards = [];
        let initialCards = [];
        let currentPage = 1;
        let itemsPerPage = 8;

        // Initialize queryParams from backend
        const queryParams = @json(isset($queryParams) ? $queryParams : []);

        if (queryParams.catagoryIDs) {
            queryParams.catagoryIDs.forEach(id => selectedSubcatIds.add(String(id)));
        }
        if (queryParams.availablities) {
            queryParams.availablities.forEach(avail => {
                let normalizedAvail = avail.toLowerCase().replace(/\s+/g, '');
                normalizedAvail = ({
                    'available': 'IMMEDIATE',
                    '4-6weeks': 'WEEKS',
                    '2-3months': 'MONTHS'
                })[normalizedAvail] || normalizedAvail.toUpperCase();
                activeFilters.add(normalizedAvail);
            });
        }
        if (queryParams.distances) {
            queryParams.distances.forEach(dist => selectedDistances.add(dist));
        }
        if (queryParams.ratings) {
            queryParams.ratings.forEach(rating => selectedRatings.add(String(rating)));
        }

        // Loader Functions
        function showLoader() {
            const loader = document.getElementById('fullPageLoader');
            loader.classList.add('is-active');
        }

        function hideLoader() {
            setTimeout(() => {
                const loader = document.getElementById('fullPageLoader');
                loader.classList.remove('is-active');
            }, 1000);
        }

        // Filter Card Logic
        const filterBtn = document.getElementById('filterBtn');
        const filterCard = document.getElementById('filterCard');
        const closeFilter = document.getElementById('closeFilter');
        const applyFilterBtn = document.getElementById('applyFilterBtn');
        const clearFilterBtn = document.getElementById('clearFilterBtn');

        if (filterBtn) {
            filterBtn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                if (filterCard) {
                    const isActive = filterCard.classList.contains('active');
                    filterCard.classList.toggle('active');
                    filterCard.style.display = isActive ? 'none' : 'block';
                }
            });
        }

        if (closeFilter) {
            closeFilter.addEventListener('click', function(e) {
                e.stopPropagation();
                if (filterCard) {
                    filterCard.classList.remove('active');
                    filterCard.style.display = 'none';
                }
            });
        }

        if (filterCard) {
            document.addEventListener('click', function(event) {
                setTimeout(() => {
                    if (filterCard && !filterCard.contains(event.target) && event.target !== filterBtn && filterBtn && !filterBtn.contains(event.target)) {
                        filterCard.classList.remove('active');
                        filterCard.style.display = 'none';
                    }
                }, 100);
            });
        }

        if (applyFilterBtn) {
            applyFilterBtn.addEventListener('click', function() {
                showLoader();
                filterCompanies();
                if (filterCard) {
                    filterCard.classList.remove('active');
                    filterCard.style.display = 'none';
                }
            });
        }

        if (clearFilterBtn) {
            clearFilterBtn.addEventListener('click', function() {
                showLoader();
                selectedSubcatIds.clear();
                activeFilters.clear();
                selectedRatings.clear();
                selectedDistances.clear();

                const filterTags = document.querySelectorAll('.filter-tag');
                filterTags.forEach(tag => {
                    tag.classList.remove('active');
                    const icon = tag.querySelector('i');
                    icon.classList.remove('fa-check');
                    icon.classList.add(tag.getAttribute('data-type') === 'rating' ? 'fa-star' : 'fa-plus');
                    tag.style.backgroundColor = '';
                    tag.style.border = '';
                    tag.style.color = '';
                    tag.style.removeProperty('background-color');
                    tag.style.removeProperty('border');
                    tag.style.removeProperty('color');
                    tag.style.display = 'inline-block';
                    tag.offsetHeight;
                    tag.style.display = '';
                });

                // Clear active class from availability headers
                document.querySelectorAll('.availability-dashboard-header').forEach(header => {
                    header.classList.remove('active');
                });

                document.querySelectorAll('.viewSubcategory').forEach(card => {
                    const serviceCard = card.querySelector('.service-card');
                    serviceCard.classList.remove('active-subcategory');
                });

                filterCompanies();

                // Disable filter buttons after clearing
                toggleFilterButtonState();

                setTimeout(() => {
                    if (filterCard) {
                        filterCard.classList.remove('active');
                        filterCard.style.display = 'none';
                    }
                }, 100);
            });
        }

        // Function to toggle Apply and Clear button states based on active filter tags
        function toggleFilterButtonState() {
            const filterTags = document.querySelectorAll('.filter-tag');
            const hasActiveFilter = Array.from(filterTags).some(tag => tag.classList.contains('active'));

            if (applyFilterBtn) {
                applyFilterBtn.disabled = !hasActiveFilter;
            }
            if (clearFilterBtn) {
                clearFilterBtn.disabled = !hasActiveFilter;
            }
        }

        function attachFilterTagListeners() {
            const filterTags = document.querySelectorAll('.filter-tag');
            filterTags.forEach(tag => {
                const newTag = tag.cloneNode(true);
                tag.parentNode.replaceChild(newTag, tag);
                newTag.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const type = this.getAttribute('data-type');
                    const value = this.getAttribute('data-value');
                    const icon = this.querySelector('i');

                    if (!type || !value) {
                        return;
                    }

                    if (type === 'distance') {
                        // Clear all other distance filters
                        document.querySelectorAll('.filter-tag[data-type="distance"]').forEach(distanceTag => {
                            if (distanceTag !== this) {
                                distanceTag.classList.remove('active');
                                const distanceIcon = distanceTag.querySelector('i');
                                distanceIcon.classList.remove('fa-check');
                                distanceIcon.classList.add('fa-plus');
                                selectedDistances.delete(distanceTag.getAttribute('data-value'));
                            }
                        });

                        // Toggle the clicked distance filter
                        if (this.classList.contains('active')) {
                            this.classList.remove('active');
                            icon.classList.remove('fa-check');
                            icon.classList.add('fa-plus');
                            selectedDistances.delete(value);
                        } else {
                            this.classList.add('active');
                            icon.classList.remove('fa-plus');
                            icon.classList.add('fa-check');
                            selectedDistances.add(value);
                        }
                    } else {
                        // Handle other filter types (category, availability, rating) as before
                        if (this.classList.contains('active')) {
                            this.classList.remove('active');
                            icon.classList.remove('fa-check');
                            icon.classList.add(type === 'rating' ? 'fa-star' : 'fa-plus');
                            if (type === 'category') {
                                selectedSubcatIds.delete(value);
                                const subcatCard = document.querySelector(`.viewSubcategory[data-subcatid="${value}"]`);
                                if (subcatCard) {
                                    subcatCard.querySelector('.service-card').classList.remove('active-subcategory');
                                }
                            } else if (type === 'availability') {
                                activeFilters.delete(value);
                                const headerClass = ({
                                    'IMMEDIATE': 'available-dashboard',
                                    'WEEKS': 'weeks-dashboard',
                                    'MONTHS': 'months-dashboard'
                                })[value] || value.toLowerCase() + '-dashboard';
                                const availabilityHeader = document.querySelector(`.availability-dashboard-header.${headerClass}`);
                                if (availabilityHeader) {
                                    availabilityHeader.classList.remove('active');
                                }
                            } else if (type === 'rating') {
                                selectedRatings.delete(value);
                            }
                        } else {
                            this.classList.add('active');
                            icon.classList.remove(type === 'rating' ? 'fa-star' : 'fa-plus');
                            icon.classList.add('fa-check');
                            if (type === 'category') {
                                selectedSubcatIds.add(value);
                                const subcatCard = document.querySelector(`.viewSubcategory[data-subcatid="${value}"]`);
                                if (subcatCard) {
                                    subcatCard.querySelector('.service-card').classList.add('active-subcategory');
                                }
                            } else if (type === 'availability') {
                                activeFilters.add(value);
                                const headerClass = ({
                                    'IMMEDIATE': 'available-dashboard',
                                    'WEEKS': 'weeks-dashboard',
                                    'MONTHS': 'months-dashboard'
                                })[value] || value.toLowerCase() + '-dashboard';
                                const availabilityHeader = document.querySelector(`.availability-dashboard-header.${headerClass}`);
                                if (availabilityHeader) {
                                    availabilityHeader.classList.add('active');
                                }
                            } else if (type === 'rating') {
                                selectedRatings.add(value);
                            }
                        }
                    }

                    toggleFilterButtonState();
                });
            });
        }

        function initMap() {
            const mapElement = document.getElementById('map');
            if (!mapElement) {
                return;
            }

            try {
                map = new google.maps.Map(mapElement, {
                    zoom: 2,
                    center: {
                        lat: 0,
                        lng: 0
                    },
                });
                infoWindow = new google.maps.InfoWindow();

                const mapContainer = document.getElementById('map-container');
                mapContainer.style.display = 'none';
                mapContainer.style.width = '100%';
                mapContainer.style.height = '';
                mapElement.style.width = '100%';
                mapElement.style.height = '100%';

                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(
                        position => {
                            const userPos = {
                                lat: position.coords.latitude,
                                lng: position.coords.longitude
                            };
                            map.setCenter(userPos);
                            map.setZoom(10);
                            if (locations.length > 0) {
                                updateMapMarkers();
                            }
                        },
                        () => {
                            if (locations.length > 0) {
                                updateMapMarkers();
                            } else {
                                map.setCenter({
                                    lat: 51.5074,
                                    lng: -0.1278
                                });
                                map.setZoom(10);
                            }
                        }
                    );
                } else if (locations.length > 0) {
                    updateMapMarkers();
                } else {
                    map.setCenter({
                        lat: 51.5074,
                        lng: -0.1278
                    });
                    map.setZoom(10);
                }
            } catch (error) {}
        }

        function createMarkerElement(index, isSelected) {
            const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
            svg.setAttribute('width', '32');
            svg.setAttribute('height', '41');
            svg.setAttribute('viewBox', '0 0 32 41');
            svg.innerHTML = `
        <path d="M30 0C31.1046 0 32 0.895431 32 2V30C32 31.1046 31.1046 32 30 32H21.8867L16 40.667L10.1133 32H2C0.895431 32 0 31.1046 0 30V2C0 0.895431 0.895431 0 2 0H30Z" fill="#7366FF" stroke="${isSelected ? '#ffffff' : 'none'}" stroke-width="2"/>
        <text x="16" y="22" font-size="16" font-weight="bold" text-anchor="middle" fill="#ffffff">${index + 1}</text>
    `;
            return svg;
        }

        function highlightMarker(selectedIndex) {
            markers.forEach((marker, index) => {
                const isSelected = index === selectedIndex;
                if (google.maps.marker && google.maps.marker.AdvancedMarkerElement) {
                    marker.content = createMarkerElement(index, isSelected);
                } else {
                    marker.setIcon({
                        url: 'data:image/svg+xml;charset=UTF-8,' + encodeURIComponent(`
                    <svg width="32" height="41" viewBox="0 0 32 41" xmlns="http://www.w3.org/2000/svg">
                        <path d="M30 0C31.1046 0 32 0.895431 32 2V30C32 31.1046 31.1046 32 30 32H21.8867L16 40.667L10.1133 32H2C0.895431 32 0 31.1046 0 30V2C0 0.895431 0.895431 0 2 0H30Z" fill="#7366FF"/>
                        <text x="16" y="22" font-size="16" font-weight="bold" text-anchor="middle" fill="#ffffff">${index + 1}</text>
                    </svg>
                `),
                        scaledSize: new google.maps.Size(32, 41)
                    });
                }
                marker.map = isSelected ? map : null;
            });
        }

        function updateMapMarkers(selectedIndex = null) {
            markers.forEach(marker => marker.map = null);
            markers = [];

            const filteredLocations = locations.filter(location => {
                const matchesSubcat = selectedSubcatIds.size === 0 || location.subCatagoryIDs?.some(id => selectedSubcatIds.has(String(id)));
                let availStatus = location.companyAvailablityStatus?.toLowerCase().replace(/\s+/g, '') || '';
                availStatus = ({
                    'available': 'IMMEDIATE',
                    '4-6weeks': 'WEEKS',
                    '2-3months': 'MONTHS'
                })[availStatus] || availStatus.toUpperCase();
                const matchesAvailability = activeFilters.size === 0 || activeFilters.has(availStatus);
                const matchesDistance = selectedDistances.size === 0 || selectedDistances.has(getDistanceRange(location.distanceInKm));
                const matchesRating = selectedRatings.size === 0 || selectedRatings.has(String(Math.floor(location.rating || 0)));
                return matchesSubcat && matchesAvailability && matchesDistance && matchesRating;
            });

            const validLocations = filteredLocations.filter(location => {
                const lat = parseFloat(location.lat);
                const lng = parseFloat(location.lng);
                const isValid = !isNaN(lat) && !isNaN(lng) && lat >= -90 && lat <= 90 && lng >= -180 && lng <= 180;
                return isValid;
            });

            const locationList = document.getElementById('location-list');
            locationList.innerHTML = '';

            if (validLocations.length === 0) {
                map.setCenter({
                    lat: 51.5074,
                    lng: -0.1278
                });
                map.setZoom(10);
                locationList.innerHTML = `
            <div class="no-results-message text-center p-4">
                <i class="fas fa-exclamation-triangle fa-2x mb-3 text-warning"></i>
                <h5>No location data available</h5>
                <p>Please contact support to update company locations.</p>
            </div>
        `;
                return;
            }

            validLocations.forEach((location, index) => {
                let marker;
                try {
                    if (google.maps.marker && google.maps.marker.AdvancedMarkerElement) {
                        marker = new google.maps.marker.AdvancedMarkerElement({
                            position: {
                                lat: parseFloat(location.lat),
                                lng: parseFloat(location.lng)
                            },
                            map: selectedIndex === null || index === selectedIndex ? map : null,
                            title: location.name,
                            content: createMarkerElement(index, selectedIndex === index)
                        });
                    } else {
                        marker = new google.maps.Marker({
                            position: {
                                lat: parseFloat(location.lat),
                                lng: parseFloat(location.lng)
                            },
                            map: selectedIndex === null || index === selectedIndex ? map : null,
                            title: location.name,
                            icon: {
                                url: 'data:image/svg+xml;charset=UTF-8,' + encodeURIComponent(`
                            <svg width="32" height="41" viewBox="0 0 32 41" xmlns="http://www.w3.org/2000/svg">
                                <path d="M30 0C31.1046 0 32 0.895431 32 2V30C32 31.1046 31.1046 32 30 32H21.8867L16 40.667L10.1133 32H2C0.895431 32 0 31.1046 0 30V2C0 0.895431 0.895431 0 2 0H30Z" fill="#7366FF"/>
                                <text x="16" y="22" font-size="16" font-weight="bold" text-anchor="middle" fill="#ffffff">${index + 1}</text>
                            </svg>
                        `),
                                scaledSize: new google.maps.Size(32, 41)
                            }
                        });
                    }
                } catch (error) {
                    return;
                }

                markers.push(marker);

                marker.addListener('click', () => {
                    infoWindow.setContent(location.name);
                    infoWindow.open(map, marker);
                    map.setCenter(marker.position);
                    map.setZoom(12);
                    highlightMarker(index);
                });

                const imgSrc = location.imgassets || '{{ asset("newAssets/img/dashboard/12.avif") }}';
                const availabilityClass = location.companyAvailablityStatus === 'IMMEDIATE' ? 'available-dashboard' :
                    location.companyAvailablityStatus === 'WEEKS' ? 'weeks-dashboard' :
                    location.companyAvailablityStatus === 'MONTHS' ? 'months-dashboard' :
                    !location.companyAvailablityStatus ? 'nodata-dashboard' : 'available-dashboard';
                const availabilityText = location.companyAvailablityStatus === 'IMMEDIATE' ? 'Available' :
                    location.companyAvailablityStatus === 'WEEKS' ? '4-6 weeks' :
                    location.companyAvailablityStatus === 'MONTHS' ? '2-3 months' :
                    !location.companyAvailablityStatus ? 'N/A' : 'Available';

                locationList.innerHTML += `
            <div class="supplier-card-map p-3 h-100 location-item"
                data-lat="${location.lat}"
                data-lng="${location.lng}"
                data-name="${location.name}"
                data-index="${index}">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="d-flex align-items-center">
                        <span class="index-number">${index + 1}</span>
                    </div>
                    <h5 class="mb-0 map-km">
                        <img src="{{ asset('newAssets/img/dashboard/6.png') }}" style="width:16px;margin-right: 2px;"/>
                        <span style="display: inline-block;padding: 2px 1px;color: #7366ff">${location.distanceInKm || 'N/A'}</span>
                    </h5>
                </div>
                <h5 class="mb-2" style="font-size: 16px; font-family: 'Manrope-Bold';">
                    <div class="dp-img">
                        <div class="company-name-dashboard" data-tooltip="${location.name}">${truncateName(location.name)}</div>
                    </div>
                </h5>
                <div class="mb-2">
                    <span  class="supplier-badge top-rated-map me-2">
                        <div class="rating-dashboard">
                            <div class="star-dashboard">
                                <img src="{{ asset('newAssets/img/dashboard/7.png') }}" style="width:16px;margin-top: -3px;"/>
                                <span class="rating-value" style=";color: black;">
                                    ${location.rating || 'N/A'}
                                </span>
                            </div>
                        </div>
                    </span>
                    <span class="supplier-badge">
                        <div class="${availabilityClass}">${availabilityText}</div>
                    </span>
                </div>
                <div class="supplier-contact-info mb-2">
                    <img src="{{ asset('newAssets/img/dashboard/mapicons/1.png') }}" style="width:16px"/><span style="margin-left: 4px;font-size: 14px;">${location.phone1 || location.contactNumber || '0044 79610087'}</span>
                </div>
                <div class="supplier-contact-info mb-2">
                    <img src="{{ asset('newAssets/img/dashboard/mapicons/2.png') }}" style="width:16px"/><span style="margin-left: 4px;font-size: 14px;">${location.phone2 || '0044 1480759133'}</span>
                </div>
                <div class="supplier-contact-info mb-2">
                    <img src="{{ asset('newAssets/img/dashboard/mapicons/3.png') }}" style="width:16px"/><span style="margin-left: 4px;width: 220px;font-size: 14px;">${location.email || 'info@praxmarket.com'}</span>
                </div>
                <div class="hr-map" style="padding-bottom: 10px;"></div>
                <div class="mt-auto" style="border-top: 1px solid #A3A3A3;padding-top: 16px;">
                    <div class="row g-2">
                        <div class="col-12">
                            <button class="chat-btn-map btn-purple-map w-100" companyid="${location.id}">
                                Profile
                            </button>
                        </div>
                        
                    </div>
                </div>
            </div>
        `;
            });

            if (markers.length > 0 && selectedIndex === null) {
                const bounds = new google.maps.LatLngBounds();
                markers.forEach(marker => bounds.extend(marker.position));
                map.fitBounds(bounds);
            } else if (selectedIndex !== null && markers[selectedIndex]) {
                map.setCenter(markers[selectedIndex].position);
                map.setZoom(12);
                const customContent = `
        <div class="info-window-content">
            <div class="info-window-header">
                <span class="info-window-name">${truncateName(validLocations[selectedIndex].name || 'N/A')}</span>
            </div>
        </div>
    `;
                infoWindow.setContent(customContent);
                infoWindow.open(map, markers[selectedIndex]);
            }

            google.maps.event.trigger(map, 'resize');
            attachLocationItemHandlers();
        }

        function getDistanceRange(distance) {
            const dist = parseFloat(distance) || 0;
            if (dist <= 10) return '10';
            if (dist <= 45) return '45';
            return '55';
        }

        function truncateName(name) {
            if (name.length > 30) {
                return name.substring(0, 17) + '...';
            }
            return name;
        }

        function filterCompanies() {
            const normalizedAvailabilities = Array.from(activeFilters).map(filter => ({
                'available': 'IMMEDIATE',
                '4-6weeks': 'WEEKS',
                '2-3months': 'MONTHS'
            })[filter.toLowerCase().replace(/\s+/g, '')] || filter.toUpperCase());

            const data = {
                catagoryIDs: Array.from(selectedSubcatIds),
                availablities: normalizedAvailabilities,
                distances: Array.from(selectedDistances),
                ratings: Array.from(selectedRatings)
            };

            showLoader();
            $.ajax({
                url: '{{ route("getCompanies") }}',
                method: 'GET',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: data,
                success: function(response) {
                    const companyRow = document.getElementById('companyRow');
                    const locationList = document.getElementById('location-list');
                    companyRow.innerHTML = '';

                    allCompanies = response.companies || [];
                    locations = response.companies.map((company, index) => {
                        const lat = parseFloat(company.lattitude || company.latitude || company.lat);
                        const lng = parseFloat(company.longitude || company.lng);
                        const isValid = !isNaN(lat) && !isNaN(lng) && lat >= -90 && lat <= 90 && lng >= -180 && lng <= 180;
                        if (!isValid) {
                            return {
                                ...company,
                                lat: '51.5074',
                                lng: '-0.1278',
                                isFallback: true
                            };
                        }
                        return {
                            ...company,
                            lat: (company.lattitude || company.latitude || company.lat).toString(),
                            lng: (company.longitude || company.lng).toString(),
                            distanceInKm: company.distanceFromYou || null
                        };
                    });

                    if (response.companies && response.companies.length > 0) {
                        response.companies.forEach((company, index) => {
                            const lat = parseFloat(company.lattitude || company.latitude || company.lat);
                            const lng = parseFloat(company.longitude || company.lng);
                            const isValid = !isNaN(lat) && !isNaN(lng) && lat >= -90 && lat <= 90 && lng >= -180 && lng <= 180;
                            const imgSrc = company.imgassets || '{{ asset("newAssets/img/dashboard/default_company.jpg") }}';
                            const availabilityClass = company.companyAvailablityStatus === 'IMMEDIATE' ? 'available-dashboard' :
                                company.companyAvailablityStatus === 'WEEKS' ? 'weeks-dashboard' :
                                company.companyAvailablityStatus === 'MONTHS' ? 'months-dashboard' :
                                !company.companyAvailablityStatus ? 'nodata-dashboard' : 'available-dashboard';
                            const availabilityText = company.companyAvailablityStatus === 'IMMEDIATE' ? 'Available' :
                                company.companyAvailablityStatus === 'WEEKS' ? '4-6 weeks' :
                                company.companyAvailablityStatus === 'MONTHS' ? '2-3 months' :
                                !company.companyAvailablityStatus ? 'N/A' : 'Available';
                            const tooltipText = company.companyAvailablityStatus === 'IMMEDIATE' ? 'Currently Available' :
                                company.companyAvailablityStatus === 'WEEKS' ? 'Available in 4-6 Weeks' :
                                company.companyAvailablityStatus === 'MONTHS' ? 'Available in 2-3 Months' :
                                !company.companyAvailablityStatus ? 'No Availability Data' : 'Currently Available';

                            companyRow.innerHTML += `
                        <div class="col-lg-3 col-md-4 col-sm-12 viewCompany pointer" companyid="${company.id}" data-name="${company.name}" data-availability="${company.companyAvailablityStatus || 'IMMEDIATE'}">
                            <div class="company-card-dashboard">
                                <div class="location-badge-dashboard">
                                    <img src="{{ asset('newAssets/img/dashboard/8.png') }}" style="width: 20px;height: 20px; margin-right: 4px" alt="">
                                    <span style="color:black;margin-top:1px;font-family: 'Manrope-Bold';">${company.distanceInKm || 'N/A'} km</span>
                                </div>
                                <div class="favorite-dashboard">
                                    <div class="card-header" style="padding-top: 10px;">
                                        <p class="companyActionUpdate" id="companyActionUpdate">
                                            <a href="javascript:void(0)" class="bookmark-link bs-tooltip" 
                                               data-company-id="${company.id}" 
                                               data-bookmarked="${company.bookmarked ? 'true' : 'false'}" 
                                               data-bs-toggle="tooltip" 
                                               data-bs-placement="top" 
                                               title="${company.bookmarked ? 'Remove Bookmark' : 'Add Bookmark'}">
                                                <div class="favorite-dashboard-icon ${company.bookmarked ? 'active' : ''}">
                                                    <img src="{{ asset('newAssets/img/dashboard/icons/hand.png') }}" style="width: 18px; object-fit: cover;">
                                                </div>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <img src="${imgSrc}" alt="${company.name}" class="company-img-dashboard">
                                <div class="company-info-dashboard">
                                    <div class="company-name-dashboard" data-tooltip="${company.name}">${truncateName(company.name)}</div>
                                    <div class="d-flex justify-content-between" style="margin-top: 12px;">
                                        <div class="rating-dashboard rating-container rating-container-sharp">
                                        <div class="star-dashboard">
                                            <img src="{{ asset('newAssets/img/dashboard/7.png') }}" style="width:16px;margin-top: -3px;"/>
                                            <span data-reviews="${company.reviews || "N/A"}">
                                                <span class="rating-value" style="color:black">${company.reviews ? company.reviews.toFixed(1) : 'N/A'}</span>
                                            </span>
                                        </div>
                                    </div>
                                        <div class="availability-dashboard availability-dashboard-sharp ${availabilityClass} bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" data-original-title="${tooltipText}">${availabilityText}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                        });

                        initialCards = Array.from(companyRow.querySelectorAll('.viewCompany'));
                        filteredCards = [...initialCards];
                        updateMapMarkers();
                        currentPage = 1;
                        itemsPerPage = parseInt(perPageSelect.value) || 8;
                        searchInput.value = '';
                        displayCards();

                        document.querySelector('.view-controls-dashboard-one').style.display = response.companies.length > itemsPerPage ? 'block' : 'none';
                    } else {
                        companyRow.innerHTML = '<p style="text-align: center; font-size: 20px; font-weight: 700;">No Companies found</p>';
                        locationList.innerHTML = '<div class="no-results-message text-center p-4"><i class="fas fa-search fa-2x mb-3 text-muted"></i><h5>No companies found</h5></div>';
                        initialCards = [];
                        filteredCards = [];
                        updateMapMarkers();
                        document.querySelector('.view-controls-dashboard-one').style.display = 'none';
                        document.getElementById('viewMoreBtn').style.display = 'none';
                        document.getElementById('viewLessBtn').style.display = 'none';
                    }

                    if (response.subcatagories && response.subcatagories.length > 0) {
                        const categoryTags = $('.filter-section h3:contains("Categories") + .filter-tags');
                        categoryTags.html(response.subcatagories.map(subcategory => `
                    <div class="filter-tag ${selectedSubcatIds.has(String(subcategory.id)) ? 'active' : ''}" data-type="category" data-value="${subcategory.id}">
                        <i class="fas ${selectedSubcatIds.has(String(subcategory.id)) ? 'fa-check' : 'fa-plus'}"></i>${subcategory.name}
                    </div>
                `).join(''));
                        attachFilterTagListeners();
                    }

                    document.querySelectorAll('.viewSubcategory').forEach(card => {
                        const subcatId = card.getAttribute('data-subcatid');
                        const serviceCard = card.querySelector('.service-card');
                        if (selectedSubcatIds.has(subcatId)) {
                            serviceCard.classList.add('active-subcategory');
                        } else {
                            serviceCard.classList.remove('active-subcategory');
                        }
                    });

                    toggleFilterButtonState();

                    attachLocationItemHandlers();
                    hideLoader();
                },
                error: function(xhr, status, error) {
                    document.getElementById('companyRow').innerHTML = '<p style="text-align: center; font-size: 20px; font-weight: 700;">Failed to load companies.</p>';
                    document.getElementById('location-list').innerHTML = '<div class="no-results-message text-center p-4"><i class="fas fa-search fa-2x mb-3 text-muted"></i><h5>Failed to load locations</h5></div>';
                    initialCards = [];
                    filteredCards = [];
                    updateMapMarkers();
                    document.querySelector('.view-controls-dashboard-one').style.display = 'none';
                    document.getElementById('viewMoreBtn').style.display = 'none';
                    document.getElementById('viewLessBtn').style.display = 'none';
                    hideLoader();
                }
            });
        }

        // Updated displayCards Function
        function displayCards() {
            const companyRow = document.getElementById('companyRow');
            let companyCards = companyRow.querySelectorAll('.viewCompany');

            // Verify viewLessBtn exists
            const viewLessBtn = document.getElementById('viewLessBtn');

            // Restore filteredCards to DOM if companyCards length doesn't match filteredCards
            if (companyCards.length !== filteredCards.length && filteredCards.length > 0) {
                companyRow.innerHTML = '';
                filteredCards.forEach(card => {
                    companyRow.appendChild(card);
                });
                companyCards = companyRow.querySelectorAll('.viewCompany');
            }

            // Hide all cards initially
            companyCards.forEach(card => card.style.display = 'none');

            // If no filtered cards, show "No Companies found"
            if (filteredCards.length === 0) {
                companyRow.innerHTML = '<p style="text-align: center; font-size: 20px; font-weight: 700;">No Companies found</p>';
                const viewControls = document.querySelector('.view-controls-dashboard-one');
                if (viewControls) viewControls.style.display = 'none';
                const viewMoreBtn = document.getElementById('viewMoreBtn');
                if (viewMoreBtn) viewMoreBtn.style.display = 'none';
                if (viewLessBtn) viewLessBtn.style.display = 'none';
                return;
            }

            // Calculate cards to show based on pagination
            const startIndex = (currentPage - 1) * itemsPerPage;
            const endIndex = startIndex + itemsPerPage;
            const cardsToShow = filteredCards.slice(startIndex, endIndex);

            // If no cards to show for current page, reset to page 1
            if (cardsToShow.length === 0 && filteredCards.length > 0) {
                currentPage = 1;
                displayCards();
                return;
            }

            // Show the filtered cards
            cardsToShow.forEach(card => {
                card.style.display = 'block';
            });

            // Update view controls visibility, but only if in grid view
            const viewControls = document.querySelector('.view-controls-dashboard-one');
            const viewMoreBtn = document.getElementById('viewMoreBtn');
            const mapContainer = document.getElementById('map-container');

            // Check if in map view
            const isMapView = mapContainer && mapContainer.style.display === 'block';

            if (isMapView) {
                // In map view, ensure controls and buttons remain hidden
                if (viewControls) {
                    viewControls.style.display = 'none';
                }
                if (viewMoreBtn) {
                    viewMoreBtn.style.display = 'none';
                }
                if (viewLessBtn) {
                    viewLessBtn.style.display = 'none';
                }
            } else {
                // In grid view, apply pagination logic
                if (companyCards.length === 0) {
                    if (viewControls) viewControls.style.display = 'none';
                    if (viewMoreBtn) viewMoreBtn.style.display = 'none';
                    if (viewLessBtn) viewLessBtn.style.display = 'none';
                } else {
                    if (viewControls) {
                        viewControls.style.display = (filteredCards.length > itemsPerPage || itemsPerPage > 8) ? 'block' : 'none';
                    }
                    if (viewMoreBtn) {
                        viewMoreBtn.style.display = endIndex < filteredCards.length ? 'inline-block' : 'none';
                    }
                    if (viewLessBtn) {
                        viewLessBtn.style.display = itemsPerPage > 8 ? 'inline-block' : 'none';
                    }
                }
            }
        }

        function attachLocationItemHandlers() {
            document.querySelectorAll('.location-item').forEach(item => {
                item.addEventListener('click', function() {
                    const lat = parseFloat(item.getAttribute('data-lat'));
                    const lng = parseFloat(item.getAttribute('data-lng'));
                    const index = parseInt(item.getAttribute('data-index'));

                    if (isNaN(lat) || isNaN(lng)) {
                        return;
                    }

                    if (mapContainer.style.display !== 'block') {
                        mapContainer.style.display = 'block';
                        locationsContainer.style.display = 'block';
                        document.getElementById('companyRow').style.display = 'none';
                        mapIcon.style.display = 'none';
                        gridIcon.style.display = 'inline-flex';
                        triggerIcon.classList.add('rotated');
                        document.querySelectorAll('.availability-dashboard-header').forEach(filter => filter.style.display = 'none');
                        document.querySelector('.view-controls-dashboard-one').style.display = 'none';
                        google.maps.event.trigger(map, 'resize');
                    }

                    updateMapMarkers(index);
                });
            });
        }

        showLoader();
        const initialData = queryParams.catagoryIDs || queryParams.availablities || queryParams.distances || queryParams.ratings ? {
            catagoryIDs: Array.from(selectedSubcatIds),
            availablities: Array.from(activeFilters),
            distances: Array.from(selectedDistances),
            ratings: Array.from(selectedRatings)
        } : {};

        $.ajax({
            url: '{{ route("getCompanies") }}',
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: initialData,
            success: function(response) {
                const companyRow = document.getElementById('companyRow');
                const locationList = document.getElementById('location-list');
                const subcategoryRow = document.querySelector('.services-container .row:nth-child(2)');
                companyRow.innerHTML = '';

                allCompanies = response.companies || [];
                locations = response.companies.map((company, index) => {
                    const lat = parseFloat(company.lattitude || company.latitude || company.lat);
                    const lng = parseFloat(company.longitude || company.lng);
                    const isValid = !isNaN(lat) && !isNaN(lng) && lat >= -90 && lat <= 90 && lng >= -180 && lng <= 180;
                    if (!isValid) {
                        return {
                            ...company,
                            lat: '51.5074',
                            lng: '-0.1278',
                            isFallback: true
                        };
                    }
                    return {
                        ...company,
                        lat: (company.lattitude || company.latitude || company.lat).toString(),
                        lng: (company.longitude || company.lng).toString(),
                        distanceInKm: company.distanceFromYou || null
                    };
                });

                if (response.companies && response.companies.length > 0) {
                    response.companies.forEach((company, index) => {
                        const lat = parseFloat(company.lattitude || company.latitude || company.lat);
                        const lng = parseFloat(company.longitude || company.lng);
                        const isValid = !isNaN(lat) && !isNaN(lng) && lat >= -90 && lat <= 90 && lng >= -180 && lng <= 180;
                        const imgSrc = company.imgassets || '{{ asset("newAssets/img/dashboard/12.avif") }}';
                        const availabilityClass = company.companyAvailablityStatus === 'IMMEDIATE' ? 'available-dashboard' :
                            company.companyAvailablityStatus === 'WEEKS' ? 'weeks-dashboard' :
                            company.companyAvailablityStatus === 'MONTHS' ? 'months-dashboard' :
                            !company.companyAvailablityStatus ? 'nodata-dashboard' : 'available-dashboard';
                        const availabilityText = company.companyAvailablityStatus === 'IMMEDIATE' ? 'Available' :
                            company.companyAvailablityStatus === 'WEEKS' ? '4-6 weeks' :
                            company.companyAvailablityStatus === 'MONTHS' ? '2-3 months' :
                            !company.companyAvailablityStatus ? 'N/A' : 'Available';
                        const tooltipText = company.companyAvailablityStatus === 'IMMEDIATE' ? 'Currently Available' :
                            company.companyAvailablityStatus === 'WEEKS' ? 'Available in 4-6 Weeks' :
                            company.companyAvailablityStatus === 'MONTHS' ? 'Available in 2-3 Months' :
                            !company.companyAvailablityStatus ? 'No Availability Data' : 'Currently Available';

                        companyRow.innerHTML += `
                    <div class="col-lg-3 col-md-4 col-sm-12 viewCompany pointer" companyid="${company.id}" data-name="${company.name}" data-availability="${company.companyAvailablityStatus || 'IMMEDIATE'}">
                        <div class="company-card-dashboard">
                            <div class="location-badge-dashboard">
                                <img src="{{ asset('newAssets/img/dashboard/8.png') }}" style="width: 20px;height: 20px; margin-right: 4px;" alt="">
                                <span style="color:black;margin-top:1px;font-family: 'Manrope-Bold';">${company.distanceInKm || 'N/A'} km</span>
                            </div>
                            <div class="favorite-dashboard">
                                <div class="card-header" style="padding-top: 10px;">
                                    <p class="companyActionUpdate" id="companyActionUpdate">
                                        <a href="javascript:void(0)" class="bookmark-link bs-tooltip" 
                                           data-company-id="${company.id}" 
                                           data-bookmarked="${company.bookmarked ? 'true' : 'false'}" 
                                           data-bs-toggle="tooltip" 
                                           data-bs-placement="top" 
                                           title="${company.bookmarked ? 'Remove Bookmark' : 'Add Bookmark'}">
                                            <div class="favorite-dashboard-icon ${company.bookmarked ? 'active' : ''}">
                                                <img src="{{ asset('newAssets/img/dashboard/icons/hand.png') }}" style="width: 18px; object-fit: cover;">
                                            </div>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div> 
                              <img src="${imgSrc}" alt="${company.name}" class="company-img-dashboard">
                            </div>

                          
                            <div class="company-info-dashboard">
                                <div class="company-name-dashboard" data-tooltip="${company.name}">${truncateName(company.name)}</div>
                                <div class="d-flex justify-content-between" style="margin-top: 12px;">
                                    <div class="rating-dashboard rating-container rating-container-sharp">
                                        <div class="star-dashboard">
                                            <img src="{{ asset('newAssets/img/dashboard/7.png') }}" style="width:16px;margin-top: -3px;"/>
                                            <span data-reviews="${company.reviews || "N/A"}">
                                                <span class="rating-value" style="color:black">${company.reviews ? company.reviews.toFixed(1) : 'N/A'}</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="availability-dashboard availability-dashboard-sharp ${availabilityClass} bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" data-original-title="${tooltipText}">${availabilityText}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                    });

                    initialCards = Array.from(companyRow.querySelectorAll('.viewCompany'));
                    filteredCards = [...initialCards];
                    displayCards();

                    if (response.companies.length > itemsPerPage) {
                        document.querySelector('.view-controls-dashboard-one').style.display = 'block';
                    }
                } else {
                    companyRow.innerHTML = '<p style="text-align: center; font-size: 20px; font-weight: 700;">No Companies found</p>';
                    locationList.innerHTML = '<div class="no-results-message text-center p-4"><i class="fas fa-search fa-2x mb-3 text-muted"></i><h5>No companies found</h5></div>';
                    initialCards = [];
                    filteredCards = [];
                    document.querySelector('.view-controls-dashboard-one').style.display = 'none';
                    document.getElementById('viewMoreBtn').style.display = 'none';
                    document.getElementById('viewLessBtn').style.display = 'none';
                }

                if (response.subcatagories && response.subcatagories.length > 0) {
                    response.subcatagories.forEach(function(subcategory, index) {
                        const imageIndex = index < 10 ? index + 1 : 1;

                        let itemCount = 0;
                        const itemsPerRow = 6; // Adjust based on your grid (e.g., 6 for col-lg-2, 4 for col-md-3)
                        const maxRows = 2;
                        const maxItems = itemsPerRow * maxRows;

                        subcategoryRow.innerHTML += `
    <div class="col-md-3 col-lg-2 viewSubcategory pointer ${itemCount >= maxItems ? 'hidden' : ''}" style="margin-bottom:15px;" data-subcatid="${subcategory.id || ''}">
        <div class="service-card ${selectedSubcatIds.has(String(subcategory.id)) ? 'active-subcategory' : ''}">
            <div class="service-name">${subcategory.name}</div>
            <div class="service-icon">
                ${subcategory.path 
                    ? `<img class="img-sub" src="${subcategory.path}" alt="${subcategory.name}">`
                    : `<img class="img-sub" src="{{ asset('newAssets/img/dashboard/icons/icons2') }}/${imageIndex}.png" alt="${subcategory.name}">`
                }
            </div>
            <div class="service-count">${subcategory.availableCompaniesCount || 0}</div>
        </div>
    </div>
`;
                        itemCount++;
                    });

                    document.querySelector('.services-container').addEventListener('click', function(event) {
                        const card = event.target.closest('.viewSubcategory');
                        if (card) {
                            const subcatId = card.getAttribute('data-subcatid');
                            if (subcatId) {
                                showLoader();
                                const serviceCard = card.querySelector('.service-card');
                                if (selectedSubcatIds.has(subcatId)) {
                                    selectedSubcatIds.delete(subcatId);
                                    serviceCard.classList.remove('active-subcategory');
                                    const filterTag = document.querySelector(`.filter-tag[data-type="category"][data-value="${subcatId}"]`);
                                    if (filterTag) {
                                        filterTag.classList.remove('active');
                                        const icon = filterTag.querySelector('i');
                                        icon.classList.remove('fa-check');
                                        icon.classList.add('fa-plus');
                                    }
                                } else {
                                    selectedSubcatIds.add(subcatId);
                                    serviceCard.classList.add('active-subcategory');
                                    const filterTag = document.querySelector(`.filter-tag[data-type="category"][data-value="${subcatId}"]`);
                                    if (filterTag) {
                                        filterTag.classList.add('active');
                                        const icon = filterTag.querySelector('i');
                                        icon.classList.remove('fa-plus');
                                        icon.classList.add('fa-check');
                                    }
                                }
                                filterCompanies();
                                toggleFilterButtonState();
                            }
                        }
                    });
                } else {
                    subcategoryRow.innerHTML = '<p style="text-align: center; font-size: 20px; font-weight: 700;">No Subcategories available.</p>';
                }

                if (response.subcatagories && response.subcatagories.length > 0) {
                    const categoryTags = $('.filter-section h3:contains("Categories") + .filter-tags');
                    categoryTags.html(response.subcatagories.map(subcategory => `
                <div class="filter-tag ${selectedSubcatIds.has(String(subcategory.id)) ? 'active' : ''}" data-type="category" data-value="${subcategory.id}">
                    <i class="fas ${selectedSubcatIds.has(String(subcategory.id)) ? 'fa-check' : 'fa-plus'}"></i>${subcategory.name}
                </div>
            `).join(''));
                    attachFilterTagListeners();
                }

                toggleFilterButtonState();

                initMap();
                attachLocationItemHandlers();
                hideLoader();
            },
            error: function(xhr, status, error) {
                document.getElementById('companyRow').innerHTML = '<p style="text-align: center; font-size: 20px; font-weight: 700;">Failed to load companies.</p>';
                document.getElementById('location-list').innerHTML = '<div class="no-results-message text-center p-4"><i class="fas fa-search fa-2x mb-3 text-muted"></i><h5>Failed to load locations</h5></div>';
                document.querySelector('.services-container .row:nth-child(2)').innerHTML = '<p style="text-align: center; font-size: 20px; font-weight: 700;">No Subcategories available.</p>';
                initialCards = [];
                filteredCards = [];
                initMap();
                document.querySelector('.view-controls-dashboard-one').style.display = 'none';
                document.getElementById('viewMoreBtn').style.display = 'none';
                document.getElementById('viewLessBtn').style.display = 'none';
                hideLoader();
            }
        });

        const mapIcon = document.getElementById('mapIcon');
        const gridIcon = document.getElementById('gridIcon');
        const mapContainer = document.getElementById('map-container');
        const locationsContainer = document.getElementById('locations-container');
        const triggerIcon = mapIcon.querySelector('.trigger-icon');

        if (mapIcon) {
            mapIcon.addEventListener('click', function(e) {
                e.preventDefault();
                showLoader();
                document.getElementById('companyRow').style.display = 'none';
                mapContainer.style.display = 'block';
                locationsContainer.style.display = 'block';
                mapIcon.style.display = 'none';
                gridIcon.style.display = 'inline-flex';
                triggerIcon.classList.add('rotated');
                const dropdownWrapper = document.querySelector('.dropdown-wrapper-dash');
                const searchWrapper = document.querySelector('.search-wrapper-dash');
                if (dropdownWrapper) {
                    dropdownWrapper.style.display = 'none';
                }
                if (searchWrapper) {
                    searchWrapper.style.display = 'none';
                }
                const viewMoreBtn = document.getElementById('viewMoreBtn');
                const viewLessBtn = document.getElementById('viewLessBtn');
                if (viewMoreBtn) {
                    viewMoreBtn.style.display = 'none';
                }
                if (viewLessBtn) {
                    viewLessBtn.style.display = 'none';
                }

                if (map) {
                    google.maps.event.trigger(map, 'resize');
                    if (locations.length > 0) {
                        updateMapMarkers();
                    } else {
                        map.setCenter({
                            lat: 51.5074,
                            lng: -0.1278
                        });
                        map.setZoom(10);
                    }
                } else {
                    initMap();
                }
                hideLoader();
            });
        }

        if (gridIcon) {
            gridIcon.addEventListener('click', function(e) {
                e.preventDefault();
                showLoader();
                document.getElementById('companyRow').style.display = 'flex';
                mapContainer.style.display = 'none';
                locationsContainer.style.display = 'none';
                mapIcon.style.display = 'inline-flex';
                gridIcon.style.display = 'none';
                triggerIcon.classList.remove('rotated');
                document.querySelectorAll('.availability-dashboard-header').forEach(filter => filter.style.display = 'block');
                const dropdownWrapper = document.querySelector('.dropdown-wrapper-dash');
                const searchWrapper = document.querySelector('.search-wrapper-dash');
                if (dropdownWrapper) {
                    dropdownWrapper.style.display = 'block';
                }
                if (searchWrapper) {
                    searchWrapper.style.display = 'block';
                }
                displayCards();
                hideLoader();
            });
        }

        const searchInput = document.getElementById('searchInput');
        const perPageSelect = document.getElementById('perPageSelect');
        const companyRow = document.getElementById('companyRow');
        const viewMoreBtn = document.getElementById('viewMoreBtn');
        const viewLessBtn = document.getElementById('viewLessBtn');
        const availabilityFilters = document.querySelectorAll('.availability-dashboard-header');
        const distanceFilters = document.querySelectorAll('.distance-filter');
        const ratingFilters = document.querySelectorAll('.rating-filter');

        searchInput.addEventListener('input', function() {
            showLoader();
            const searchTerm = this.value.trim().toLowerCase();

            if (searchTerm === '') {
                filteredCards = [...initialCards];
            } else {
                filteredCards = initialCards.filter(card => {
                    const companyName = card.getAttribute('data-name')?.toLowerCase() || '';
                    return companyName.includes(searchTerm);
                });
            }

            currentPage = 1;
            displayCards();
            hideLoader();
        });

        availabilityFilters.forEach(filter => {
            filter.addEventListener('click', function() {
                showLoader();
                let filterValue = this.textContent.toLowerCase().replace(/\s+/g, '');
                filterValue = ({
                    'available': 'IMMEDIATE',
                    '4-6weeks': 'WEEKS',
                    '2-3months': 'MONTHS'
                })[filterValue] || filterValue.toUpperCase();
                const filterTag = document.querySelector(`.filter-tag[data-type="availability"][data-value="${filterValue}"]`);

                if (activeFilters.has(filterValue)) {
                    activeFilters.delete(filterValue);
                    this.classList.remove('active');
                    if (filterTag) {
                        filterTag.classList.remove('active');
                        const icon = filterTag.querySelector('i');
                        icon.classList.remove('fa-check');
                        icon.classList.add('fa-plus');
                    }
                } else {
                    activeFilters.add(filterValue);
                    this.classList.add('active');
                    if (filterTag) {
                        filterTag.classList.add('active');
                        const icon = filterTag.querySelector('i');
                        icon.classList.remove('fa-plus');
                        icon.classList.add('fa-check');
                    }
                }

                filterCompanies();
                toggleFilterButtonState();
            });
        });

        distanceFilters.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                showLoader();
                const value = this.value;
                if (this.checked) {
                    selectedDistances.add(value);
                } else {
                    selectedDistances.delete(value);
                }
                filterCompanies();
                toggleFilterButtonState();
            });
        });

        ratingFilters.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                showLoader();
                const value = this.value;
                if (this.checked) {
                    selectedRatings.add(value);
                } else {
                    selectedRatings.delete(value);
                }
                filterCompanies();
                toggleFilterButtonState();
            });
        });

        if (perPageSelect) {
            perPageSelect.addEventListener('change', function() {
                showLoader();
                itemsPerPage = parseInt(this.value);
                currentPage = 1;
                displayCards();
                hideLoader();
            });
        }

        if (viewMoreBtn) {
            viewMoreBtn.addEventListener('click', function() {
                showLoader();
                itemsPerPage += 8;
                displayCards();
                hideLoader();
            });
        }

        if (viewLessBtn) {
            viewLessBtn.addEventListener('click', function() {
                showLoader();
                itemsPerPage = 8;
                currentPage = 1;
                displayCards();
                hideLoader();
            });
        }

        const locationSearchInput = document.querySelector('.input-map');
        const locationList = document.getElementById('location-list');

        function filterLocations() {
            const searchTerm = locationSearchInput.value.toLowerCase().trim();
            const locationItems = locationList.querySelectorAll('.location-item');
            let matchCount = 0;

            locationItems.forEach((item, index) => {
                const name = item.querySelector('h5.mb-2').textContent.trim().toLowerCase();
                const contactInfoElements = item.querySelectorAll('.supplier-contact-info');
                const phone1 = contactInfoElements[0]?.textContent.trim().toLowerCase() || '';
                const phone2 = contactInfoElements[1]?.textContent.trim().toLowerCase() || '';
                const email = contactInfoElements[2]?.textContent.trim().toLowerCase() || '';

                const matchesSearch = searchTerm === '' ||
                    name.includes(searchTerm) ||
                    phone1.includes(searchTerm) ||
                    phone2.includes(searchTerm) ||
                    email.includes(searchTerm);

                item.style.display = matchesSearch ? 'block' : 'none';
                if (matchesSearch) matchCount++;

                if (markers[index]) {
                    markers[index].map = matchesSearch ? map : null;
                }
            });

            const noResultsElement = locationList.querySelector('.no-results-message') ||
                document.createElement('div');
            if (!locationList.querySelector('.no-results-message')) {
                noResultsElement.className = 'no-results-message';
                noResultsElement.innerHTML = `
            <div class="text-center p-4">
                <i class="fas fa-search fa-2x mb-3 text-muted"></i>
                <h5>No locations found</h5>
            </div>
        `;
                noResultsElement.style.display = 'none';
                locationList.appendChild(noResultsElement);
            }

            noResultsElement.style.display = matchCount === 0 && searchTerm !== '' ? 'block' : 'none';
        }

        locationSearchInput.addEventListener('input', filterLocations);

        function updateRating(companyData) {
            const ratingValue = document.querySelector('.rating-value');
            const ratingContainer = document.querySelector('.rating-container');

            if (ratingValue && ratingContainer) {
                ratingValue.textContent = companyData.rating ? companyData.rating.toFixed(1) : '0';
                ratingContainer.setAttribute('data-reviews', companyData.reviews || 0);
            }
        }

        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
</script>
<script>
    $(document).on('click', '.bookmark-link', function(e) {
        e.preventDefault();
        e.stopPropagation();


        var $link = $(this);
        var $icon = $link.closest('.favorite-dashboard-icon');
        var isBookmarked = $icon.hasClass('active');
        const authID = "{{ Auth::user()->id }}";
        const companyID = $link.data('company-id');
        var action = isBookmarked ? 'REMOVE' : 'ADD';

     
        // Toggle UI state immediately
        if (isBookmarked) {
            $icon.removeClass('active');
            $icon.css({
                'background-color': '#E5E5E5',
                'border': '1px solid #D4D4D4'
            });
            $icon.find('img').css('filter', 'grayscale(100%)');
        } else {
            $icon.addClass('active');
            $icon.css({
                'background-color': '#22C55E',
                'border': '1px solid #22C55E'
            });
            $icon.find('img').css('filter', 'none');
        }

        $link.data('bookmarked', !isBookmarked);
        $link.attr('title', isBookmarked ? 'Add Bookmark' : 'Remove Bookmark');

       

        $.ajax({
            url: '{{ route("updateCompanyBookMarks") }}',
            method: 'GET',
            data: {
                companyID: companyID,
                action: action,
                authID: authID
            },
            success: function(response) {

                if (!response) {
                    // If server request failed, revert the UI state
                    if (isBookmarked) {
                        $icon.addClass('active');
                        $icon.css({
                            'background-color': '#22C55E',
                            'border': '1px solid #22C55E'
                        });
                        $icon.find('img').css('filter', 'none');
                    } else {
                        $icon.removeClass('active');
                        $icon.css({
                            'background-color': '#E5E5E5',
                            'border': '1px solid #D4D4D4'
                        });
                        $icon.find('img').css('filter', 'grayscale(100%)');
                    }
                    $link.data('bookmarked', isBookmarked);
                    $link.attr('title', isBookmarked ? 'Remove Bookmark' : 'Add Bookmark');

                    // Show error toast
                    const errorToast = document.createElement('div');
                    errorToast.className = 'toast-notification';
                    errorToast.style.cssText = `
                    position: fixed;
                    top: 20px;
                    right: 20px;
                    background-color: #f44336;
                    color: white;
                    padding: 15px 25px;
                    border-radius: 4px;
                    z-index: 9999;
                    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
                    animation: slideIn 0.5s, fadeOut 0.5s 2.5s;
                    font-family: 'Manrope-Bold';
                `;
                    errorToast.textContent = `Failed to ${action.toLowerCase()} bookmark. Please try again.`;
                    document.body.appendChild(errorToast);

                    setTimeout(() => {
                        errorToast.remove();
                    }, 3000);
                } else {
                    // Show success toast
                    const toast = document.createElement('div');
                    toast.className = 'toast-notification';
                    toast.style.cssText = `
                    position: fixed;
                    top: 20px;
                    right: 20px;
                    background-color: #4CAF50;
                    color: white;
                    padding: 15px 25px;
                    border-radius: 4px;
                    z-index: 9999;
                    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
                    animation: slideIn 0.5s, fadeOut 0.5s 2.5s;
                    font-family: 'Manrope-Bold';
                `;
                    toast.textContent = isBookmarked ? 'Bookmark removed successfully!' : 'Bookmark added successfully!';
                    document.body.appendChild(toast);

                    setTimeout(() => {
                        toast.remove();
                    }, 3000);
                }
            },
            error: function(xhr, status, error) {
              

                // If server request failed, revert the UI state
                if (isBookmarked) {
                    $icon.addClass('active');
                    $icon.css({
                        'background-color': '#22C55E',
                        'border': '1px solid #22C55E'
                    });
                    $icon.find('img').css('filter', 'none');
                } else {
                    $icon.removeClass('active');
                    $icon.css({
                        'background-color': '#E5E5E5',
                        'border': '1px solid #D4D4D4'
                    });
                    $icon.find('img').css('filter', 'grayscale(100%)');
                }
                $link.data('bookmarked', isBookmarked);
                $link.attr('title', isBookmarked ? 'Remove Bookmark' : 'Add Bookmark');

                // Show error toast
                const errorToast = document.createElement('div');
                errorToast.className = 'toast-notification';
                errorToast.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                background-color: #f44336;
                color: white;
                padding: 15px 25px;
                border-radius: 4px;
                z-index: 9999;
                box-shadow: 0 2px 5px rgba(0,0,0,0.2);
                animation: slideIn 0.5s, fadeOut 0.5s 2.5s;
                font-family: 'Manrope-Bold';
            `;
                errorToast.textContent = `Failed to ${action.toLowerCase()} bookmark. Please try again.`;
                document.body.appendChild(errorToast);

                setTimeout(() => {
                    errorToast.remove();
                }, 3000);
            }
        });
    });

    document.getElementById('applyFilterBtn').addEventListener('click', function() {
        // Add active class to Filter button
        document.getElementById('filterBtn').classList.add('active');
    });

    document.getElementById('clearFilterBtn').addEventListener('click', function() {
        // Remove active class from Filter button
        document.getElementById('filterBtn').classList.remove('active');
    });
    // ... existing code ...
</script>

@include('appLayouts._confirmModal', [
'containerID' => 'companyActionUpdate',
])

@endsection
@endsection