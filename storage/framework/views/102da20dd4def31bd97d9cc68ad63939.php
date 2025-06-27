<?php $__env->startSection('title', 'Private Chat'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Chat</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo e(route('dashboard.index')); ?>">
                            <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-home')); ?>"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item active">Chat</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row g-0">
        <!-- Chat Sidebar -->
        <div class="col-xxl-3 col-xl-4 col-md-5 box-col-5 xl-40">
            <div class="left-sidebar-wrapper card">
                <div class="left-sidebar-chat">
                    <div class="input-group">
                        <span class="input-group-text"><i class="search-icon text-gray" data-feather="search"></i></span>
                        <input class="form-control" type="text" placeholder="Search here..">
                    </div>
                </div>
                <div class="advance-options">
                    <ul class="nav border-tab" id="chat-options-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="chats-tab" data-bs-toggle="tab" href="#chats" role="tab"
                               aria-controls="chats" aria-selected="true">Chats</a>
                        </li>
                       
                    </ul>
                    <div class="tab-content" id="chat-options-tabContent">
                        <div class="tab-pane fade show active" id="chats" role="tabpanel" aria-labelledby="chats-tab">
                            <div class="common-space">
                                <p>Recent chats</p>
                                
                            </div>
                            <ul class="chats-user">
                                <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="common-space">
                                        <div class="chat-time">
                                            <div class="active-profile">
                                                <img class="img-fluid rounded-circle" loading="lazy"
                                                     src="<?php echo e(isset($company->path) ? Storage::disk('s3')->url($company->path) : ''); ?>" alt="user">
                                                <div class="status d-none"></div>
                                            </div>
                                            <div>
                                                <span><?php echo e($company->name); ?></span>
                                                <p>Click to chat</p>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chat Window -->
        <div class="col-xxl-9 col-xl-8 col-md-7 box-col-7 xl-60">
            <div class="card right-sidebar-chat">
                <div class="right-sidebar-title">
                    <div class="common-space">
                        <div class="chat-time-chat">
                            <div class="active-profile-chat">
                                <img class="img-fluid rounded-circle"
                                     src="<?php echo e(asset('assets/images/dashboard-11/user/default.jpg')); ?>" alt="user">
                                <div class="status bg-success"></div>
                            </div>
                            <div>
                                <span>Selected User</span>
                                <p>Online</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 offcanvas-wrapper">
                            <div class="contact-edit chat-alert">
                                <svg><use href="<?php echo e(asset('assets/svg/icon-sprite.svg#spam')); ?>"></use></svg>
                            </div>
                            <div class="contact-edit chat-alert">
                                <svg class="dropdown-toggle" role="menu" data-bs-toggle="dropdown" aria-expanded="false">
                                    <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#menubar')); ?>"></use>
                                </svg>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#!">View Details</a>
                                    <a class="dropdown-item" href="#!">Send Messages</a>
                                    <a class="dropdown-item" href="#!">Add To Favorites</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chat Messages -->
                <div class="right-sidebar-Chats">
                    <div class="msger">
                        <div class="msger-chat">
                            <div class="msg left-msg">
                                <div class="msg-bubble">
                                    <div class="msg-info">
                                        <div class="msg-info-name">User</div>
                                        <div class="msg-info-time">01:14 PM</div>
                                    </div>
                                    <div class="msg-text">Hello! How can I help you? 😊</div>
                                </div>
                            </div>
                        </div>

                        <!-- Chat Input -->
                        <form class="msger-inputarea">
                            <div class="dropdown-form dropdown-toggle" role="main" data-bs-toggle="dropdown"
                                 aria-expanded="false"><i class="icon-plus"></i>
                                <div class="chat-icon dropdown-menu dropdown-menu-start">
                                    <div class="dropdown-item mb-2">
                                        <svg><use href="<?php echo e(asset('assets/svg/icon-sprite.svg#camera')); ?>"></use></svg>
                                    </div>
                                    <div class="dropdown-item">
                                        <svg><use href="<?php echo e(asset('assets/svg/icon-sprite.svg#attachment')); ?>"></use></svg>
                                    </div>
                                </div>
                            </div>
                            <input class="msger-input two uk-textarea" type="text" placeholder="Type Message here..">
                            <div class="open-emoji">
                                <div class="second-btn uk-button"></div>
                            </div>
                            <button class="msger-send-btn" type="submit"><i class="fa fa-location-arrow"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- Container-fluid Ends-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('assets/js/common-chat.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/common-active-chat.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/emoji-js/custom-emoji.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/emoji-js/custom-emojis.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('appLayouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/chats/allChat.blade.php ENDPATH**/ ?>