<?php $__env->startSection('content'); ?>


    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-heading">
            <h2 style="text-align: center;">All Group Themes</h2>
            <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
        </div>
        <div class="panel-body no-padding" style="display: block;">
            <table class="table table-striped">
                <thead>
                <tr class="warning">
                    <th>#</th>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Files</th>
                    <th>Status</th>
                    <th>Show/hide</th>
                    <th>Edit</th>
                    <th>Delete</th>


                </tr>
                </thead>
                <tbody>

                <?php $__currentLoopData = $themes->themes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <td>#</td>
                        <td><?php echo e($theme->date); ?></td>
                        <td><?php echo e($theme->name); ?></td>
                        <td><?php echo e($theme->description); ?></td>

                        <td>


                            <?php $__currentLoopData = $theme->files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                Slides: <a href="<?php echo e(route('download', $file->slides)); ?>">Download</a><br>
                            File: <a href="<?php echo e(route('download', $file->file)); ?>">Download</a><br><br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </td>
                        <td><?php echo e($theme->status); ?></td>

                        <?php if($theme->status == 'show'): ?>
                            <td>
                                <form method="post" action="<?php echo e(route('hide', $theme->id)); ?>">
                                    <?php echo e(csrf_field()); ?>

                                <input type="hidden" name="hide" value="hidden">
                                <button href="<?php echo e(route('hide', $file->id)); ?>"  class="btn btn-success">Hide</button>
                                </form>
                            </td>

                            <?php else: ?>
                            <td>

                                <form method="post" action="<?php echo e(route('show', $theme->id)); ?>">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" name="show" value="show">
                                    <button href="<?php echo e(route('show', $file->id)); ?>"  class="btn btn-success">Show</button>
                                </form>

                            </td>
                        <?php endif; ?>

                        <td><a href="<?php echo e(route('edit_theme', $theme->id)); ?>" class="btn btn-warning">Edit</a></td>
                        <td><a href="<?php echo e(route('edit_group', $theme->id)); ?>" class="btn btn-danger">Delete</a></td>

                    </tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>
        </div>
    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>