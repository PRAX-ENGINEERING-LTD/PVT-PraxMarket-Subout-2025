<?php $__env->startSection('content'); ?>

<?php $__env->startSection('main_content'); ?>

<script type="text/javascript">
    $(document).ready(function() {
        $("#tbdItems").on('click', '.viewPost', function() {
            var postID = $(this).closest('tr').attr("postID");
            window.location.href = "<?php echo e(url('view-posts')); ?>" + "/"+postID;
        });
      

        $(".viewPostInPopup").on("click", function() {
            var postUrl = $(this).attr("postUrl");
            $("#photoAsset").attr("src", postUrl);
        });

        $("#verticalModal").on("hidden.bs.modal", function() {
            $("#photoAsset").attr("src", ""); // Reset the image source
        });
    });
</script>
<style>
     .icon-resize a svg{
        width: 20px !important;
        height:20px !important;

    }
    .networkLi{
        margin-left: 10px !important;
    }

    
</style>

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Posts</h3>
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
</div><!-- Container-fluid starts-->

<div class="container-fluid user-list-wrapper">
    <?php if(count($errors) > 0): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert',array('alertType' => 'error'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>

    <?php if(session('post_deleted')): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert', array('alertType' => 'success',
    'message' => session('post_deleted')), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php elseif(session('post_stored')): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert', array('alertType' => 'success',
    'message' => session('post_stored')), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php elseif(session('post_updated')): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert', array('alertType' => 'success',
    'message' => session('post_updated')), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header card-no-border text-end">
                    <div class="card-header-right-icon"><a class="btn btn-primary f-w-500"
                            href="<?php echo e(route('posts.create')); ?>"><i class="fa-solid fa-plus pe-2"></i>Add Post</a></div>
                </div>
                <div class="card-body pt-0 px-0">
                    <div class="list-product user-list-table">
                        <div class="table-responsive custom-scrollbar">
                            <table class="table" id="<?php echo e(count($posts) > 0 ? 'post-index-tables' : ''); ?>">

                                <thead>
                                    <tr>
                                        <th> <span class="c-o-light f-w-600">Name</span></th>
                                        <th> <span class="c-o-light f-w-600">Description</span></th>
                                        <th> <span class="c-o-light f-w-600">Status</span></th>
                                        <th> <span class="c-o-light f-w-600">Updated At</span></th>
                                        <th> <span class="c-o-light f-w-600">Actions</span></th>
                                    </tr>
                                </thead>
                                <tbody id="tbdItems">

                                    <?php if(count($posts) > 0): ?>
                                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="pointer product-removes inbox-data" id="pageUpdateButtons1" postID="<?php echo e($post->id); ?>">
                                        <td class="viewPost"> <?php echo e($post->name  ?? 'N/A'); ?></td>

                                        <td class="viewPost"> <?php echo e($post->description ?? 'N/A'); ?></td>

                                        <?php if($post->status == 'PENDING'): ?>
                                        <td class="viewPost"><span class="badge badge-light-danger"><?php echo e(str_replace('_', ' ', $post->status ?? 'N/A')); ?></span></td>
                                        <?php else: ?>
                                        <td class="viewPost"><span class="badge badge-light-primary"><?php echo e(str_replace('_', ' ', $post->status ?? 'N/A')); ?></span></td>
                                        <?php endif; ?>

                                        <td class="viewPost">
                                            <p><?php echo e($post->updatedDate); ?></p>
                                        </td>
                                        <td class="postActionUpdate" id="postActionUpdate">
                                            <div class="common-align gap-2 justify-content-start">
                                                <a class="bs-tooltip pointer viewPostInPopup" postUrl="<?php echo e(isset($post->path) ? $post->path : ''); ?>" data-toggle="modal" data-bs-target="#verticalModal" aria-hidden="true" data-bs-toggle="modal" data-bs-placement="top"> <svg class="text-primary feather feather-eye me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="View Post" data-original-title="View Post" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg> </a>
                                                <a href="<?php echo e(route('posts.edit', $post->id)); ?>" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Delete">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success feather-edit  me-2">
                                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                    </svg></a>
                                                <a data-destroy-route="<?php echo e(url('delete-post')); ?>/<?php echo e($post->id); ?>" class="deleteConfirmSweetAlert bs-tooltip pointer" data-toggle="modal" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-danger feather feather-trash me-2">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    </svg></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                    <tr>
                                        <td colspan="100" class="text-center"><?php echo e('No data found.'); ?> </td>
                                    </tr>


                                    <?php endif; ?>




                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- Container-fluid Ends-->

<?php echo $__env->make('appLayouts.addedLayouts.imageModal', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php echo $__env->make('appLayouts._deleteModel', [
'containerID' => 'post-index-tables',
], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('appLayouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/posts/index.blade.php ENDPATH**/ ?>