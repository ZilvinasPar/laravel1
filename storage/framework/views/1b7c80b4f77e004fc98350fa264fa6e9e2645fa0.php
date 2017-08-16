<?php $__env->startSection('content'); ?>

    <div class="grid-form">
        <div class="grid-form1">
            <h3 style="text-align: center;" id="forms-example" class="">Update files</h3>
            <form method="post" action="<?php echo e(route('add_new_file')); ?>" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>


                <label for="exampleInputEmail1">Select theme name:</label>
                <div class="col-lg-12 form-group2 group-mail">

                    <select name="theme_name">
                            <?php $__currentLoopData = $themes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($theme->id); ?>"><?php echo e($theme->name); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>



                <div class="form-group">
                    <label for="exampleInputEmail1">Slides:</label>
                    <input type="file" name="slides"  id="exampleInputEmail1" placeholder="">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Teaching files:</label>
                    <input type="file" name="teaching_files"  id="exampleInputEmail1" placeholder="">
                </div>

                <input type="submit" class="btn btn-default" value="Add File">
            </form>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>