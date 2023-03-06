<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row row-cols-4">
            <?php $__currentLoopData = $a; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col my-2">
                    <div class="card h-100 mx-1" style="width: 18rem;">
                        <img class="card-img-top h-100" src="<?php echo e($b->img); ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($b->name); ?></h5>
                            <p class="card-text"><?php echo e($b->description); ?></p>
                            <a href="#" class="btn btn-dark"><?php echo e($b->price); ?></a>
                            <a href="#" class="btn btn-dark">Подробнее</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/ygaxedir/cykssgu-m1/resources/views/katalog.blade.php ENDPATH**/ ?>