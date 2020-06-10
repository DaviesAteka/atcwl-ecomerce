

<?php $__env->startSection('title', 'Checkout'); ?>

<?php $__env->startSection('extra-css'); ?>
    <style>
        .mt-32 {
            margin-top: 32px;
        }
    </style>

    <script src="https://js.stripe.com/v3/"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">

        <?php if(session()->has('success_message')): ?>
            <div class="spacer"></div>
            <div class="alert alert-success">
                <?php echo e(session()->get('success_message')); ?>

            </div>
        <?php endif; ?>

        <?php if(count($errors) > 0): ?>
            <div class="spacer"></div>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo $error; ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <h1 class="checkout-heading stylish-heading">Checkout</h1>
        <div class="checkout-section">
            <div>
                <form action="<?php echo e(route('checkout.store')); ?>" method="POST" id="payment-form">
                    <?php echo e(csrf_field()); ?>

                    <h2>Billing Details</h2>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <?php if(auth()->user()): ?>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo e(auth()->user()->email); ?>" readonly>
                        <?php else: ?>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo e(old('email')); ?>" required>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name')); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="<?php echo e(old('address')); ?>" required>
                    </div>

                    <div class="half-form">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" value="<?php echo e(old('city')); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="province">Province</label>
                            <input type="text" class="form-control" id="province" name="province" value="<?php echo e(old('province')); ?>" required>
                        </div>
                    </div> <!-- end half-form -->

                    <div class="half-form">
                        <div class="form-group">
                            <label for="postalcode">Postal Code</label>
                            <input type="text" class="form-control" id="postalcode" name="postalcode" value="<?php echo e(old('postalcode')); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo e(old('phone')); ?>" required>
                        </div>
                    </div> <!-- end half-form -->

                    <div class="spacer"></div>

                    <h2>Payment Details</h2>

                    <div class="form-group">
                        <label for="name_on_card">Name on Card</label>
                        <input type="text" class="form-control" id="name_on_card" name="name_on_card" value="">
                    </div>

                    <div class="form-group">
                        <label for="card-element">
                          Credit or debit card
                        </label>
                        <div id="card-element">
                          <!-- a Stripe Element will be inserted here. -->
                        </div>

                        <!-- Used to display form errors -->
                        <div id="card-errors" role="alert"></div>
                    </div>
                    <div class="spacer"></div>

                    <button type="submit" id="complete-order" class="button-primary full-width">Complete Order</button>



                </form>

                
                    <div class="mt-32">or</div>
                    <div class="mt-32">
                        <h2>Pay with PayPal</h2>

                        <form method="post" id="paypal-payment-form" action="#">
                            <?php echo csrf_field(); ?>
                            <section>
                                <div class="bt-drop-in-wrapper">
                                    <div id="bt-dropin"></div>
                                </div>
                            </section>

                            <input id="nonce" name="payment_method_nonce" type="hidden" />
                            <button class="button-primary" type="submit"><span>Lipa Na Mpesa</span></button>
                        </form>
                    </div>
                
            </div>



            <div class="checkout-table-container">
                <h2>Your Order</h2>

                <div class="checkout-table">
                    <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="checkout-table-row">
                        <div class="checkout-table-row-left">
                            <img src="<?php echo e(productImage($item->model->image)); ?>" alt="item" class="checkout-table-img">
                            <div class="checkout-item-details">
                                <div class="checkout-table-item"><?php echo e($item->model->name); ?></div>
                                <div class="checkout-table-description"><?php echo e($item->model->details); ?></div>
                                <div class="checkout-table-price"> <?php echo e($item->model->presentPrice()); ?></div>
                            </div>
                        </div> <!-- end checkout-table -->

                        <div class="checkout-table-row-right">
                            <div class="checkout-table-quantity"><?php echo e($item->qty); ?></div>
                        </div>
                    </div> <!-- end checkout-table-row -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </div> <!-- end checkout-table -->
               
                <div class="checkout-totals">
                    <div class="checkout-totals-left">
                        Subtotal <br>
                        <?php if(session()->has('coupon')): ?>
                            Discount (<?php echo e(session()->get('coupon')['name']); ?>) :
                            <br>
                            <hr>
                            New Subtotal <br>
                        <?php endif; ?>
                        Tax (<?php echo e(config('cart.tax')); ?>%)<br>
                        <span class="checkout-totals-total">Total</span>

                    </div>

                    <div class="checkout-totals-right">
                        <?php echo e(presentPrice(Cart::subtotal())); ?> <br>
                        <?php if(session()->has('coupon')): ?>
                         -<?php echo e(presentPrice($discount)); ?> <br>
                            <hr>
                             <?php echo e(presentPrice($newSubtotal)); ?> <br>
                        <?php endif; ?>
                        <?php echo e(presentPrice($newTax)); ?> <br>
                        <span class="checkout-totals-total"> <?php echo e(presentPrice($newTotal)); ?></span>

                    </div>
                </div> <!-- end checkout-totals -->
                
            </div>

        </div> <!-- end checkout-section -->
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('shopping.layouts.new', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\klubwear\resources\views/orders/checkout.blade.php ENDPATH**/ ?>