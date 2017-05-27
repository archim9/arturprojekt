<?php $__env->startSection('content'); ?>

<div class="videos-header card">
    <h2>Najnowsze filmy</h2>
</div>
<div class="row">

    <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <!-- Single video -->
    <div class="col-xs-12 col-md-6 col-lg-4 single-video">
        <div class="card">
        
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="<?php echo e($video->url); ?>" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="card-content">
                <a href="<?php echo e(url('videos', $video->id)); ?>">
                    <h4><?php echo e($video->title); ?></h4>
                </a>
                <p><?php echo e($video->description); ?></p>
                <span class="upper-label">Dodał</span>
                <span class="video-author"><?php echo e($video->user->name); ?></span>
            </div>
            
        </div>
    </div>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>