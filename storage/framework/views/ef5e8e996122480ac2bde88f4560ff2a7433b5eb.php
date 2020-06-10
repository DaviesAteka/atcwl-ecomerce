<div class="shop-categories-nav">
  <div class="container">
    <ul class="nav justify-content-between">
      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li class="<?php echo e(request()->category == $category->slug ? 'active' : ''); ?>"><a
          href="<?php echo e(route('shop.index', ['category' => $category->slug])); ?>" class="nav-link"><?php echo e($category->name); ?></a>
      </li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <li>
    </ul>
  </div>
</div>


<?php /**PATH C:\xampp1\htdocs\klubwear\resources\views/shopping/inc/category.blade.php ENDPATH**/ ?>