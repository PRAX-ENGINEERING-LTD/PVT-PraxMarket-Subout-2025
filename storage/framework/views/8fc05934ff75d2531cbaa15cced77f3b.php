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

    $('#<?php echo e($containerID); ?>').on('click', '.deleteConfirmSweetAlert', function() {
      var url = $(this).attr("data-destroy-route");
      $("#frmDeleteItem").attr("action", url);
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, Delete it!',
        cancelButtonText: 'No, Cancel!',
        reverseButtons: true
      }).then(function(result) {

        if (result.value) {
          $("#frmDeleteItem").submit();
        }

      }).catch(swal.noop)
    });



  });
</script>

<form id="frmDeleteItem" method="GET" action="#">
    <?php echo e(csrf_field()); ?>

</form><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/appLayouts/_deleteModel.blade.php ENDPATH**/ ?>