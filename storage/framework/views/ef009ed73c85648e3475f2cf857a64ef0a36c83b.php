<ul class="nav justify-content-center">
 <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
    <li class="nav-item">
        <a class="nav-link active" href="<?php echo e($menu_item->link()); ?>"><?php echo e($menu_item->title); ?></a>
    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
</ul><?php /**PATH C:\xampp1\htdocs\klubwear\resources\views/partials/menus/main.blade.php ENDPATH**/ ?>