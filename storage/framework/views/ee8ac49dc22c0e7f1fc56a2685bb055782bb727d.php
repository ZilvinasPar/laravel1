<?php $__env->startSection('content'); ?>


    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-heading">
            <h2 style="text-align: center;">All Users</h2>
            <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
        </div>
        <div class="panel-body no-padding" style="display: block;">
            <table class="table table-striped">
                <thead>
                <tr class="warning">
                    <th>#</th>
                    <th>User Name</th>
                    <th>Last Name</th>
                    <th>E-mail</th>
                    <th>Phone number</th>
                    <th>Status</th>
                    <th>User role</th>

                </tr>
                </thead>
                <tbody>

                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>#</td>
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->surname); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->phone_number); ?></td>
                        <td><?php echo e($user->status); ?></td>
                        <td><?php echo e($user->user_role); ?></td>

                    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>
        </div>
    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>