<?php $__env->startSection('content'); ?>
<div class="logo1">
                   <center> <img src="../resources/views/img/logo.jpg">
</div>
<div class="slogan"><center><h1>Добавьте веселья в свою жизнь</h1></div>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php $__currentLoopData = $a; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($loop -> first): ?>
      <div class="carousel-item active">
        <h1><?php echo e($b->name); ?></h1>
      <style> .carousel-item{
    text-align: center;
    align-items: center;
}
.carousel-item > img{
    width: 60% !important;
    border-radius: 5px;
    margin-left: 20%;
    height: 600px; 
}
            </style>
        <img src="<?php echo e($b->img); ?>" class="d-block w-100" alt="<?php echo e($b->img); ?>">
      </div>
      <?php else: ?>
      <div class="carousel-item">
        <h1><?php echo e($b->name); ?></h1>
        <img src="<?php echo e($b->img); ?>" class="d-block w-100" alt="<?php echo e($b->img); ?>">
      </div>
      <?php endif; ?>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Предыдущий</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Следующий</span>
    </button>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/ygaxedir/cykssgu-m1/resources/views/about.blade.php ENDPATH**/ ?>