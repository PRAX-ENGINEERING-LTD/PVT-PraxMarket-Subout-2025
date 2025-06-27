<script src="<?php echo e(asset('custom-assets/js/jquery-3.1.1.min.js')); ?>"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script type="text/javascript">
  $(document).ready(function() {


    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
      },
      buttonsStyling: false
    })

    $('.<?php echo e($containerID); ?>').on('click', '.confirmModalAlert', function() {
      var url = $(this).attr("data-confirm-route");
      $("#frmUpdateItem").attr("action", url);
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, Proceed!',
        cancelButtonText: 'No, Cancel!',
        reverseButtons: true,
        confirmButtonClass: 'btn-secondary btnSecondary',
        cancelButtonClass: 'btn-dark btnDark',
      }).then(function(result) {

        if (result.value) {
          $("#frmUpdateItem").submit();
        }

      }).catch(swal.noop)
    });



  });
</script>

<style>
  .btnSecondary:hover {
    box-shadow: 0 10px 20px -10px rgba(112, 102, 224, 0.5) !important;
  }

  .btnDark:hover {
    box-shadow: 0 10px 20px -10px rgba(110, 120, 129, 0.5) !important;
  }
</style>

<form id="frmUpdateItem" method="POST" action="#">
    <?php echo e(csrf_field()); ?>

    <?php echo method_field('GET'); ?>
</form><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/appLayouts/_confirmModal.blade.php ENDPATH**/ ?>