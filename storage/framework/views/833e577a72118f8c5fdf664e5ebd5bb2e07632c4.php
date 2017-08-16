<?php $__env->startSection('content'); ?>

    <div class="grid-form">
        <div class="grid-form1">
            <h3 style="text-align: center;" id="forms-example" class="">Add new group</h3>
            <form method="post">
                <?php echo e(csrf_field()); ?>





                <div class="form-group">
                    <label for="exampleInputEmail1">Date</label>
                    <input type="text" name="date" class="form-control" id="exampleInputEmail1" value="<?php echo e($editTheme->date); ?>">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="<?php echo e($editTheme->name); ?>">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputEmail1" value="<?php echo e($editTheme->description); ?>">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Slides:</label>
                    <input type="file" name="slides"  id="exampleInputEmail1" placeholder="">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Teaching files:</label>
                    <input type="file" name="teaching_files"  id="exampleInputEmail1" placeholder="">
                </div>



                <input type="submit" class="btn btn-default" value="Edit Group">
            </form>
        </div>
    </div>


    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>