 <!-- latest jquery-->
 <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
 <!-- Bootstrap js-->
 <script src="<?php echo e(asset('assets/js/bootstrap/bootstrap.bundle.min.js')); ?>"></script>
 <!-- feather icon js-->
 <script src="<?php echo e(asset('assets/js/icons/feather-icon/feather.min.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/icons/feather-icon/feather-icon.js')); ?>"></script>
 <!-- scrollbar js-->
 <script src="<?php echo e(asset('assets/js/scrollbar/simplebar.min.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/scrollbar/custom.js')); ?>"></script>
 <!-- Sidebar jquery-->
 <script src="<?php echo e(asset('assets/js/config.js')); ?>"></script>
 <!-- Plugins JS start-->
 <script src="<?php echo e(asset('assets/js/sidebar-menu.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/sidebar-pin.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/slick/slick.min.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/slick/slick.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/header-slick.js')); ?>"></script>
 <?php echo $__env->yieldContent('scripts'); ?>
 <script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/script1.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/theme-customizer/customizer.js')); ?>"></script>



 <!-- Datatable JS START-->

 <script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/datatable/datatables/dataTables.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/datatable/datatables/dataTables.select.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/datatable/datatables/select.bootstrap5.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/datatable/datatables/datatable.custom.js')); ?>"></script>
 <!-- Datatable JS END-->

 
 <script src="<?php echo e(asset('assets/js/sweet-alert/sweetalert.min.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/trash_popup.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/common-check.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/tomselect.js')); ?>"></script>

 <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/intltelinput.min.css')); ?>">
 <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/tagify.css')); ?>">
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 <!-- Status Update-->
 <script>
     $(document).ready(function() {
         $(document).on('change', '.toggle-status', function() {

             let status = $(this).prop('checked') ? 1 : 0;
             let url = $(this).data('route');
             let clickedToggle = $(this);
             $.ajax({
                 type: "PUT",
                 url: url,
                 data: {
                     status: status,
                     _token: '<?php echo e(csrf_token()); ?>',
                 },
                 success: function(data) {
                     clickedToggle.prop('checked', status);
                     toastr.success("Status Updated Successfully");
                 },
                 error: function(xhr, status, error) {
                 }
             });
         });
     });

     $(document).ready(function() {
         // Bootstrap Tooltip Activation
         $('[data-bs-toggle="tooltip"]').tooltip();

         // Custom SVG Tooltip
         $(".tooltip-svg").on("mouseenter", function(event) {
             let tooltipText = $(this).data("tooltip"); // Get tooltip text
             $("#tooltip").text(tooltipText).fadeIn(200);
         });

         $(".tooltip-svg").on("mousemove", function(event) {
             let tooltipWidth = $("#tooltip").outerWidth();
             let tooltipHeight = $("#tooltip").outerHeight();

             $("#tooltip").css({
                 left: event.pageX - (tooltipWidth / 2) + "px",
                 top: event.pageY - tooltipHeight - 15 + "px"
             });
         });

         $(".tooltip-svg").on("mouseleave", function() {
             $("#tooltip").fadeOut(200);
         });
     });
 </script><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/appLayouts/scripts.blade.php ENDPATH**/ ?>