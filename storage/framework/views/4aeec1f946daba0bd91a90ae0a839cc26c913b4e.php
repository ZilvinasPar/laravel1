<?php $__env->startSection('content'); ?>

    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-heading">
            <h2 style="text-align: center;">Students</h2>
            <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
        </div>
        <div class="panel-body no-padding" style="display: block;">
            <table class="table table-striped">
                <thead>
                <tr class="warning">
                    <th>#</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>E-mail</th>
                    <th>Phone number</th>
                    <th>Edit student</th>
                    <th>Delete student</th>

                </tr>
                </thead>
                <tbody>

                    <?php $__currentLoopData = $group->students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>#</td>
                        <td><?php echo e($student->name); ?></td>
                        <td><?php echo e($student->surname); ?></td>
                        <td><?php echo e($student->email); ?></td>
                        <td><?php echo e($student->phone_number); ?></td>
                        <td><a href="" class="btn btn-default">Edit</a></td>
                        <td><a href="" class="btn btn-danger">Delete</a></td>

                    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>