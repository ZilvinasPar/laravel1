<?php $__env->startSection('content'); ?>


    <div class="grid-form">
        <div class="grid-form1">
            <h3 style="text-align: center;" id="forms-example" class="">Add new group</h3>
            <form method="post">
                <?php echo e(csrf_field()); ?>


                <label for="exampleInputEmail1">Select course name:</label>
                <div class="col-lg-12 form-group2 group-mail">

                    <select name="course_name">
            <?php $__currentLoopData = $course_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($course->course_name); ?>"><?php echo e($course->course_name); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>


                <div class="form-group">
                    <label for="exampleInputEmail1">Starting date</label>
                    <input type="text" name="starting_date" class="form-control" id="exampleInputEmail1" placeholder="Starting date">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ending date</label>
                    <input type="text" name="ending_date" class="form-control" id="exampleInputEmail1" placeholder="Ending date">
                </div>


                <input type="submit" class="btn btn-default" value="Edit Group">
            </form>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>