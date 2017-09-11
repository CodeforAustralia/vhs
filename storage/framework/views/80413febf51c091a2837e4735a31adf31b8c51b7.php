<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="quick-escape_wrapper">
                    <button type="button" class="btn btn-danger">Quick<br/>Escape</button>
                </div>
                <div class="welcome-banner">
                    <h3><?php echo e($message); ?> <?php echo e(Auth::user()->firstName); ?></h3>
                </div>
                <div class="dashboard_notifications">
                    <p>Your Application for the Victorian Housing Register is being reviewed.</p>
                    <p>You have <strong>1 new letter</strong>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-wrapper tools-wrapper">
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="toolbox-banner col-md-8 col-xs-6">
                <h3>Tools</h3>
            </div>
            <div class="toolbox-banner manage-profiles_link"><br/>
                <p><i class="fa fa-cog" aria-hidden="true"></i> Manage Profile</p>
            </div>
            <div class="row toolbox-row">
                <div class="col-md-12 col-xs-12 col-lg-12 tool-box">
                    <a href="/letters"><i class="fa fa-envelope-o" aria-hidden="true"></i>Mail</a>
                </div>
            </div>
            <div class="row toolbox_half-row">
                <div class="tool-box_half col-xs-12">
                    <!-- <a href="/upload">Upload</a> -->
                    <?php if( Auth::user()->usertype == '1' ): ?>
                        <a href="/accounts">Account Details</a>
                    <?php else: ?> 
                    <a href="/accountdetails/<?php echo e(Auth::user()->id); ?>">Account Details</a>
                    <?php endif; ?>
                </div>
                <div class="tool-box_half col-xs-12">
                    <a href="/status">Status</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-wrapper recommended_links-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="recommended_links-banner">
                    <h3>Recommended Links</h3>
                </div>
                <div>
                   <p>Looking into private rental? <a href="#">Learn more about VHS Bonding Assistance.</a></p>
                   <p>Need advice and support? <a href="#">Find a service provider near you</a></p>
                   <p><a href="#">Nearest Housing Office</a></p>
               </div>
           </div>
       </div>
   </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>