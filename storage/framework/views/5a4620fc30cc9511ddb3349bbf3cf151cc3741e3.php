<?php $__env->startSection('content'); ?>




    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-heading">
            <h2 style="text-align: center;"><?php echo e($themes->course_name); ?> - Themes</h2>
            <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
        </div>
        <div class="panel-body no-padding" style="display: block;">
            <table class="table table-striped">
                <thead>
                <tr class="warning">
                    <th>#</th>
                    <th>Theme Name</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Files</th>



                </tr>
                </thead>
                <tbody>


                <?php $__currentLoopData = $themes->themes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($theme->status == 'show'): ?>

                    <tr>
                        <td><?php echo e($theme->id); ?></td>
                        <td><?php echo e($theme->name); ?></td>
                        <td><?php echo e($theme->date); ?></td>
                        <td><?php echo e($theme->description); ?></td>
                        <td>


                            <?php $__currentLoopData = $theme->files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                Slides: <a href="<?php echo e(route('downloading', $file->slides)); ?>">Download</a><br>
                                File: <a href="<?php echo e(route('downloading', $file->file)); ?>">Download</a><br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </td>


                    </tr>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>
        </div>
    </div>


    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>