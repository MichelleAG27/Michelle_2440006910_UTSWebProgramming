<?php $__env->startSection('konten'); ?>
    <div class="container">
        <h5 class="card-title">Book List</h5><br>
        <div class="row">
            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo e(asset('storage/img/'.$book->image)); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($book->title); ?></h5>
                            <p class="card-text">by</p>
                            <p class="card-text"><?php echo e($book->author); ?></p>
                            <a href="<?php echo e(url('detail', ['id'=>$book->id])); ?>" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <br>
        </div>
    </div>
    <br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Semester 5\UTS\Jawaban\WebProgramming\2440006910_MichelleAngelaG_UTSWebProgramming\resources\views/home.blade.php ENDPATH**/ ?>