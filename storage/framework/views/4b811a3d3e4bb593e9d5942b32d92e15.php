<?php $__env->startSection('content'); ?>

<?php $__env->startSection('main_content'); ?>



<script src="https://js.stripe.com/v3/"></script>

<script>
    var appurl = "<?php echo e(Config::get('constants.websiteConfigurations.appUrl')); ?>";
    var stripeKey = "<?php echo e($stripeSecretKey); ?>";
    var CardNumberPlaceHolderText = "Card Number";
    var CardExpiryPlaceHolderText = "Expiration Date";
    var CardCvvPlaceHolderText = "CVV";
    const customerID = "<?php echo e(Auth::user()->id); ?>";
    var reloadUrl = "<?php echo e(route('cardAddSuccess')); ?>";
</script>


<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Add Card</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard.index')); ?>"> <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-home')); ?>"></use>
                            </svg></a></li>
                    <li class="breadcrumb-item active">Add Card</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-wrapper border rounded-3">
                        <form class="needs-validation custom-form w-100" method="POST" action="#"
                            method="post" id="frmAddCard" novalidate>
                            <?php echo csrf_field(); ?>
                            <input type="hidden" class="form-control position-relative text-center"
                                name="customerID" id="customerID"
                                value="<?php echo e(Auth::user()->id); ?>" required="">

                            <div class="group">
                                <div class="row cardInputField">
                                    <div class="col-12 mb-4">
                                        <label class="form-label" for="inputEmail4">Card Number</label>
                                        <div id="card-number-element" class="field"></div>
                                        <div id="cardNumberValidationText" class="d-none">
                                            Please enter valid card number.
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 mb-4">
                                    <label class="form-label" for="inputEmail4">Card Expiry Date</label>
                                        <div id="card-expiry-element" class="field"></div>
                                        <div id="cardExpiryValidationText" class="d-none">
                                            Please enter valid expiry date.
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 mb-4">
                                    <label class="form-label" for="inputEmail4">Card CVV Number</label>

                                        <div id="card-cvc-element" class="field"></div>
                                        <div id="cardCvvValidationText" class="d-none">
                                            Please enter valid cvv.
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <button type="submit"
                                class="btn btn-sumbit btn-block mb-3 buttonSubmit customButtonSubmit"
                                id="flexButton" disabled>Add Card</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<?php echo $__env->make('cards.script', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php if($errors->any()): ?>
<?php echo $__env->make('appLayouts.addedLayouts._alert', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('appLayouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/cards/addCard.blade.php ENDPATH**/ ?>