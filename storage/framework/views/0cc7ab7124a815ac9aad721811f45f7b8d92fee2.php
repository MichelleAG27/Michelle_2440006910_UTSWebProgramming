<?php $__env->startSection('konten'); ?>
    <div class="container">
        <h5 class="card-title">Book Detail</h5><br>
            <img src="<?php echo e(asset('storage/img/'.$book->image)); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Title    : <?php echo e($book->title); ?></h5><br>
                    <h5 class="card-title">Author   : <?php echo e($book->author); ?></h5><br>
                    <h5 class="card-title">Publisher: <?php echo e($book->publisher->name); ?></h5><br>
                    <h5 class="card-title">Year     : <?php echo e($book->year); ?></h5><br>
                    <h5 class="card-title">Synopsis : </h5>
                    <h5 class="card-title"><?php echo e($book->synopsis); ?></h5><br>
                 </div>
     </div>
    <br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Semester 5\UTS\Jawaban\WebProgramming\2440006910_MichelleAngelaG_UTSWebProgramming\resources\views/detail.blade.php ENDPATH**/ ?>