<!DOCTYPE html>
<html>

<!-- meta contains meta taga, css and fontawesome icons etc -->
<?php echo $__env->make('admin.common.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- ./end of meta -->

<body class=" hold-transition skin-blue sidebar-mini">
	<!-- wrapper -->
    <div class="wrapper">
    <?php if(request()->segment('5') != 'text'): ?>
   		<!-- header contains top navbar -->
        <?php echo $__env->make('admin.common.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- ./end of header -->
        
        <!-- left sidebar -->
        <?php echo $__env->make('admin.common.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- ./end of left sidebar -->
    <?php endif; ?>
        <!-- dynamic content -->
        <?php echo $__env->yieldContent('content'); ?>
        <!-- ./end of dynamic content -->
        
    <?php if(request()->segment('5') != 'text'): ?>    <!-- right sidebar -->
        <?php echo $__env->make('admin.common.controlsidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- ./right sidebar -->
    	<?php echo $__env->make('admin.common.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
    </div>
	<!-- ./wrapper -->
    <?php if(request()->segment('5') != 'text'): ?> 
	<!-- all js scripts including custom js -->
	<?php echo $__env->make('admin.common.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- ./end of js scripts -->

    <?php echo $__env->yieldContent('script'); ?>
    <?php endif; ?>
    
	</body>
</html>
