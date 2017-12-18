<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--    Head-->
    <?php include 'common/head.php' ?>
</head>
<body>
<div class="app" id="app">
    <div class="center-block w-xxl w-auto-xs p-y-md">
        <div class="navbar">
            <div class="pull-center">
                <a class="navbar-brand">
                    <div ui-include="'<?php echo base_url() ?>assets/images/logo.svg'"></div>
                    <img src="<?php echo base_url() ?>assets/images/logo.png" alt="." class="hide">
                    <span class="hidden-folded inline">Queue</span>
                </a>
            </div>
        </div>
        <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
            <div class="m-b text-sm">
                Sign in with your Queue Account
            </div>
            <form name="form" action="<?php echo site_url('Login/signin'); ?>" method="post">
                <div class="md-form-group float-label">
                    <input type="text" class="md-input" name="username" required>
                    <label>Username</label>
                </div>
                <div class="md-form-group float-label">
                    <input type="password" class="md-input" name="password" required>
                    <label>Password</label>
                </div>
<!--                <div class="m-b-md">-->
<!--                    <label class="md-check">-->
<!--                        <input type="checkbox" name="keepsigned"><i class="primary"></i> Keep me signed in-->
<!--                    </label>-->
<!--                </div>-->
                <button type="submit" class="btn primary btn-block p-x-md">Sign in</button>
            </form>
        </div>

        <div class="p-v-lg text-center">
            <div class="m-b"><a ui-sref="access.forgot-password" href="forgot-password.html" class="text-primary _600">Forgot password?</a></div>
            <?if($this->session->flashdata('login_msg')):?>
                <p class='flashMsg flashError'> <?=$this->session->flashdata('login_msg')?> </p>
            <?endif?>
        </div>
    </div>
</div>
<!--Foot-->
<?php include 'common/foot.php' ?>
</body>
</html>