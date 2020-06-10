
    <ul class="nav justify-content-center">
    
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu_footer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e($menu_footer->link()); ?>"><?php echo e($menu_footer->title); ?></a>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul><?php /**PATH C:\xampp1\htdocs\klubwear\resources\views/partials/menus/footer.blade.php ENDPATH**/ ?>