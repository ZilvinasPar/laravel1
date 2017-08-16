<?php $__env->startSection('content'); ?>


        <?php if(Auth::user()->user_role != 'teacher'): ?>

    <?php echo e(route('admin')); ?>

    <?php endif; ?>

        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php echo e($course->course_name); ?>


        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>