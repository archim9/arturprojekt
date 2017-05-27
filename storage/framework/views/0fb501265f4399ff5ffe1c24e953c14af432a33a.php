<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
            <!-- Formularz -->
 
                <?php echo Form::open(['url'=>'videos', 'class'=>'form-horizontal']); ?>


                <?php echo $__env->make('videos.form_errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->make('videos.form',['buttonText'=>'Dodaj film'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <?php echo Form::close(); ?>    

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>