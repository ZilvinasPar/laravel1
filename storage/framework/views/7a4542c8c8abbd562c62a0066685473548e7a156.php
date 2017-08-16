<?php $__env->startSection('content'); ?>

    <form method="post">
    <div class="form-group" >
        <label for="tinymce">Address:</label>
        <textarea name="address" id="tinymce" style="height:50px;" cols="30" rows="10"></textarea>
    </div>
        <br>
        <div class="form-group" >
            <label for="tinymce">Administration contacts:</label>
            <textarea name="contacts" id="tinymce" style="height:50px;" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Send">
        </div>
    </form>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>