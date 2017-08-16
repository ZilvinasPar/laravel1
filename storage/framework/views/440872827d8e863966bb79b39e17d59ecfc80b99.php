<?php $__env->startSection('content'); ?>


    <div class="grid-form">
        <div class="grid-form1">
            <h3 style="text-align: center;" id="forms-example" class="">Add new course</h3>
            <form method="post">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <label for="exampleInputEmail1">Course name</label>
                    <input type="text" name="course_name" class="form-control" id="exampleInputEmail1" placeholder="Course name">
                </div>


                <input type="submit" class="btn btn-default" value="Add Course">
            </form>
        </div>
        </div>


    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>