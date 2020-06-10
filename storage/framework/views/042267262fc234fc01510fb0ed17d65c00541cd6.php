<ul class="social-links ml-md-3">
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
    <li class="nav-item">
        <li><a href="<?php echo e($menu_item->link()); ?>"><i class="<?php echo e($menu_item->title); ?>"></i></a>
    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>



         <?php /**PATH C:\xampp1\htdocs\klubwear\resources\views/partials/menus/footericons.blade.php ENDPATH**/ ?>