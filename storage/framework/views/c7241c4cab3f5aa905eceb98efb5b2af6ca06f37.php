<?php $__env->startSection('content'); ?>





    <div class="grid-form">
        <div class="grid-form1">
            <h3 style="text-align: center;" id="forms-example" class="">Edit course</h3>
            <form method="post">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <label for="exampleInputEmail1">Course name</label>
                    <input type="text" name="edit_course_name" class="form-control" id="exampleInputEmail1" value="<?php echo e($course->course_name); ?>">
                </div>


                <input type="submit" class="btn btn-default" value="Edit Course">
            </form>
        </div>
    </div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>