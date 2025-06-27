<?php $__env->startSection('content'); ?>
<?php $__env->startSection('main_content'); ?>

<head>
    <title>Supplier Social Platform</title>
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="<?php echo e(url('css/app.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="<?php echo e(url('css/app.css')); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;600&display=swap" rel="stylesheet">
</head>
<script>
    $(document).on('click', '.viewCompany', function(event) {
        // Prevent navigation if clicking the favorite icon or its ancestors
        if ($(event.target).closest('.favorite-dashboard-icon').length || $(event.target).closest('.confirmModalAlert').length) {
            return; // Skip navigation for favorite icon or its <a> tag
        }

        // Navigate to the company page
        var companyid = $(this).attr("companyid");
        if (companyid) {
            window.open("<?php echo e(url('view-company')); ?>/" + companyid, '_blank');
        }
    });
    $(document).on('click', '.favorite-dashboard-icon, .confirmModalAlert', function(event) {
        // Stop the click from bubbling up to .viewCompany
        event.stopPropagation();

        // The confirmModalAlert logic (attached to the <a> tag) will handle the bookmark action
        var companyId = $(this).closest('.viewCompany').attr('companyid');
        ('Favorite icon clicked for company ID: ' + companyId);
        // No navigation logic here; confirmModalAlert handles the bookmark action
    });

    $(document).on('click', '.interested', function() {
    var companyid = $(this).attr("companyid");
    if (companyid) {
        window.open("<?php echo e(url('view-company')); ?>/" + companyid, '_blank');
    } else {
        console.log("Company ID not found for Profile button");
        alert("Unable to view profile: Company ID is missing.");
    }
});

</script>
<style>
    .supplier-card {
        background-color: #fff;
        border-radius: 8px;
        overflow: hidden;
        margin-bottom: 20px;
        box-shadow: rgba(0, 0, 0, 0.22) 0px 0.602187px 0.602187px -1.25px, rgba(0, 0, 0, 0.19) 0px 2.28853px 2.28853px -2.5px, rgba(0, 0, 0, 0.08) 0px 10px 10px -3.75px;
        transition: transform 0.3s;
        border: 1px solid rgb(212, 212, 212);
        position: relative !important;
        cursor: pointer;
    }

    .supplier-card:hover {
        transform: translateY(-5px);
    }

    .supplier-image {
        height: 150px;
        overflow: hidden;
    }

    .supplier-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .supplier-info {
        padding: 15px;
        font-family: 'Manrope-Bold' !important;
    }

    .rating {
        background-color: #fff;
        border: 1px solid #a3a3a1;
        color: #ffc107;
        border-radius: 4px;
        font-family: 'Manrope' !important;
        font-size: 14px;
        font-weight: 500 !important;
        padding: 2px 9px;
        font-size: 14px;
        display: inline-block;
    }

    .lead-time {
        background-color: #fff;
        border: 1px solid #ffc107;
        color: #ffc107;
        border-radius: 20px;
        padding: 5px 10px;
        font-size: 14px;
        float: right;
    }

    .lead-time.longer {
        border: 1px solid #dc3545;
        color: #dc3545;
    }

    .icon-resize a svg {
        width: 20px !important;
        height: 20px !important;

    }

    .location-badge {
        position: absolute;
        top: 10px;
        left: 11px;
        background-color: rgb(229, 229, 229);
        padding: 3px 4px;
        border-radius: 3px;
        height: 28px;
        font-size: 12px;
        font-weight: 600;
    }

    .bookmark-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 50%;
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    .post-card {
        background-color: #fff;
        border-radius: 8px;
        margin-bottom: 20px;
        border: 1px solid rgb(212, 212, 212);
        box-shadow: rgba(0, 0, 0, 0.22) 0px 0.602187px 0.602187px -1.25px, rgba(0, 0, 0, 0.19) 0px 2.28853px 2.28853px -2.5px, rgba(0, 0, 0, 0.08) 0px 10px 10px -3.75px;
        font-family: 'Manrope-Bold' !important;
    }

    .post-header {
        padding: 12px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .post-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: contain;
    }

    .post-author {
        flex-grow: 1;
        margin-left: 12px;
        text-align: start;
    }

    .post-date {
        color: #737373;
        font-size: 12px;
        margin-top: 2px;
        font-family: 'Manrope', sans-serif !important;
        font-weight: 600 !important;
    }

    .post-content {
        padding: 0px 8px;
        max-width: 594px !important;
        color: black;
        font-size: 14px;
        font-family: "Manrope-Medium" !important;
    }

    .post-content p {
        margin: 0;
        text-align: start;
        padding-bottom: 10px;
        color: black;
    }

    .post-content .ellipsis {
        color: #666;
    }

    .post-content .see-more {
        color: black;
        text-decoration: none;
        font-weight: 500;
        margin-left: 5px;
        text-decoration: underline;
        font-family: 'Manrope-Bold' !important;
    }

    .post-content .see-more:hover {
        text-decoration: underline;
    }

    .post-content .extra-content {
        display: none;
    }

    .post-content .visible-content,
    .post-content .extra-content {
        white-space: pre-wrap;
        word-wrap: break-word;
        display: inline;
        /* Ensure the content is inline to flow naturally with the ellipsis */
    }

    .post-image {
        width: 100%;
        max-height: 300px;
        object-fit: cover;
    }

    .post-actions {
        display: flex;
        padding: 7px 16px;
    }

    .post-action-comment {
        flex: 1;
        text-align: center;
        padding: 8px 0;
        color: #232323;
        cursor: pointer;
        border-radius: 4px;
        font-size: 16px;
    }

    .post-action-share {
        text-align: end;
        padding: 6px 16px;
        color: #232323;
        cursor: pointer;
        border-radius: 4px;
        font-size: 16px;
    }


    .post-action:hover {
        background-color: #f8f9fa;
    }

    .post-stats {
        padding: 12px 32px;
        color: #6c757d;
        font-size: 14px;
        display: flex;
        justify-content: space-between;
    }

    .create-post {
        background-color: #fff;
        border-radius: 8px;
        padding: 15px;
        border: 1px solid rgb(212, 212, 212);
        margin-bottom: 20px;
        box-shadow: rgba(0, 0, 0, 0.22) 0px 0.602187px 0.602187px -1.25px, rgba(0, 0, 0, 0.19) 0px 2.28853px 2.28853px -2.5px, rgba(0, 0, 0, 0.08) 0px 10px 10px -3.75px;
        font-family: 'Manrope-Bold' !important;
    }

    .create-post-input {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
        border-bottom: 1px solid #e6e5e5;
        padding-bottom: 13px;
    }

    .create-post-input-model {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
        padding-bottom: 13px;
        margin-top: 20px;
    }

    .create-post-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .create-post-textbox {
        flex-grow: 1;
        background-color: #f1f3f5;
        border-radius: 20px !important;
        padding: 10px 15px !important;
        border: none !important;
        font-family: 'Manrope-Medium' !important;
        color: rgb(101, 104, 108);
    }

    .create-post-actions {
        display: flex;
        justify-content: space-around;
    }

    .create-post-action {
        display: flex;
        align-items: center;
        color: #6c757d;
        font-size: 14px;
        cursor: pointer;
    }

    .create-post-action i {
        margin-right: 5px;
    }

    .ad-container {
        overflow: hidden;
        margin-bottom: 20px;
    }

    .ad-header {
        /* padding: 10px 0px; */
        color: rgb(163, 163, 163);
        font-size: 13px;
        text-align: start;
        /* background-color: #f8f9fa; */
        font-family: 'Manrope-Bold' !important;
    }

    .ad-image {
        width: 100%;
        height: auto;
    }

    .section-title {
        font-size: 18px;
        /* font-weight: 600; */
        margin-bottom: 20px;
        /* font-family: 'Manrope-Bold' !important; */
    }

    .see-more {
        color: black;
        cursor: pointer;
        text-decoration: underline;
        font-family: 'Manrope-Bold' !important;
        font-size: 12px;
    }

    .see-more:hover {
        color: unset !important;
    }

    .availability-dashboard {
        padding: 3px 10px;
        border-radius: 15px;
        font-size: 12px;
        position: relative;
        display: inline-block;
    }

    .available-dashboard {
        border: 1px solid #4CAF50;
        color: #4CAF50;
        background-color: #F0fdf4;
        border-radius: 0px;
        font-family: 'Manrope' !important;
        font-weight: 500 !important;
        font-size: 14px;
        border-radius: 4px !important;
        margin-top: 0px;
        padding: 4px 8px;
    }

    .weeks-dashboard {
        border: 1px solid #ebb610;
        color: #ebb610;
        background-color: #FEFCE8;
        border-radius: 4px !important;
        font-size: 14px;
        border-radius: 0px;
        font-family: 'Manrope' !important;
        font-weight: 500 !important;
    }

    .months-dashboard {
        border: 1px solid #dc2626;
        color: #dc2626;
        background-color: #fef2f2;
        border-radius: 0px;
        font-family: 'Manrope' !important;
        font-size: 14px;
        font-weight: 500 !important;
        border-radius: 4px !important;
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

    .modal-content-view {
        border-radius: 8px !important;
        /* padding: 20px; */
        font-family: 'Manrope-Bold' !important;
        width: 640px !important;
    }

    .modal-content-post {
        border-radius: 8px;
        /* padding: 20px; */
        font-family: 'Manrope-Bold' !important;
        width: 640px;
    }

    .modal-dialog-centered .modal-content-post {
        background-color: #fff !important;
    }

    .modal-header {
        border-bottom: 1px solid rgb(226, 229, 233);
        justify-content: space-between;
    }

    .modal-title-1 {
        font-size: 1.25rem;
        font-family: 'Manrope-Bold' !important;
        margin: 0 auto;
        /* margin-left: 30px; */
        margin-right: -3px;
    }

    .modal-view-body {
        text-align: center !important;
        padding: 0px !important;
    }

    .video-upload-area {
        border: 2px dashed #ced4da;
        border-radius: 8px;
        padding: 40px;
        margin-bottom: 20px;
        cursor: pointer;
    }

    .video-upload-area.dragover {
        background-color: #f8f9fa;
        border-color: #7c3aed;
    }

    .modal-footer {
        border-top: none;
        justify-content: center;
    }

    .btn-post {
        background-color: #7366ff !important;
        color: #fff;
        border: none;
        height: 38px;
        border-radius: 5px;
    }

    .btn-close {
        background-color: #e5e5e5;
        padding: 13px;
        border-radius: 50px;
        border: 1px solid #827e86;
    }



    /* .comment-input {
        width: 100%;
        padding: 8px;
        border-radius: 20px;
        border: 1px solid #ced4da;
        margin-bottom: 10px;
    } */

    .comment-list {
        max-height: 150px;
        overflow-y: auto;
        margin-bottom: 10px;
        overflow-x: hidden;
    }


    .comment-item {
        display: flex;
        align-items: center;
        /* margin-bottom: 8px; */
    }

    .comment-item img {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .comment-item p {
        margin: 0;
        font-size: 14px;
        width: 500px;
        color: black;
        text-align: start;
    }

    .reaction-options {
        display: none;
        flex-direction: row;
        align-items: center;
        justify-content: space-around;
        min-width: 200px;
        margin-bottom: 89px !important;
        border-radius: 25px !important;
        padding: 5px 10px;
        left: 25px !important;
        background-color: #f5f5f5 !important;
    }

    .reaction-option {
        font-size: 20px;
        cursor: pointer;
        padding: 5px;
        border-radius: 50%;
        transition: transform 0.1s;
    }

    .reaction-option:hover {
        transform: scale(1.2);
        /* background-color: #e7f3ff; */
    }

    .post-action.like-button {
        display: flex;
        align-items: center;
        padding: 5px 10px;
        border-radius: 4px;
        transition: background-color 0.2s;
        font-size: 16px;
        cursor: pointer;
    }


    .post-action.like-button .reaction-emoji {
        margin-right: 5px;
    }

    /* 
    .post-action.like-button:hover {
        background-color: #e7f3ff;
    } */

    .post-action.like-button.selected {
        background-color: #f5f5f5;
        font-weight: bold;
    }

    .post-stats .reaction-text {
        margin-right: 5px;
        color: #606770;
        font-size: 14px;
    }

    .post-stats .like-count {
        font-weight: bold;
        color: #1c1e21;
        font-size: 14px;
    }

    /* Comment Section Styles */

    .comment-list {
        max-height: 200px;
        overflow-y: auto;
        margin-bottom: 15px;
    }

    .comment-item {
        display: flex;
        align-items: flex-start;
        /* margin-bottom: 15px; */
        padding: 16px;
        border-radius: 10px;
        max-width: 100%;
    }

    .comment-avatar {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        margin-right: 10px;
        /* border: 2px solid #007bff; */
        object-fit: cover;
    }

    .comment-bg {
        flex: 1;
        background-color: #F0F2F5;
        padding: 10px;
        border-radius: 10px;
    }

    .comment-author {
        font-size: 14px;
        font-weight: 600;
        color: #333;
        margin-bottom: 2px;
        text-align: start;
        font-family: "Manrope-Bold" !important;
    }

    .comment-time {
        font-size: 12px;
        color: rgb(101, 104, 108);
        margin-top: 2px;
        text-align: start;
        margin-left: 8px;
        font-family: "Manrope-Medium" !important;
    }

    .comment-input-container {
        display: flex;
        align-items: center;
        background-color: rgb(240, 242, 245);
        border-radius: 20px;
        padding: 19px 7px 16px 10px;
        width: 728px;
        position: relative;
        margin-top: 10px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .input-avatar {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        margin-right: 10px;
        /* border: 2px solid #007bff; */
        object-fit: cover;
        margin-top: 10px;
    }

    .comment-input {
        flex: 1;
        padding: 8px 0;
        border: none;
        background: transparent;
        outline: none;
        font-size: 14px;
        position: relative;
        top: -17px;
        font-family: 'Manrope-Medium' !important;
        color: rgb(101, 104, 108);
    }

    .send-arrow {
        font-size: 18px;
        color: #007bff;
        cursor: pointer;
        padding: 5px;
        transition: color 0.3s;
        margin-left: 10px;
        position: relative;
        top: 16px;
    }

    .send-arrow:hover {
        color: #0056b3;
    }

    /* Responsive Design */
    @media (max-width: 600px) {
        .comment-item {
            max-width: 90%;
        }

        .comment-input-container {
            padding: 6px 10px;
        }

        .input-avatar {
            width: 25px;
            height: 25px;
        }
    }

    #mapIcon {
        position: relative;
        /* Ensure the pseudo-elements are positioned relative to #mapIcon */
        cursor: pointer;
    }

    #mapIcon::before {
        content: "Based on 248 reviews";
        position: absolute;
        bottom: 100%;
        left: 123%;
        transform: translateX(-50%);
        padding: 5px 10px;
        background: linear-gradient(124deg, #7c3aed 0%, rgb(91, 33, 182) 100%);
        color: white;
        font-size: 14px;
        border-radius: 5px;
        white-space: nowrap;
        margin-bottom: 10px;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.2s, visibility 0.2s;
        z-index: 1000;

    }

    #mapIcon::after {
        content: '';
        position: absolute;
        bottom: 100%;
        left: 70%;
        transform: translateX(-50%);
        width: 0;
        height: 0;
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        border-top: 8px solid #7c3aed;
        margin-bottom: 2px;
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

    #mapIcontwo {
        position: relative;
        /* Ensure the pseudo-elements are positioned relative to #mapIcon */
        cursor: pointer;
    }

    #mapIcontwo::before {
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

    #mapIcontwo::after {
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

    #mapIcontwo:hover::before,
    #mapIcontwo:hover::after {
        opacity: 1;
        visibility: visible;
    }



    .post-menu {
        position: relative;
        cursor: pointer;
    }

    .menu-popup {
        position: absolute;
        top: 100%;
        right: 0;
        background: #fff;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        min-width: 200px;
        z-index: 1000;
        padding: 8px 0;
    }

    .menu-option {
        padding: 8px 16px;
        font-size: 14px;
        text-align: start;
    }

    .menu-option span {
        font-size: 12px;
        color: #666;
    }

    .menu-option:hover {
        background: #f5f5f5;
    }

    /* Ensure no default margins/padding */
    body {
        margin: 0;
        padding: 0;
        overflow-x: hidden;
        /* Prevent horizontal scroll */
    }

    /* Container adjustments */
    .container-fluid {
        padding: 0;
        margin: 0;
    }

    /* Left Column */
    .left-column {
        position: fixed !important;
        /* left: 0; */
        width: 25%;
        height: 100vh;
        padding: 24px;
        /* background-color: #f8f9fa; */
        overflow-y: hidden;
        z-index: 1000;
        top: 153px;
    }

    /* Right Column */
    .col-lg-3.right-column {
        position: fixed;
        top: 147px;
        right: 0;
        width: 25%;
        height: 100vh;
        padding: 24px;
        /* background-color: #f8f9fa; */
        overflow-y: hidden;
        /* z-index: 1000; */
    }

    /* Center Column */
    .col-lg-6 {
        margin-left: 25%;
        margin-right: 25%;
        /* padding: 50px; */
        min-height: 100vh;
        box-sizing: border-box;
        z-index: 1;
        padding-left: 80px;
        padding-right: 80px;
        top: 80px;
    }


    /* Responsive adjustments */
    @media (max-width: 992px) {

        .left-column,
        .col-lg-3.right-column {
            position: static;
            /* Remove fixed positioning on smaller screens */
            width: 100%;
            /* Full width */
            height: auto;
            /* Allow natural height */
        }

        .col-lg-6 {
            margin-left: 0;
            margin-right: 0;
            width: 100%;
            /* Full width */
        }
    }




    .reaction-option::after {
        content: attr(data-name);
        position: absolute;
        bottom: 100%;
        /* Position above the icon */
        left: 50%;
        transform: translateX(-50%);
        background: #333;
        color: #fff;
        padding: 5px 10px;
        border-radius: 4px;
        font-size: 12px;
        white-space: nowrap;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.2s, visibility 0.2s;
        z-index: 10;
    }

    .reaction-option:hover::after {
        opacity: 1;
        visibility: visible;
    }

    .fas-custom-v {
        position: relative !important;
        top: -8px !important;
        font-size: 18px !important;
        left: -12px !important;
    }

    .comment-count {
        opacity: 60%;
        color: #404040;
    }

    .share-count {
        opacity: 60%;
        color: #404040;
    }

    .hr-1 {
        border-top: 1px solid #d2d2d2;
        width: 95%;
        margin: 3px auto;
    }

    .hr-2 {
        border-top: 1px solid #d2d2d2;
        width: 100%;
        margin: 3px auto;
    }

    .comment-custom-input {
        display: flex;
        justify-content: flex-start;
        padding: 12px 16px;
    }

    @media (min-width: 992px) {

        .modal-blog-lg {
            --bs-modal-width: unset !important;
        }
    }

    .comment-text {
        margin: 0;
        word-wrap: break-word;
        /* Ensure words break if too long */
    }

    .long-comment {
        white-space: pre-wrap;
        /* Wrap text to the next line for comments > 30 words */
    }

    .page-title-container {
        position: fixed;
        /* top: 85px; */
        width: 100%;
        z-index: 2;
    }

    .custom-social-head {
        justify-content: center !important;
        margin-right: 0px !important;
    }

    .page-social-title {
        margin: 0 -15px 23px !important;
        background-color: rgb(255, 255, 255) !important;
        /* border-bottom: 1px solid rgb(229, 229, 229) !important; */
        /* border-top: 2px solid #E5E5E5 !important; */


    }

    .social-head {
        font-family: 'Manrope', sans-serif !important;
        font-weight: 800 !important;
    }

    .section-title {
        font-family: 'Manrope', sans-serif !important;
        font-weight: 800 !important;
    }

    .post-head-1 {
        font-family: 'Manrope', sans-serif !important;
        font-weight: 800 !important;
    }

    .post-auth-head {
        font-family: 'Manrope', sans-serif !important;
        font-weight: 800 !important;
    }

    /* .post-content{
    font-family: 'Manrope' !important;
    font-weight: 400 !important;
} */


    @media (max-width: 425px) {
        .share-count {
            display: none !important;
        }

        .share-button {
            display: none !important;
        }

        .post-action-comment {
            text-align: end !important;
        }

        .social-head {
            text-align: center;
        }
    }

    @media (max-width: 992px) {
        .left-column {
            display: none !important;
        }


        .col-lg-3.right-column {
            display: none !important;
        }

        .create-post {
            padding-top: 50px;
        }

        .page-title-container {
            top: 63px !important;
        }

        .custom-social-head {
            display: none;
        }

        /* .social-head{
        text-align: center;
    } */
        .col-lg-6 {
            padding: 20px;
            margin-left: 0px;
            margin-right: 0px;

        }

        .page-social-title {
            padding-top: 39px !important;
        }

        .modal-content {
            width: unset !important;
        }

        .reaction-options {
            left: 70px !important;
        }

        .comment-list {
            overflow-x: scroll;

        }

        .comment-input-container {
            padding: 20px;

        }
    }

    .toast-notification {
        position: fixed;
        top: 20px;
        right: 20px;
        background-color: #4CAF50;
        color: white;
        padding: 15px 25px;
        border-radius: 4px;
        z-index: 9999;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        animation: slideIn 0.5s, fadeOut 0.5s 2.5s;
        font-family: 'Manrope-Bold';
    }

    .toast-notification.show {
        opacity: 1;
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

    .months-dashboard::before {
        left: 0% !important;
        bottom: 113% !important;

    }

    .weeks-dashboard::before {
        left: -0% !important;
        bottom: 111% !important;
    }

    .available-dashboard::before {
        bottom: 105% !important;
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

    .create-post-input input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .create-post-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .create-post-actions {
        display: flex;
        gap: 15px;
        margin-top: 10px;
    }

    .create-post-action {
        cursor: pointer;
        display: flex;
        align-items: center;
    }

    /* .post-image {
        width: 23px;
        margin-right: 10px;
    } */
    .section-title {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .ad-container {
        margin-bottom: 20px;
    }

    .ad-header {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .ad-image {
        width: 100%;
        border-radius: 5px;
    }

    #imagePreview {
        max-width: 100%;
        /* max-height: 200px; */
        margin-top: 10px;
        display: none;
    }

    .spinner-border {
        vertical-align: middle;
        margin-left: 5px;
    }

    .modal-backdrop.show {
        opacity: 0.5;
    }

    .modal-content {
        border-radius: 10px;
    }

    .toast-container {
        z-index: 1100;
        position: fixed;
        top: 20px;
        right: 20px;
        animation: slideIn 0.5s, fadeOut 0.5s 2.5s;

    }

    .modal-boday-post {
        padding: 20px !important;
    }

    .avatar-circle-post {
        width: 48px !important;
        height: 40px !important;
        margin-right: 10px !important;
    }

    .toast-2 {
        background-color: #22C55E !important;
        color: white !important;
    }

    .upload-area {
        border: 2px dashed #ccc;
        padding: 20px;
        text-align: center;
        cursor: pointer;
        /* background-color: #f9f9f9; */
    }

    /* 
    .upload-area:hover {
        background-color: #e9ecef;
    } */

    .drag-text {
        color: #666;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .drag-text span {
        color: #333;
        font-weight: bold;
    }

    .drag-close-button {
        position: absolute;
        top: 20px;
        right: 8px;
        background: #fff;
        color: white;
        border: none;
        border-radius: 50%;
        width: 24px;
        height: 24px;
        cursor: pointer;
        line-height: 24px;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 0px 1px;
    }

    #cropPostModal .modal-dialog {
        max-width: 600px;
    }

    #cropPostModal .modal-body {
        padding: 0;
        height: 400px;
    }

    #cropPostModal .modal-body img {
        max-height: 100%;
        width: 100%;
        object-fit: contain;
    }

    .networkLi.active {
        color: #7366FF !important;
        border: 1px solid #7C3AED;
        padding: 6px;
        display: inline-block;
        border-radius: 6px;
    }

    .networkLi.active svg {
        stroke: #7366FF !important;
        /* Blue stroke for Lucide SVGs */
    }

    .networkLi.active svg:not(.lucide-share-2):not(.lucide-globe) {
        fill: #7366FF !important;
        /* Blue fill for Premium Profile SVG */
    }

    .networkLi {
        color: #000;
        /* Default text color */
    }

    .networkLi svg {
        stroke: currentColor;
        /* Default stroke for Lucide SVGs */
    }

    .networkLi svg:not(.lucide-share-2):not(.lucide-globe) {
        fill: #000000;
        /* Default fill for Premium Profile SVG */
    }

    .networkLi {
        margin-left: 10px !important;
    }

    .icon-blog-a {
        position: fixed !important;
        right: 0;
    }
</style>

<main>
    <div class="container-fluid page-title-container">
        <div class="page-title page-social-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="social-head">Social Media</h3>
                </div>
                <div class="col-sm-6 icon-blog-a">
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
    <div class="container-fluid mt-4">
        <div class="row">
            <!-- Left Column - Bookmarked Suppliers -->
            <div class="col-lg-3 left-column">
                <h1 class="section-title">Bookmarked Suppliers</h1>
                <!-- Supplier Card 1 -->

                <!-- Supplier Card 2 -->

                <!-- Supplier Card 3 -->
            </div>

            <!-- Middle Column - Feed -->
            <div class="col-lg-6">
                <!-- Create Post -->
                <div class="create-post">
                    <h1 class="mb-3 post-head-1" style="font-size: 20px;">Create Post</h1>
                    <div class="create-post-input">
                        <div class="avatar-circle avatar-circle-post">
                            <img src="<?php echo e($userProfileUrl); ?>" style="width: 100%;">
                        </div>
                        <input type="text" id="createPostInput" style="cursor: pointer;" class="create-post-textbox" placeholder="Write something..." readonly>
                    </div>
                    <div class="create-post-actions">
                        <div class="create-post-action">
                            <img src="<?php echo e(asset('newAssets/img/socialmedia/5.png')); ?>" style="width: 23px;margin-right: 10px;" alt="Post image" class="post-image"> Add image
                        </div>
                    </div>
                </div>
                <!-- Dynamic Posts Container -->
                <div id="posts-container">
                    <!-- Posts will be dynamically inserted here -->
                </div>
            </div>

            <!-- Right Column - Advertisements and Recommended -->
            <div class="col-lg-3 right-column">
                <div class="ad-container">
                    <div class="ad-header">Advertisement</div>
                    <img src="<?php echo e(asset('newAssets/img/dashboard/3.jpg')); ?>" alt="Advertisement" class="ad-image">
                </div>
                <h4 class="section-title">Recommended Suppliers</h4>
                <!-- Recommended Supplier -->

            </div>
        </div>
    </div>

    <!-- Create Post -->
    <div class="modal fade" id="createPostModal" tabindex="-1" aria-labelledby="createPostModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-blog-lg">
            <div class="modal-content modal-content-view">
                <div class="modal-header">
                    <h5 class="modal-title modal-title-1" id="createPostModalLabel">Create a Post</h5>
                    <button type="button" class="btn-close" id="modalCloseBtn" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div style="padding-top: 10px;display:flex;padding-left: 10px;">
                    <div class="avatar-circle avatar-circle-post">
                        <img src="<?php echo e($userProfileUrl); ?>" style="width: 100%;">
                    </div>
                    <h1 style="font-size: 18px;margin-top: 10px;"><?php echo e(Auth::user()->name); ?></h1>
                </div>
                <div class="modal-body modal-boday-post  modal-view-body">
                    <form id="postForm" enctype="multipart/form-data">
                        <div class="mb-3">
                            <!-- <label for="postTitle" class="form-label">Title</label> -->
                            <input type="text" class="form-control" id="postTitle" placeholder="Enter post title..." required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="postDescription" rows="4" placeholder="Write something..."></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="postImage" class="form-label">Upload Image</label>
                            <div class="upload-area" id="uploadArea" style="position: relative; height: 230px; width: 100%;">
                                <input type="file" class="form-control" id="postImage" accept="image/*" style="display: none;">
                                <div class="drag-text" id="dragText" style="display: block;">
                                    <img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/premiumdefault/drop1.png')); ?>" alt="" style="width: 47px;padding-bottom: 10px;display:flex;margin: 0 auto;">
                                    <span>Browse Files</span><br>
                                    <small>Drag and drop files here</small>
                                </div>
                                <div id="previewContainer" style="display: none; position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                                    <img id="imagePreview" src="#" alt="Image Preview" style="width:94%; height: 93%; object-fit: contain; padding: 0px; border-radius: 8px;">
                                    <button type="button" id="closePreview" class="drag-close-button"><img loading="lazy" src="<?php echo e(asset('newAssets/img/premiumpage/premiumdefault/close1.png')); ?>" alt="" style="width: 18px; position: relative; top: -2px; left: -2px;"></button>
                                    <button type="button" id="cropButton" style="position: absolute; bottom: 10px; right: 10px; background: #007bff; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer; display: none;">Crop</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="modalCancelBtn" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="submitPost">
                        <span class="button-text">Post</span>
                        <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="cropPostModal" tabindex="-1" aria-labelledby="cropPostModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title modal-title-1" id="cropPostModalLabel">Crop Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-view-body">
                    <div style="position: relative; width: 100%; height: 100%;">
                        <img id="cropImage" src="#" alt="Image to Crop">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="cropConfirmButton">Crop</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Toast Notification -->
    <div class="toast-container">
        <div id="successToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="3000">
            <div class="toast-header">
                <strong class="me-auto">Success</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body toast-2">
                The post has been added and is waiting for approval.
            </div>
        </div>
    </div>
</main>


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        function setActiveBreadcrumb() {
            const currentPath = window.location.pathname.toLowerCase(); // e.g., /pvt-praxmarket-website-2025/network
            console.log('Current Path:', currentPath); // Debug log

            $('.networkLi').each(function() {
                const $this = $(this);
                const href = $this.attr('href');
                if (!href) return;

                // Normalize href to get the path
                const linkPath = new URL(href, window.location.origin).pathname.toLowerCase(); // e.g., /pvt-praxmarket-website-2025/network
                console.log('Link Path:', linkPath); // Debug log

                // Get the last segment of the paths
                const linkSegment = linkPath.split('/').filter(segment => segment).pop(); // e.g., network
                const currentSegment = currentPath.split('/').filter(segment => segment).pop(); // e.g., network

                // Special handling for post routes (e.g., /post/view-blog-pages)
                const isPostLink = linkPath.includes('/post');
                const isPostPage = currentPath.includes('/post');

                if ((linkSegment === currentSegment && !isPostLink && !isPostPage) || (isPostLink && isPostPage)) {
                    $this.addClass('active');
                    // Update SVG stroke or fill
                    const $svg = $this.find('svg');
                    if ($svg.hasClass('lucide-share-2') || $svg.hasClass('lucide-globe')) {
                        $svg.attr('stroke', '#007bff'); // Blue stroke for Lucide icons
                    } else {
                        $svg.attr('fill', '#007bff'); // Blue fill for Premium Profile icon
                    }
                } else {
                    $this.removeClass('active');
                    // Reset SVG stroke or fill
                    const $svg = $this.find('svg');
                    if ($svg.hasClass('lucide-share-2') || $svg.hasClass('lucide-globe')) {
                        $svg.attr('stroke', 'currentColor'); // Reset to default
                    } else {
                        $svg.attr('fill', '#000000'); // Reset to default
                    }
                }
            });
        }

        // Run on page load
        setActiveBreadcrumb();

        // Re-run on navigation clicks
        $(document).on('click', '.networkLi', function() {
            setTimeout(setActiveBreadcrumb, 0); // Delay to allow URL to update
        });
    });
</script>
<script>
$(document).ready(function() {
    // Initialize toast
    const toast = new bootstrap.Toast($('#successToast'));
    console.log('Toast initialized:', toast);

    // Open modal when clicking the input field
    $('#createPostInput').on('click', function() {
        $('#createPostModal').modal('show');
    });
    $('.create-post-action').on('click', function() {
        $('#createPostModal').modal('show');
    });

    // Drag-and-Drop, Image Preview, and Cropping
    const uploadArea = $('#uploadArea');
    const fileInput = $('#postImage');
    const previewContainer = $('#previewContainer');
    const imagePreview = $('#imagePreview');
    const closePreview = $('#closePreview');
    const dragText = $('#dragText');

    const cropModalElement = $('#cropPostModal');
    const cropModal = new bootstrap.Modal(cropModalElement[0], {
        backdrop: 'static',
        keyboard: false
    });
    const cropImage = $('#cropImage');
    const cropConfirmButton = $('#cropConfirmButton');

    let cropper;
    let currentFile;
    let isCropping = false; // Flag to track if modal is hidden for cropping

    // Trigger file input when clicking the upload area
    uploadArea.on('click', function(e) {
        if (previewContainer.css('display') === 'none') {
            fileInput.click();
        }
        e.stopPropagation();
    });

    // Prevent the file input click from bubbling up to the upload area
    fileInput.on('click', function(e) {
        e.stopPropagation();
    });

    // Handle drag and drop
    uploadArea.on('dragover', function(e) {
        e.preventDefault();
        if (previewContainer.css('display') === 'none') {
            uploadArea.css('background-color', '#e1e1e1');
        }
    });

    uploadArea.on('dragleave', function() {
        uploadArea.css('background-color', '#f9f9f9');
    });

    uploadArea.on('drop', function(e) {
        e.preventDefault();
        uploadArea.css('background-color', '#f9f9f9');
        if (previewContainer.css('display') === 'none') {
            const files = e.originalEvent.dataTransfer.files;
            if (files.length > 0) {
                fileInput[0].files = files;
                handleFile(files[0]);
            }
        }
    });

    // Handle file selection
    fileInput.on('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            handleFile(file);
        } else {
            previewContainer.hide();
            dragText.show();
        }
    });

    // Close preview and reset input
    closePreview.on('click', function() {
        if (cropper) {
            cropper.destroy();
            cropper = null;
        }
        previewContainer.hide();
        fileInput.val('');
        dragText.show();
        console.log('Preview closed');
    });

    // Handle crop confirmation
    cropConfirmButton.on('click', function() {
        if (cropper) {
            const canvas = cropper.getCroppedCanvas({
                width: cropper.getCropBoxData().width,
                height: cropper.getCropBoxData().height,
                fillColor: '#fff',
                imageSmoothingEnabled: true,
                imageSmoothingQuality: 'high',
            });

            const originalFileType = currentFile.type;
            const outputFormat = originalFileType;
            const outputFileName = outputFormat === 'image/png' ? 'cropped_image.png' : outputFormat === 'image/gif' ? 'cropped_image.gif' : 'cropped_image.jpg';

            const croppedDataUrl = canvas.toDataURL(outputFormat);

            imagePreview.attr('src', croppedDataUrl).show();
            previewContainer.show();
            dragText.hide();

            canvas.toBlob(function(blob) {
                const file = new File([blob], outputFileName, {
                    type: outputFormat
                });
                const dataTransfer = new DataTransfer();
                dataTransfer.items.add(file);
                fileInput[0].files = dataTransfer.files;
                console.log('Cropped image set for submission');
            }, outputFormat);

            cropper.destroy();
            cropper = null;
            cropModal.hide();
        }
    });

    function handleFile(file) {
        const validTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
        if (!validTypes.includes(file.type)) {
            alert('Please upload a valid image file (JPG, JPEG, PNG, or GIF).');
            fileInput.val('');
            console.log('Invalid file type');
            return false;
        }

        currentFile = file;
        const reader = new FileReader();
        reader.onload = function(e) {
            isCropping = true; // Set flag before hiding modal
            $('#createPostModal').modal('hide');
            console.log('createPostModal closed before opening cropPostModal');

            cropImage.attr('src', e.target.result);
            cropModal.show();
            console.log('Crop modal opened');
        };
        reader.onerror = function() {
            console.error('Error reading file');
            isCropping = false; // Reset flag on error
       };
        reader.readAsDataURL(file);
        return true;
    }

    cropModalElement.on('shown.bs.modal', function() {
        if (cropper) {
            cropper.destroy();
        }

        try {
            cropper = new Cropper(cropImage[0], {
                aspectRatio: 622 / 300,
                viewMode: 1,
                autoCropArea: 0.8,
                movable: true,
                zoomable: false,
                scalable: true,
                rotatable: false,
                background: false,
                ready: function() {
                    const containerData = cropper.getContainerData();
                    const cropBoxData = cropper.getCropBoxData();
                    const newLeft = (containerData.width - cropBoxData.width) / 2;
                    const newTop = (containerData.height - cropBoxData.height) / 2;
                    cropper.setCropBoxData({
                        left: newLeft,
                        top: newTop
                    });
                    console.log('Cropper initialized successfully');
                }
            });
        } catch (error) {
            console.error('Error initializing Cropper:', error);
        }
    });

    cropModalElement.on('hidden.bs.modal', function() {
        if (cropper) {
            cropper.destroy();
            cropper = null;
        }
        if (previewContainer.css('display') !== 'block') {
            fileInput.val('');
            dragText.show();
            console.log('Crop modal closed without cropping, reset file input');
        }
        isCropping = false; // Reset cropping flag
        $('#createPostModal').modal('show');
        console.log('createPostModal reopened after cropPostModal closed');
    });

    // Reset form when modal is hidden, but not when opening crop modal
    $('#createPostModal').on('hidden.bs.modal', function() {
        console.log('Modal hidden event triggered');
        if (!isCropping) {
            // Reset form and UI elements only if not cropping
            $('#postForm')[0].reset();
            $('#postTitle').val('');
            $('#postDescription').val('');
            fileInput.val('');
            previewContainer.hide();
            imagePreview.hide();
            dragText.show();
            if (cropper) {
                cropper.destroy();
                cropper = null;
            }
            console.log('Form and UI elements reset');
        }

        // Show toast if post was successful
        if ($(this).data('postSuccess')) {
            console.log('Showing toast');
            toast.show();
            $(this).data('postSuccess', false);
        }
    });

    // Handle post submission
    $('#submitPost').on('click', function() {
        const $button = $(this);
        const $spinner = $button.find('.spinner-border');
        const $buttonText = $button.find('.button-text');
        const $closeBtn = $('#modalCloseBtn');
        const $cancelBtn = $('#modalCancelBtn');
        const title = $('#postTitle').val().trim();
        const description = $('#postDescription').val().trim();
        const image = $('#postImage')[0].files[0];

        console.log('Title:', title);
        console.log('Description:', description);
        console.log('Image:', image);
        console.log('CSRF Token:', $('meta[name="csrf-token"]').attr('content'));

        if (!title || (!description && !image)) {
            alert('Please provide a title and either a description or an image.');
            return;
        }

        // Lock modal during submission
        $('#createPostModal').modal({
            backdrop: 'static',
            keyboard: false
        });
        $spinner.removeClass('d-none');
        $buttonText.text('Posting...');
        $button.prop('disabled', true);
        $closeBtn.prop('disabled', true);
        $cancelBtn.prop('disabled', true);
        console.log('Modal locked: backdrop=static, keyboard=false');

        const formData = new FormData();
        formData.append('title', title);
        formData.append('description', description || '');
        if (image) {
            formData.append('image', image);
        }
        formData.append('_token', $('meta[name="csrf-token"]').attr('content') || '');

        for (let [key, value] of formData.entries()) {
            console.log(`FormData: ${key} =`, value);
        }

        $('#createPostModal').data('postSuccess', false);
        console.log('Post Success Flag Reset:', $('#createPostModal').data('postSuccess'));

        setTimeout(function() {
            $.ajax({
                url: '<?php echo e(route("post.addNewPost")); ?>',
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response, status, xhr) {
                    console.log('Response:', response);
                    console.log('Response Type:', typeof response);
                    console.log('Raw Response:', xhr.responseText);

                    if (response === true || response === 'true' || response === '1') {
                        $('#createPostModal').data('postSuccess', true);
                        console.log('Post Success Flag Set:', $('#createPostModal').data('postSuccess'));

                        // Reset form and UI on success
                        $('#postForm')[0].reset();
                        $('#postTitle').val('');
                        $('#postDescription').val('');
                        fileInput.val('');
                        previewContainer.hide();
                        imagePreview.hide();
                        dragText.show();

                        $('#createPostModal').modal('hide');
                    } else {
                        alert('Failed to upload post. Unexpected response: ' + xhr.responseText);
                        // Unlock modal
                        $('#createPostModal').modal({
                            backdrop: true,
                            keyboard: true
                        });
                        $closeBtn.prop('disabled', false);
                        $cancelBtn.prop('disabled', false);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', status, error);
                    console.error('Response:', xhr.responseText);
                    alert('An error occurred while uploading the post: ' + (xhr.responseText || 'Unknown error'));
                    // Unlock modal
                    $('#createPostModal').modal({
                        backdrop: true,
                        keyboard: true
                    });
                    $closeBtn.prop('disabled', false);
                    $cancelBtn.prop('disabled', false);
                },
                complete: function() {
                    $spinner.addClass('d-none');
                    $buttonText.text('Post');
                    $button.prop('disabled', false);
                    // Unlock modal in complete to ensure it happens after success or error
                    $('#createPostModal').modal({
                        backdrop: true,
                        keyboard: true
                    });
                    $closeBtn.prop('disabled', false);
                    $cancelBtn.prop('disabled', false);
                    console.log('Modal unlocked: backdrop=true, keyboard=true');
                }
            });
        }, 3000);
    });
});
</script>
<script>
    $.ajax({
        url: '<?php echo e(route("getCompanies")); ?>',
        method: 'GET',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        // Define initialData if needed, e.g.:
        // const initialData = { lat: 51.5074, lng: -0.1278 };
        // data: initialData,
        success: function(response) {
            // console.log(response, "response");
            const leftColumn = document.querySelector('.left-column');
            const rightColumn = document.querySelector('.right-column');

            // Clear existing content
            leftColumn.innerHTML = '<h1 class="section-title">Bookmarked Suppliers</h1>';
            rightColumn.innerHTML = `
            <div class="ad-container">
                <div class="ad-header">Advertisement</div>
                <img src="<?php echo e(asset('newAssets/img/dashboard/3.jpg')); ?>" alt="Advertisement" class="ad-image">
            </div>
            <h4 class="section-title">Recommended Suppliers</h4>
        `;

            window.allCompanies = response.companies || [];
            window.locations = allCompanies.map((company, index) => {
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

            // Helper function to generate supplier card HTML
            const generateSupplierCard = (company) => {
                const imgSrc = company.imgassets || '<?php echo e(asset("newAssets/img/dashboard/12.avif")); ?>';
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


                return `
                <div class="supplier-card viewCompany position-relative" companyid="${company.id}" data-name="${company.name}">
                    <div class="supplier-image">
                        <img src="${imgSrc}" alt="${company.name || 'N/A'}">
                        <div class="location-badge">
                            <img src="<?php echo e(asset('newAssets/img/dashboard/8.png')); ?>" style="width: 16px; margin-top: 1px; height: 18px;" alt="">
                            <span style="color:black; margin-top:1px">${company.distanceInKm || 'N/A'} km</span>
                        </div>
                      <div class="favorite-dashboard">
                                <div class="card-header" style="padding-top: 10px;">
                                    <p class="companyActionUpdate" id="companyActionUpdate">
                                        <a href="javascript:void(0)" class="bookmark-link bs-tooltip" 
                                           data-company-id="${company.id}" 
                                           data-bookmarked="${company.bookmarked ? 'true' : 'false'}" 

                                           data-bs-placement="top" 
                                           title="${company.bookmarked ? 'Remove Bookmark' : 'Add Bookmark'}">
                                            <div class="favorite-dashboard-icon ${company.bookmarked ? 'active' : ''}">
                                                <img src="<?php echo e(asset('newAssets/img/dashboard/icons/hand.png')); ?>" style="width: 18px; object-fit: cover;">
                                            </div>
                                        </a>
                                    </p>
                                </div>
                            </div>
                    </div>
                    <div class="supplier-info">
                    <h5>${truncateName(company.name || 'N/A')}</h5>
                        <div class="d-flex justify-content-between" style="margin-top: 12px;">
                                        <div class="rating-dashboard rating-container rating-container-sharp">
                                        <div class="star-dashboard">
                                            <img src="<?php echo e(asset('newAssets/img/dashboard/7.png')); ?>" style="width:16px;margin-top: -3px;"/>
                                            <span data-reviews="${company.reviews || "N/A"}">
                                                <span class="rating-value" style="color:black">${company.reviews ? company.reviews.toFixed(1) : 'N/A'}</span>
                                            </span>
                                        </div>
                                    </div>
                        
                       <div class="availability-dashboard availability-dashboard-sharp ${availabilityClass} bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" data-original-title="${tooltipText}">${availabilityText}</div>
                        </div>
                    </div>
                </div>
            `;
            };

            // Filter bookmarked companies for left column (limit to 2)
            const bookmarkedCompanies = allCompanies.filter(company => company.bookmarked).slice(0, 2);
            if (bookmarkedCompanies.length > 0) {
                bookmarkedCompanies.forEach(company => {
                    leftColumn.innerHTML += generateSupplierCard(company);
                });
            } else {
                leftColumn.innerHTML += '<p style="text-align: center; font-size: 16px; font-weight: 700;">No bookmarked suppliers found</p>';
            }

            // Select one recommended company for right column (highest-rated non-bookmarked)
            const recommendedCompany = allCompanies
                .filter(company => !company.bookmarked)
                .sort((a, b) => (b.reviews || 0) - (a.reviews || 0))[0];
            if (recommendedCompany) {
                rightColumn.innerHTML += generateSupplierCard(recommendedCompany);
            } else {
                rightColumn.innerHTML += '<p style="text-align: center; font-size: 16px; font-weight: 700;">No recommended suppliers found</p>';
            }

            // Reinitialize existing functionalities
            if (typeof initMap === 'function') initMap();
            if (typeof attachLocationItemHandlers === 'function') attachLocationItemHandlers();
            if (typeof hideLoader === 'function') hideLoader();

            // Initialize Bootstrap tooltips

        },
        error: function(xhr, status, error) {
            // console.error('Error fetching companies:', error);
            const leftColumn = document.querySelector('.left-column');
            const rightColumn = document.querySelector('.right-column');
            leftColumn.innerHTML = '<h1 class="section-title">Bookmarked Suppliers</h1><p style="text-align: center; font-size: 16px; font-weight: 700;">Failed to load suppliers.</p>';
            rightColumn.innerHTML = `
            <div class="ad-container">
                <div class="ad-header">Advertisement</div>
                <img src="<?php echo e(asset('newAssets/img/dashboard/3.jpg')); ?>" alt="Advertisement" class="ad-image">
            </div>
            <h4 class="section-title">Recommended Suppliers</h4>
            <p style="text-align: center; font-size: 16px; font-weight: 700;">Failed to load suppliers.</p>
        `;
            if (typeof initMap === 'function') initMap();
            if (typeof hideLoader === 'function') hideLoader();
        }
    });

    function truncateName(name) {
        if (name.length > 30) {
            return name.substring(0, 17) + '...';
        }
        return name;
    }


    function updateRating(companyData) {
        const ratingValue = document.querySelector('.rating-value');
        const ratingContainer = document.querySelector('.rating-container');

        if (ratingValue && ratingContainer) {
            ratingValue.textContent = companyData.rating ? companyData.rating.toFixed(1) : '0';
            ratingContainer.setAttribute('data-reviews', companyData.reviews || 0);
        }
    }
</script>

<script>
    $(document).on('click', '.bookmark-link', function(e) {
        e.preventDefault();
        e.stopPropagation();

        var $link = $(this);
        var $icon = $link.closest('.favorite-dashboard-icon');
        var isBookmarked = $icon.hasClass('active');
        const authID = "<?php echo e(Auth::user()->id); ?>";
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
            url: '<?php echo e(route("updateCompanyBookMarks")); ?>',
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
</script>
<!-- Bootstrap and Required JS -->
<script>
    // CSRF Token for Laravel AJAX
    // CSRF Token for Laravel AJAX
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;

    // Function to parse likes consistently
    function parseLikes(likes) {
        return parseInt(likes, 10) || 0;
    }

    // Function to truncate content and add "See more" link
    // Function to truncate content and add "See more" link
    function truncateContent(content, maxLength = 50) {
        if (!content) {
            return `<p>No description available</p>`;
        }

        // Create a temporary element to strip HTML for text length calculation
        const tempDiv = document.createElement('div');
        tempDiv.innerHTML = content;
        const strippedContent = tempDiv.textContent.replace(/ /g, ' ').trim();

        if (strippedContent.length <= maxLength) {
            return `<p>${content}</p>`;
        }

        // Find the last space before maxLength to avoid cutting words
        let lastSpace = strippedContent.substring(0, maxLength).lastIndexOf(' ');

        // If no space is found, take the first maxLength characters as a fallback
        if (lastSpace === -1) {
            lastSpace = maxLength;
        }

        const shortText = strippedContent.substring(0, lastSpace).trim();
        const extraText = strippedContent.substring(lastSpace).trim();

        // Ensure shortText is not empty; if it is, take at least some characters
        let shortContent = shortText;
        let extraContent = extraText;

        if (!shortContent) {
            // Fallback: Take the first maxLength characters if shortText is empty
            shortContent = strippedContent.substring(0, maxLength).trim();
            extraContent = strippedContent.substring(maxLength).trim();
        }

        // If shortContent is still empty, show a default message
        if (!shortContent) {
            shortContent = 'Content unavailable';
            extraContent = '';
        }

        // Split the original HTML content based on the text length
        let currentText = '';
        let isExtra = false;

        // Parse the HTML content to split it at the correct text boundary
        const parser = new DOMParser();
        const doc = parser.parseFromString(`<div>${content}</div>`, 'text/html');
        const walker = document.createTreeWalker(doc.body, NodeFilter.SHOW_TEXT, null, false);
        let node;

        while (node = walker.nextNode()) {
            const nodeText = node.textContent.replace(/ /g, ' ').trim();
            currentText += nodeText;

            if (!isExtra && currentText.length <= lastSpace) {
                if (!shortContent) {
                    shortContent = nodeText;
                } else {
                    shortContent += ' ' + nodeText;
                }
            } else {
                isExtra = true;
                if (!extraContent) {
                    extraContent = nodeText;
                } else {
                    extraContent += ' ' + nodeText;
                }
            }
        }

        // If shortContent is empty after parsing, use the fallback
        if (!shortContent) {
            shortContent = strippedContent.substring(0, maxLength).trim() || 'Content unavailable';
            extraContent = strippedContent.substring(maxLength).trim() || '';
        }

        return `
        <p>
            <span class="visible-content">${shortContent}</span>
            <span class="ellipsis">...</span>
            <span class="extra-content" style="display: none;">${extraContent}</span>
            <a href="#" class="see-more" onclick="toggleContent(event, this)">See more</a>
        </p>
    `;
    }

    // Function to toggle "See more" content
    function toggleContent(event, link) {
        event.preventDefault();
        const parentP = link.closest('p');
        const extraContent = parentP.querySelector('.extra-content');
        const ellipsis = parentP.querySelector('.ellipsis');
        const isExpanded = extraContent.style.display === 'inline';

        if (isExpanded) {
            // Collapse the content
            extraContent.style.display = 'none';
            ellipsis.style.display = 'inline';
            link.textContent = 'See more';
        } else {
            // Expand the content
            extraContent.style.display = 'inline';
            ellipsis.style.display = 'none';
            link.textContent = 'See less';
        }
    }

    // Helper function to get reaction emoji
    function getReactionEmoji(icon) {
        if (!icon) {
            return `<img src="<?php echo e(asset('newAssets/img/socialmedia/heart1.png')); ?>" style="width: 20px; vertical-align: middle;" alt="Outline heart">`;
        }
        const emojiMap = {
            'like': '👍',
            'love': '❤️',
            'celebrate': '👏',
            'funny': '😂',
            'congrats': '🎉',
            'insightful': '💡'
        };
        return emojiMap[icon] || `<img src="<?php echo e(asset('newAssets/img/socialmedia/heart1.png')); ?>" style="width: 20px; vertical-align: middle;" alt="Outline heart">`;
    }

    function getReactionText(icon) {
        const textMap = {
            'like': 'Like',
            'love': 'Love',
            'celebrate': 'Celebrate',
            'funny': 'Funny',
            'congrats': 'Congrats',
            'insightful': 'Insightful'
        };
        return textMap[icon] || 'Like';
    }
    // Helper function to format comment timestamps
    function formatTimeAgo(date) {
        const now = new Date();
        const diffMs = now - new Date(date);
        const diffMins = Math.floor(diffMs / 60000); // Minutes
        const diffHours = Math.floor(diffMins / 60); // Hours
        const diffDays = Math.floor(diffHours / 24); // Days
        const diffWeeks = Math.floor(diffDays / 7); // Weeks
        const diffYears = Math.floor(diffDays / 365); // Years

        if (diffMins === 0) {
            return "just now";
        } else if (diffMins < 60) {
            return `${diffMins}m`;
        } else if (diffHours < 24) {
            return `${diffHours}h`;
        } else if (diffDays < 7) {
            return `${diffDays}d`;
        } else if (diffDays < 365) {
            return `${diffWeeks}w`;
        } else {
            return `${diffYears}y`;
        }
    }

    // Function to generate post HTML
    function generatePostHTML(post) {
        const avatar = post.companyProfileUrl || "<?php echo e(asset('newAssets/img/socialmedia/Logocircle.png')); ?>";
        const image = post.path ? `<img src="${post.path}" alt="Post image" class="post-image" style="max-width: 100%; height: auto;">` : '';
        const formattedDate = post.created_at ? new Date(post.created_at.split('Invalid Date')[0]?.trim().split('\n')[0]).toLocaleDateString('en-US', {
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        }) : 'Unknown date';
        const author = post.name || 'Prax Engineering Ltd';
        const postId = post.id || '';
        const cachedPost = postCache[postId] || {};
        const likes = parseLikes(cachedPost.likes !== undefined ? cachedPost.likes : post.totalActions || 0);
        const comments = Array.isArray(post.comments) ? post.comments : [];
        const reactionIcon = post.userPerfomedAction || cachedPost.reactionIcon || null; // Prioritize server data
        const isSelected = !!post.isLoggedUserPerfomedAction || cachedPost.isSelected || false; // Prioritize server data
        const reactionEmoji = reactionIcon ? getReactionEmoji(reactionIcon) : getReactionEmoji(null);
        const reactionText = reactionIcon ? getReactionText(reactionIcon) : 'Like';
        const reactionClass = isSelected && reactionIcon ? `${reactionIcon} selected` : '';

        console.log(`Rendering post ${postId}: reactionIcon=${reactionIcon}, isSelected=${isSelected}, reactionEmoji=${reactionEmoji}, reactionText=${reactionText}, reactionClass=${reactionClass}`);

        const likeStatsEmoji = likes > 0 && post.actionsPerformed?.length > 0 ?
            getReactionEmoji(post.actionsPerformed[0]) :
            getReactionEmoji(null);
        const likeStats = likes > 0 ? `
        <div class="like-stats-container">
            <span class="like-count">${likeStatsEmoji} ${likes}</span>
        </div>
    ` : '<div class="like-stats-container"></div>';

        const companyId = post.companyID || '';

        return `
        <div class="post-card" data-post-id="${postId}">
            <div class="post-header">
                <img src="${avatar}" alt="Profile" class="post-avatar">
                <div class="post-author">
                    <h6 class="mb-0 post-auth-head">${author}</h6>
                    <div class="post-date">${formattedDate}</div>
                </div>
                <div class="post-menu">
                    <i class="fas fa-ellipsis-v fas-custom-v"></i>
                    <div class="menu-popup" style="display: none;">
                        <div class="menu-option interested" companyid="${companyId}">View Profile</div>
                    </div>
                </div>
            </div>
            <div class="post-content">
                ${truncateContent(post.description)}
            </div>
            ${image}
            <div class="post-stats">
                ${likeStats}
                <div>
                    <span class="comment-count"><img src="<?php echo e(asset('newAssets/img/socialmedia/1.png')); ?>" style="width: 20px;margin-right: 10px;" alt="Comment icon" class="post-image">${comments.length}</span>

                </div>
            </div>
            <div class="hr-1"></div>
            <div class="post-actions">
                <div class="post-action like-button ${reactionClass}" data-post-id="${postId}" data-action="react">
                    <span class="reaction-emoji">${reactionEmoji} ${reactionText}</span>
                    <div class="reaction-options" style="display: none;left: 81px !important;margin-bottom: 93px !important;">
                        <div class="reaction-option" data-icon="like" data-name="Like">👍</div>
                        <div class="reaction-option" data-icon="love" data-name="Love">❤️</div>
                        <div class="reaction-option" data-icon="celebrate" data-name="Celebrate">👏</div>
                        <div class="reaction-option" data-icon="funny" data-name="Funny">😂</div>
                        <div class="reaction-option" data-icon="congrats" data-name="Congrats">🎉</div>
                        <div class="reaction-option" data-icon="insightful" data-name="Insightful">💡</div>
                    </div>
                </div>
                <div class="post-action-comment comment-button" data-post-id="${postId}">
                    <img src="<?php echo e(asset('newAssets/img/socialmedia/1.png')); ?>" style="width: 20px;" alt="Comment icon" class="post-image"> Comment
                </div>
                <div class="post-action-share share-button" data-post-id="${postId}" data-blog-id="${postId}">
                    <img src="<?php echo e(asset('newAssets/img/socialmedia/2.png')); ?>" style="width: 20px;" alt="Share icon" class="post-image"> Share
                </div>
            </div>
        </div>
    `;
    }
    // Function to show toast notification
    function showToast(message) {
        const toast = document.createElement('div');
        toast.className = 'toast-notification';
        toast.textContent = message;
        document.body.appendChild(toast);

        // Show toast
        setTimeout(() => {
            toast.classList.add('show');
        }, 100);

        // Hide toast after 3 seconds
        setTimeout(() => {
            toast.classList.remove('show');
            setTimeout(() => {
                toast.remove();
            }, 300);
        }, 3000);
    }

    // Add event listener for share buttons
    document.addEventListener('click', function(event) {
        const shareButton = event.target.closest('.post-action-share');
        if (shareButton) {
            const blogId = shareButton.getAttribute('data-blog-id');
            const origin = window.location.origin; // e.g., http://localhost, https://test.praxengineering.com, or https://praxmarket.com
            console.log("origin", origin);

            let baseUrl = '';
            let projectPath = '';

            // Determine the environment and set baseUrl and projectPath accordingly
            if (origin.includes('localhost')) {
                // Localhost environment
                baseUrl = origin; // e.g., http://localhost
                const fullPath = window.location.pathname; // e.g., /PVT-PraxMarket-website-2025/blog-view
                const pathSegments = fullPath.split('/').filter(segment => segment); // e.g., ['PVT-PraxMarket-website-2025', 'blog-view']
                projectPath = pathSegments.length > 0 ? `/${pathSegments[0]}` : ''; // e.g., /PVT-PraxMarket-website-2025
            } else if (origin === 'https://test.praxengineering.com') {
                // Test server environment
                baseUrl = origin; // e.g., https://test.praxengineering.com
                projectPath = '/PVT-PraxMarket-website-2025'; // Hardcode the project path for test server
            } else if (origin === 'https://praxmarket.com') {
                // Live server environment
                baseUrl = origin; // e.g., https://praxmarket.com
                projectPath = ''; // No additional path needed for live server
            } else {
                // Fallback for unknown environments (e.g., use live server as default)
                baseUrl = 'https://praxmarket.com';
                projectPath = '';
            }

            console.log("baseUrl", baseUrl);
            console.log("projectPath", projectPath);

            const shareUrl = `${baseUrl}${projectPath}/blog-view?blogid=${blogId}`;
            console.log("shareUrl", shareUrl);

            // Copy URL to clipboard
            navigator.clipboard.writeText(shareUrl).then(() => {
                showToast('URL copied successfully!');
            }).catch((err) => {
                console.error('Failed to copy URL:', err);
                showToast('Failed to copy URL');
            });
        }
    });

    function generateFullPostHTML(post) {
        console.log('Post Data:', post);
        const avatar = post.companyProfileUrl || "<?php echo e(asset('newAssets/img/socialmedia/Logocircle.png')); ?>";
        const image = post.path ? `<img src="${post.path}" alt="Post image" class="post-image" style="max-width: 100%; height: auto;" onerror="this.onerror=null; this.src='<?php echo e(asset('newAssets/img/socialmedia/default.png')); ?>';">` : '<p>No image available</p>';
        const formattedDate = post.created_at ? new Date(post.created_at.split('\n')[0]?.trim()).toLocaleDateString('en-US', {
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        }) : 'No date available';
        const author = post.name || 'Prax Engineering Ltd';
        const postId = post.id || '';
        const cachedPost = postCache[postId] || {};
        const likes = parseLikes(cachedPost.likes !== undefined ? cachedPost.likes : post.likes);
        const comments = Array.isArray(post.comments) ? post.comments : [];
        const reactionIcon = cachedPost.reactionIcon || post.reactionIcon || null;
        const isSelected = cachedPost.isSelected || post.isSelected || false;
        const reactionEmoji = reactionIcon ? getReactionEmoji(reactionIcon) : getReactionEmoji(null);
        const reactionText = reactionIcon ? getReactionText(reactionIcon) : 'Like';
        const reactionClass = isSelected && reactionIcon ? `${reactionIcon} selected` : '';

        const companyId = post.companyID || '';
        if (!companyId) {
            console.warn(`Company ID missing for post ${postId}`);
        }

        console.debug(`Rendering full post ${postId}: likes=${likes}, reactionEmoji=${reactionEmoji}, reactionIcon=${reactionIcon}, companyId=${companyId}`);

        const likeStats = likes > 0 ? `
        <div class="like-stats-container">
            <span class="like-count">${cachedPost.actionsPerformed?.length > 0 ? getReactionEmoji(cachedPost.actionsPerformed[0]) : reactionEmoji} ${likes}</span>
        </div>
    ` : '<div class="like-stats-container"></div>';

        // START: Sort comments newest first
        const sortedComments = [...comments].sort((a, b) => new Date(b.created_at) - new Date(a.created_at));
        // END: Sort comments newest first

        return `
        <div class="post-card" data-post-id="${postId}" style="background-color: transparent; box-shadow: none;border-radius:none;border:none">
            <div class="post-header">
                <img src="${avatar}" alt="Profile" class="post-avatar">
                <div class="post-author">
                    <h6 class="mb-0 post-auth-head">${author}</h6>
                    <div class="post-date">${formattedDate}</div>
                </div>
                <div class="post-menu">
                    <i class="fas fa-ellipsis-v fas-custom-v"></i>
                    <div class="menu-popup" style="display: none;">
                        ${companyId ? `<div class="menu-option interested" companyid="${companyId}">View Profile</div>` : 'View Profile'}
                    </div>
                </div>
            </div>
            <div class="post-content" style="text-align: start;">
                ${truncateContent(post.description)}
            </div>
            ${image}
            <div class="post-stats">
                ${likeStats}
                <div>
                    <span class="comment-count"><img src="<?php echo e(asset('newAssets/img/socialmedia/1.png')); ?>" style="width: 20px;margin-right: 10px;" alt="Comment icon" class="post-image">${comments.length}</span>
                </div>
            </div>
            <div class="hr-1"></div>
            <div class="post-actions">
                <div class="post-action like-button ${reactionClass}" data-post-id="${postId}" data-action="react">
                    <span class="reaction-emoji">${reactionEmoji} ${reactionText}</span>
                    <div class="reaction-options" style="display: none;left: 0px !important;">
                        <div class="reaction-option" data-icon="like" data-name="Like">👍</div>
                        <div class="reaction-option" data-icon="love" data-name="Love">❤️</div>
                        <div class="reaction-option" data-icon="celebrate" data-name="Celebrate">👏</div>
                        <div class="reaction-option" data-icon="funny" data-name="Funny">😂</div>
                        <div class="reaction-option" data-icon="congrats" data-name="Congrats">🎉</div>
                        <div class="reaction-option" data-icon="insightful" data-name="Insightful">💡</div>
                    </div>
                </div>
                <div class="post-action-comment comment-button" data-post-id="${postId}">
                    <img src="<?php echo e(asset('newAssets/img/socialmedia/1.png')); ?>" style="width: 20px;" alt="Comment icon" class="post-image"> Comment
                </div>
                <div class="post-action-share share-button" data-post-id="${postId}" data-blog-id="${postId}">
                    <img src="<?php echo e(asset('newAssets/img/socialmedia/2.png')); ?>" style="width: 20px;" alt="Share icon" class="post-image"> Share
                </div>
            </div>
            <div class="hr-1"></div>
            <div class="comment-section">
                <div class="comment-list">
                    ${sortedComments.length > 0 ? sortedComments.map(comment => {
                        const wordCount = comment.text?.split(/\s+/).length;
                        const commentClass = wordCount > 30 ? 'comment-text long-comment' : 'comment-text';
                        return `
                            <div class="comment-item">
                                <img src="${comment.commenterImage || avatar}" alt="Profile" class="comment-avatar">
                                <div class="comment-content">
                                    <div class="comment-bg">
                                        <div class="comment-author">${comment.user || 'Anonymous'}</div>
                                        <p class="${commentClass}">${comment.text || 'No comment text'}</p>
                                    </div>
                                    <div class="comment-time">${comment.created_at ? formatTimeAgo(comment.created_at) : 'Just now'}</div>
                                </div>
                            </div>
                        `;
                    }).join('') : '<p>No comments available.</p>'}
                </div>
                <div class="hr-2"></div>
                <div class="comment-custom-input">
                    <img src="${avatar}" alt="Profile" class="input-avatar">
                    <div class="comment-input-container">
                        <input type="text" class="comment-input" placeholder="Write a comment..." data-post-id="${postId}">
                        <span class="send-arrow" data-post-id="${postId}"><img src="<?php echo e(asset('newAssets/img/socialmedia/share.png')); ?>" style="width: 20px;" alt="Comment icon"></span>
                    </div>
                </div>
            </div>
        </div>
    `;
    }
    // Function to fetch comments for a post
    function fetchComments(postId, callback) {
        const apiUrl = "<?php echo e(route('post.getPostComments')); ?>?postID=" + postId;

        $.ajax({
            url: apiUrl,
            type: 'GET',
            headers: {
                'Accept': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            success: function(response, textStatus, xhr) {
                let comments = [];

                if (typeof response === 'string') {
                    console.warn('Non-JSON response received:', response);
                    try {
                        response = JSON.parse(response);
                    } catch (e) {
                        callback(new Error('Failed to parse JSON'), []);
                        return;
                    }
                }

                if (response && response.data && Array.isArray(response.data)) {
                    comments = response.data;
                } else if (Array.isArray(response)) {
                    comments = response;
                } else {
                    console.warn('Unexpected response structure:', response);
                }

                if (!Array.isArray(comments)) {
                    console.warn('Comments is not an array:', comments);
                    comments = [];
                }

                const mappedComments = comments.map(comment => {
                    return {
                        text: comment.text || comment.comment || comment.content || 'No comment text',
                        user: comment.commentedBy || comment.user || 'Anonymous',
                        commenterImage: comment.commenterImage || comment.image || "<?php echo e(asset('newAssets/img/socialmedia/Logocircle.png')); ?>",
                        created_at: comment.created_at || new Date().toISOString()
                    };
                });

                // START: Added to sort comments newest first
                mappedComments.sort((a, b) => new Date(b.created_at) - new Date(a.created_at));
                // END: Added to sort comments newest first

                callback(null, mappedComments);
            },
            error: function(xhr, status, error) {
                console.error('Error fetching comments for post', postId, ':', status, error, xhr.status, xhr.responseText);
                callback(new Error('Failed to fetch comments'), []);
            }
        });
    }

    // Function to submit comments
    function submitComment(postId, commentText) {
        const apiUrl = "<?php echo e(route('post.applyComments')); ?>";
        const authId = "<?php echo e(Auth::user()->id); ?>";
        const postCard = $(`.post-card[data-post-id="${postId}"]`);
        const commentInput = postCard.find('.comment-input');
        const commentList = postCard.find('.comment-list');
        const avatar = "<?php echo e(asset('newAssets/img/socialmedia/Logocircle.png')); ?>";

        // START: Optimistic UI update - prepend new comment
        const tempComment = {
            text: commentText,
            user: "<?php echo e(Auth::user()->name || 'Anonymous'); ?>",
            commenterImage: avatar,
            created_at: new Date().toISOString()
        };
        const wordCount = commentText.split(/\s+/).length;
        const commentClass = wordCount > 30 ? 'comment-text long-comment' : 'comment-text';
        const tempCommentHtml = `
        <div class="comment-item">
            <img src="${tempComment.commenterImage}" alt="Profile" class="comment-avatar">
            <div class="comment-content">
                <div class="comment-bg">
                    <div class="comment-author">${tempComment.user}</div>
                    <p class="${commentClass}">${tempComment.text}</p>
                </div>
                <div class="comment-time">just now</div>
            </div>
        </div>
    `;
        commentList.prepend(tempCommentHtml);

        // Scroll to the top of the comment list
        commentList.scrollTop(0);

        // Update comment count optimistically
        const currentComments = postCache[postId]?.comments || [];
        const newCommentCount = currentComments.length + 1;
        postCard.find('.comment-count').html(`<img src="<?php echo e(asset('newAssets/img/socialmedia/1.png')); ?>" style="width: 20px;margin-right: 10px;" alt="Comment icon" class="post-image">${newCommentCount}`);
        // END: Optimistic UI update

        commentInput.val('');

        $.ajax({
            url: apiUrl,
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json'
            },
            data: {
                authID: authId,
                postID: postId,
                comment: commentText
            },
            success: function(response, textStatus, xhr) {
                fetchComments(postId, function(error, comments) {
                    if (error) {
                        console.error('Failed to refresh comments:', error);
                        showToast('Comment submitted, but failed to refresh comments.');
                        // Revert optimistic update
                        commentList.find('.comment-item:first').remove();
                        postCard.find('.comment-count').html(`<img src="<?php echo e(asset('newAssets/img/socialmedia/1.png')); ?>" style="width: 20px;margin-right: 10px;" alt="Comment icon" class="post-image">${currentComments.length}`);
                        return;
                    }

                    // Update postCache with sorted comments
                    postCache[postId] = {
                        ...postCache[postId],
                        comments: comments,
                        likes: postCache[postId]?.likes || 0
                    };

                    const commentCount = comments.length;
                    const commentCountElements = $(`.post-card[data-post-id="${postId}"] .comment-count`);
                    commentCountElements.each(function() {
                        $(this).html(`<img src="<?php echo e(asset('newAssets/img/socialmedia/1.png')); ?>" style="width: 20px;margin-right: 10px;" alt="Comment icon" class="post-image">${commentCount}`);
                    });

                    // Update modal if open
                    const modal = $('#commentModal');
                    if (modal.is(':visible') && modal.find(`.post-card[data-post-id="${postId}"]`).length) {
                        const modalCommentList = modal.find('.comment-list');
                        const commentHtml = `
                        ${comments.length > 0 ? comments.map(comment => {
                            const wordCount = comment.text?.split(/\s+/).length;
                            const commentClass = wordCount > 30 ? 'comment-text long-comment' : 'comment-text';
                            return `
                                <div class="comment-item">
                                    <img src="${comment.commenterImage || avatar}" alt="Profile" class="comment-avatar">
                                    <div class="comment-content">
                                        <div class="comment-bg">
                                            <div class="comment-author">${comment.user || 'Anonymous'}</div>
                                            <p class="${commentClass}">${comment.text || 'No comment text'}</p>
                                        </div>
                                        <div class="comment-time">${comment.created_at ? formatTimeAgo(comment.created_at) : 'Just now'}</div>
                                    </div>
                                </div>
                            `;
                        }).join('') : '<p>No comments available.</p>'}
                    `;
                        modalCommentList.html(commentHtml);
                        // Scroll to the top of the modal comment list
                        modalCommentList.scrollTop(0);
                    }

                    // Update main post card
                    const mainPostCard = $(`#posts-container .post-card[data-post-id="${postId}"]`);
                    if (mainPostCard.length) {
                        mainPostCard.find('.comment-count').html(`<img src="<?php echo e(asset('newAssets/img/socialmedia/1.png')); ?>" style="width: 20px;margin-right: 10px;" alt="Comment icon" class="post-image">${commentCount}`);
                    }
                });
            },
            error: function(xhr, status, error) {
                console.error('Error submitting comment:', status, error, xhr.status, xhr.responseText);
                showToast('Failed to submit comment. Please try again.');
                // Revert optimistic update
                commentList.find('.comment-item:first').remove();
                postCard.find('.comment-count').html(`<img src="<?php echo e(asset('newAssets/img/socialmedia/1.png')); ?>" style="width: 20px;margin-right: 10px;" alt="Comment icon" class="post-image">${currentComments.length}`);
            }
        });
    }
    // Function to show modal with full post
    function showPostModal(postId, postData) {
        const modalId = 'commentModal';
        let modal = $(`#${modalId}`);

        if (!modal.length) {
            const modalHtml = `
            <div class="modal fade" id="${modalId}" tabindex="-1" role="dialog" aria-labelledby="${modalId}Label" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-blog-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title modal-title-1" id="${modalId}Label">Post Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body modal-view-body"></div>
                    </div>
                </div>
            </div>
        `;
            $('body').append(modalHtml);
            modal = $(`#${modalId}`);
        }

        modal.find('.modal-body').html(generateFullPostHTML(postData));
        modal.modal('show');

        modal.find('.send-arrow').off('click').on('click', function() {
            const commentText = $(this).closest('.comment-input-container').find('.comment-input').val().trim();
            if (commentText) {
                submitComment(postId, commentText);
            } else {
                alert('Please enter a comment.');
            }
        });

        modal.find('.comment-input').off('keypress').on('keypress', function(e) {
            if (e.which === 13) {
                e.preventDefault();
                const commentText = $(this).val().trim();
                if (commentText) {
                    submitComment(postId, commentText);
                } else {
                    alert('Please enter a comment.');
                }
            }
        });
    }

    // Global variables for infinite scrolling
    let currentPage = 1;
    let isLoading = false;
    let postCache = {};

    function fetchPosts(page = 1) {
        if (isLoading) return;

        isLoading = true;
        const apiUrl = `<?php echo e(route('post.getPostIndex')); ?>?page=${page}`;

        $('#posts-container').append('<div id="loading" class="text-center">Loading...</div>');

        $.ajax({
            url: apiUrl,
            type: 'GET',
            headers: {
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json'
            },
            success: function(response, textStatus, xhr) {
                console.log("API response for fetchPosts:", response);
                const posts = response.data || response;
                $('#loading').remove();

                if (!Array.isArray(posts) || posts.length === 0) {
                    if (page === 1) {
                        $('#posts-container').html('<p>No posts available.</p>');
                    }
                    isLoading = false;
                    return;
                }

                let postsProcessed = 0;
                posts.forEach(post => {
                    console.log(`Processing post:`, post);
                    if (!post.id) {
                        console.warn(`Post missing ID:`, post);
                        post.comments = [];
                        postsProcessed++;
                        if (postsProcessed === posts.length) {
                            const html = posts.map(post => generatePostHTML(post)).join('');
                            if (page > 1) {
                                $('#posts-container').append(html);
                            } else {
                                $('#posts-container').html(html);
                            }
                            bindReactionHandlers();
                        }
                        return;
                    }

                    const existingCache = postCache[post.id] || {};
                    postCache[post.id] = {
                        id: post.id,
                        path: post.path || existingCache.path || '',
                        created_at: post.created_at || existingCache.created_at || '',
                        name: post.name || existingCache.name || 'Prax Engineering Ltd',
                        description: post.description || existingCache.description || '',
                        likes: parseLikes(post.totalActions || post.likes || existingCache.likes || 0),
                        comments: existingCache.comments || [],
                        reactionIcon: post.userPerfomedAction || existingCache.reactionIcon || null, // Use userPerfomedAction
                        isSelected: !!post.isLoggedUserPerfomedAction || existingCache.isSelected || false, // Use isLoggedUserPerfomedAction
                        companyID: post.companyID || existingCache.companyID || '',
                        companyProfileUrl: post.companyProfileUrl || existingCache.companyProfileUrl || "<?php echo e(asset('newAssets/img/socialmedia/Logocircle.png')); ?>",
                        actionsPerformed: post.actionsPerformed || existingCache.actionsPerformed || []
                    };

                    console.log(`Updated postCache[${post.id}] after fetch:`, postCache[post.id]);

                    fetchComments(post.id, function(error, comments) {
                        if (error) {
                            console.warn('Using empty comments for post', post.id, 'due to error');
                            post.comments = [];
                        } else {
                            post.comments = comments;
                            postCache[post.id].comments = comments;
                        }

                        postsProcessed++;
                        if (postsProcessed === posts.length) {
                            const html = posts.map(post => generatePostHTML(post)).join('');
                            if (page > 1) {
                                $('#posts-container').append(html);
                            } else {
                                $('#posts-container').html(html);
                            }
                            bindReactionHandlers();
                        }
                    });
                });

                currentPage++;
                isLoading = false;
            },
            error: function(xhr, status, error) {
                console.error('Error fetching posts:', status, error, xhr.status, xhr.responseText);
                $('#loading').remove();
                $('#posts-container').html('<p>Error loading posts. Please try again.</p>');
                isLoading = false;
            }
        });
    }

    function bindReactionHandlers() {
        $(document).off('click', '.reaction-option').on('click', '.reaction-option', function() {
            const postId = $(this).closest('.post-card').data('post-id');
            const icon = $(this).data('icon');
            console.log(`Reaction option clicked: postId=${postId}, icon=${icon}`);
            if (!postId || !icon) {
                console.error(`Invalid postId=${postId} or icon=${icon}`);
                return;
            }
            applyAction(postId, 'react', icon);
        });
    }
    // Function to render posts
    function renderPosts(posts, postsContainer, append = false) {
        if (!append) {
            postsContainer.empty();
        }
        const uniquePosts = posts.filter((post, index, self) =>
            index === self.findIndex((p) => p.id === post.id)
        );
        uniquePosts.forEach(post => {
            try {
                postsContainer.append(generatePostHTML(post));
            } catch (error) {
                // Error handling can go here if needed
            }
        });
    }
    let isApplyingAction = false;

    function applyAction(postId, action, icon) {
        if (isApplyingAction) return;
        isApplyingAction = true;

        const apiUrl = "<?php echo e(route('post.applyActions')); ?>";
        const authId = "<?php echo e(Auth::user()->id); ?>";
        const postCard = $(`.post-card[data-post-id="${postId}"]`);
        if (!postCard.length) {
            console.error(`Post card with ID ${postId} not found`);
            isApplyingAction = false;
            return;
        }

        const reactionButton = postCard.find('.like-button');
        const likeStatsContainer = postCard.find('.like-stats-container');

        const isUnclick = reactionButton.hasClass(icon) && reactionButton.hasClass('selected');
        const actionType = isUnclick ? 'UNCLICKED' : 'CLICKED';

        const previousState = postCache[postId] ? {
            ...postCache[postId]
        } : {
            id: postId,
            likes: 0,
            reactionIcon: null,
            isSelected: false,
            comments: [],
            description: '',
            created_at: '',
            name: 'Prax Engineering Ltd',
            path: '',
            companyID: '',
            companyProfileUrl: "<?php echo e(asset('newAssets/img/socialmedia/Logocircle.png')); ?>",
            actionsPerformed: []
        };

        const currentLikes = parseLikes(postCache[postId]?.likes || 0);
        const tempLikes = actionType === 'CLICKED' ? currentLikes + 1 : Math.max(0, currentLikes - 1);
        const tempEmoji = actionType === 'UNCLICKED' ? getReactionEmoji(null) : getReactionEmoji(icon);
        const tempReactionText = actionType === 'UNCLICKED' ? 'Like' : getReactionText(icon);
        const tempReactionClass = actionType === 'UNCLICKED' ? '' : `${icon} selected`;
        const tempActionsPerformed = actionType === 'UNCLICKED' ?
            (postCache[postId]?.actionsPerformed || []).filter(a => a !== icon) : [...new Set([...(postCache[postId]?.actionsPerformed || []), icon])];

        // Optimistic UI update
        if (tempLikes === 0) {
            likeStatsContainer.empty();
            reactionButton.removeClass('like love celebrate funny congrats insightful selected');
            reactionButton.find('.reaction-emoji').html(`${tempEmoji} ${tempReactionText}`);
        } else {
            const likeStatsEmoji = tempActionsPerformed.length > 0 ? getReactionEmoji(tempActionsPerformed[0]) : tempEmoji;
            const likeStatsHtml = `<span class="like-count">${likeStatsEmoji} ${tempLikes}</span>`;
            likeStatsContainer.html(likeStatsHtml);
            reactionButton.removeClass('like love celebrate funny congrats insightful');
            reactionButton.addClass(tempReactionClass);
            reactionButton.find('.reaction-emoji').html(`${tempEmoji} ${tempReactionText}`);
        }

        $.ajax({
            url: apiUrl,
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json'
            },
            data: {
                authID: authId,
                postID: postId,
                action: actionType,
                icon: icon
            },
            success: function(response) {
                console.log(`Backend response for applyAction on post ${postId}:`, response);

                // Handle different response formats
                let likes, actionsPerformed, userPerformedAction, isLoggedUserPerformedAction;
                if (typeof response === 'number') {
                    // Response is a number (e.g., 1 for success), use temporary values
                    likes = tempLikes;
                    actionsPerformed = tempActionsPerformed;
                    userPerformedAction = actionType === 'UNCLICKED' ? null : icon;
                    isLoggedUserPerformedAction = actionType === 'UNCLICKED' ? 0 : 4;
                } else {
                    // Response is an object with post data
                    likes = response.likes !== undefined && !isNaN(response.likes) ?
                        parseLikes(response.likes) :
                        (response.data?.likes !== undefined ? parseLikes(response.data.likes) : tempLikes);
                    actionsPerformed = response.actionsPerformed || response.data?.actionsPerformed || tempActionsPerformed;
                    userPerformedAction = response.userPerformedAction || response.data?.userPerformedAction || (actionType === 'UNCLICKED' ? null : icon);
                    isLoggedUserPerformedAction = response.isLoggedUserPerformedAction || response.data?.isLoggedUserPerformedAction || (actionType === 'UNCLICKED' ? 0 : 4);
                }

                postCache[postId] = {
                    ...postCache[postId],
                    id: postId,
                    likes: likes,
                    reactionIcon: userPerformedAction,
                    isSelected: !!isLoggedUserPerformedAction,
                    comments: postCache[postId]?.comments || [],
                    description: postCache[postId]?.description || '',
                    created_at: postCache[postId]?.created_at || '',
                    name: postCache[postId]?.name || 'Prax Engineering Ltd',
                    path: postCache[postId]?.path || '',
                    companyID: postCache[postId]?.companyID || '',
                    companyProfileUrl: postCache[postId]?.companyProfileUrl || "<?php echo e(asset('newAssets/img/socialmedia/Logocircle.png')); ?>",
                    actionsPerformed: actionsPerformed
                };

                console.log(`Updated postCache[${postId}]:`, postCache[postId]);

                // Final UI update
                const emoji = postCache[postId].reactionIcon ? getReactionEmoji(postCache[postId].reactionIcon) : getReactionEmoji(null);
                const reactionText = postCache[postId].reactionIcon ? getReactionText(postCache[postId].reactionIcon) : 'Like';
                const reactionClass = postCache[postId].isSelected && postCache[postId].reactionIcon ? `${postCache[postId].reactionIcon} selected` : '';

                if (likes === 0) {
                    likeStatsContainer.empty();
                    reactionButton.removeClass('like love celebrate funny congrats insightful selected');
                    reactionButton.find('.reaction-emoji').html(`${emoji} ${reactionText}`);
                } else {
                    const likeStatsEmoji = actionsPerformed.length > 0 ? getReactionEmoji(actionsPerformed[0]) : getReactionEmoji(null);
                    const likeStatsHtml = `<span class="like-count">${likeStatsEmoji} ${likes}</span>`;
                    likeStatsContainer.html(likeStatsHtml);
                    reactionButton.removeClass('like love celebrate funny congrats insightful');
                    reactionButton.addClass(reactionClass);
                    reactionButton.find('.reaction-emoji').html(`${emoji} ${reactionText}`);
                }

                updateMainPostCard(postId);
                const modal = $('#commentModal');
                if (modal.is(':visible') && modal.find(`.post-card[data-post-id="${postId}"]`).length) {
                    showPostModal(postId, postCache[postId]);
                }
            },
            error: function(xhr, status, error) {
                console.error(`Error applying action for post ${postId}:`, status, error, xhr.responseText);
                showToast('Failed to apply action. Please try again.');

                const emoji = previousState.reactionIcon ? getReactionEmoji(previousState.reactionIcon) : getReactionEmoji(null);
                const reactionText = previousState.reactionIcon ? getReactionText(previousState.reactionIcon) : 'Like';
                const likes = parseLikes(previousState.likes);
                const reactionClass = previousState.isSelected && previousState.reactionIcon ? `${previousState.reactionIcon} selected` : '';

                if (likes === 0) {
                    likeStatsContainer.empty();
                    reactionButton.removeClass('like love celebrate funny congrats insightful selected');
                    reactionButton.find('.reaction-emoji').html(`${emoji} ${reactionText}`);
                } else {
                    const likeStatsEmoji = previousState.actionsPerformed?.length > 0 ? getReactionEmoji(previousState.actionsPerformed[0]) : emoji;
                    const likeStatsHtml = `<span class="like-count">${likeStatsEmoji} ${likes}</span>`;
                    likeStatsContainer.html(likeStatsHtml);
                    reactionButton.removeClass('like love celebrate funny congrats insightful');
                    reactionButton.addClass(reactionClass);
                    reactionButton.find('.reaction-emoji').html(`${emoji} ${reactionText}`);
                }

                postCache[postId] = previousState;
            },
            complete: function() {
                isApplyingAction = false;
            }
        });
    }

    function updateMainPostCard(postId) {
        const postCard = $(`#posts-container .post-card[data-post-id="${postId}"]`);
        if (!postCard.length || !postCache[postId]) {
            console.warn(`Post card or cache not found for postId: ${postId}`);
            return;
        }

        const post = postCache[postId];
        const reactionButton = postCard.find('.like-button');
        const likeStatsContainer = postCard.find('.like-stats-container');
        const commentCountElement = postCard.find('.comment-count');

        const reactionIcon = post.reactionIcon || null;
        const isSelected = post.isSelected || false;
        const reactionEmoji = reactionIcon ? getReactionEmoji(reactionIcon) : getReactionEmoji(null);
        const reactionText = reactionIcon ? getReactionText(reactionIcon) : 'Like';
        const reactionClass = isSelected && reactionIcon ? `${reactionIcon} selected` : '';
        const likes = parseLikes(post.likes);
        const comments = Array.isArray(post.comments) ? post.comments : [];

        console.debug(`Updating post ${postId}: likes=${likes}, reactionEmoji=${reactionEmoji}, reactionIcon=${reactionIcon}, isSelected=${isSelected}`);

        postCard.find('.post-actions').css({
            'display': 'flex',
            'justify-content': 'space-between',
            'gap': '10px',
            'flex-wrap': 'nowrap'
        });

        if (likes > 0) {
            const likeStatsEmoji = post.actionsPerformed?.length > 0 ? getReactionEmoji(post.actionsPerformed[0]) : reactionEmoji;
            const likeStatsHtml = `<span class="like-count">${likeStatsEmoji} ${likes}</span>`;
            likeStatsContainer.html(likeStatsHtml);
        } else {
            likeStatsContainer.empty();
        }

        reactionButton.removeClass('like love celebrate funny congrats insightful selected');
        if (reactionClass) reactionButton.addClass(reactionClass);
        reactionButton.find('.reaction-emoji').html(`${reactionEmoji} ${reactionText}`);
        commentCountElement.html(`<img src="<?php echo e(asset('newAssets/img/socialmedia/1.png')); ?>" style="width: 20px;margin-right: 10px;" alt="Comment icon" class="post-image">${comments.length}`);

        postCard.find('.post-stats').css({
            'display': 'flex',
            'visibility': 'visible',
            'justify-content': 'space-between'
        });
    }

    $(document).ready(function() {
        // Fetch initial posts
        fetchPosts();

        // Scroll event listener for infinite scrolling
        $(window).on('scroll', function() {
            if ($(window).scrollTop() + $(window).height() >= $(document).height() - 100) {
                fetchPosts(currentPage);
            }
        });

        // Hover effect for reaction options
        $(document).on('mouseover', '.like-button', function() {
            const reactionButton = $(this);
            const options = reactionButton.find('.reaction-options');
            if (!reactionButton.hasClass('selected')) {
                options.css({
                    display: 'flex',
                    position: 'absolute',
                    background: '#f5f5f5',
                    border: '1px solid #ccc',
                    borderRadius: '10px',
                    padding: '5px',
                    gap: '5px',
                    boxShadow: '0 2px 5px rgba(0,0,0,0.2)'
                });
                options.show();
            }
        }).on('mouseout', '.like-button', function() {
            const options = $(this).find('.reaction-options');
            options.hide();
        });

        // Click on reaction option
        $(document).on('click', '.reaction-option', function() {
            const postId = $(this).closest('.like-button').data('post-id');
            const icon = $(this).data('icon');
            applyAction(postId, 'react', icon);
        });

        // Click on like button to toggle reaction
        $(document).on('click', '.like-button', function(e) {
            e.preventDefault();
            const postId = $(this).data('post-id');
            const cachedPost = postCache[postId] || {};
            const currentIcon = cachedPost.isSelected && cachedPost.reactionIcon ?
                cachedPost.reactionIcon :
                'like';
            console.debug(`Like button clicked for post ${postId}: icon=${currentIcon}, isSelected=${cachedPost.isSelected}`);
            applyAction(postId, 'react', currentIcon);
        });
        // Comment button click handler
        $(document).on('click', '.comment-button', function() {
            const postId = $(this).data('post-id');
            const postCard = $(`.post-card[data-post-id="${postId}"]`);
            if (!postCard.length) {
                console.error(`Post card with ID ${postId} not found`);
                return;
            }

            const originalPost = postCache[postId];
            if (!originalPost) {
                console.error(`No cached data found for post ID ${postId}`);
                return;
            }

            console.log('postCache[postId]:', postCache[postId]); // Debug: Log postCache data

            // Get companyID from post card's "View Profile" button or postCache
            const companyId = postCard.find('.interested').attr('companyid') || originalPost.companyID || '';
            if (!companyId) {
                console.warn(`Company ID not found for post ${postId}`);
            }

            const postData = {

                id: originalPost.id,
                path: originalPost.path,
                created_at: originalPost.created_at,
                name: originalPost.name,
                description: originalPost.description,
                likes: parseLikes(postCache[postId]?.likes || 0),
                comments: [],
                reactionIcon: postCache[postId]?.reactionIcon || null,
                isSelected: postCache[postId]?.isSelected || false,
                companyID: companyId,
                companyProfileUrl: originalPost.companyProfileUrl || "<?php echo e(asset('newAssets/img/socialmedia/Logocircle.png')); ?>", // Include dynamic avatar
            };
            {
                console.log(postData, "postData")
            }

            fetchComments(postId, function(error, comments) {
                if (!error && comments) {
                    postData.comments = comments;
                }
                console.log('Final Post Data for Modal:', postData);
                showPostModal(postId, postData);
            });
        });

        // Video drag-and-drop and upload
        // const videoDropArea = document.getElementById('videoDropArea');
        // const videoUpload = document.getElementById('videoUpload');

        // // if (videoDropArea && videoUpload) {
        //     videoDropArea.addEventListener('dragover', (e) => {
        //         e.preventDefault();
        //         videoDropArea.classList.add('dragover');
        //     });

        //     videoDropArea.addEventListener('dragleave', () => {
        //         videoDropArea.classList.remove('dragover');
        //     });

        //     videoDropArea.addEventListener('drop', (e) => {
        //         e.preventDefault();
        //         videoDropArea.classList.remove('dragover');
        //         const files = e.dataTransfer.files;
        //         if (files.length > 0) {
        //             videoUpload.files = files;
        //             uploadVideo(files[0]);
        //         }
        //     });

        //     videoDropArea.addEventListener('click', () => {
        //         videoUpload.click();
        //     });

        //     videoUpload.addEventListener('change', () => {
        //         if (videoUpload.files.length > 0) {
        //             uploadVideo(videoUpload.files[0]);
        //         }
        //     });
        // }
    });

    // Menu popup handling
    document.addEventListener('click', (e) => {
        const menu = e.target.closest('.post-menu');
        if (menu) {
            e.preventDefault();
            e.stopPropagation();
            const popup = menu.querySelector('.menu-popup');
            if (popup) {
                const currentDisplay = window.getComputedStyle(popup).display;
                popup.style.display = currentDisplay === 'block' ? 'none' : 'block';
            }
            return;
        }

        document.querySelectorAll('.menu-popup').forEach(popup => {
            if (!popup.contains(e.target) && !e.target.closest('.post-menu')) {
                popup.style.display = 'none';
            }
        });
    });

    document.querySelectorAll('.menu-option').forEach(option => {
        option.addEventListener('click', (e) => {
            const action = e.target.classList.contains('interested') ? 'interested' : 'not interested';
            console.log(`User selected: ${action}`);
            e.target.closest('.menu-popup').style.display = 'none';
        });
    });

    // Placeholder for uploadVideo (implement as needed)
    function uploadVideo(file) {
        console.log('Uploading video:', file.name);
        // Implement video upload logic here
    }
</script>

<?php echo $__env->make('appLayouts._confirmModal', [
'containerID' => 'companyActionUpdate',
], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('appLayouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/posts/blogview.blade.php ENDPATH**/ ?>