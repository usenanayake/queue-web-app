<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--    Head-->
    <?php include 'common/head.php' ?>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
</head>
<body>
<div class="app" id="app">
    <div class="center-block w-xxl w-auto-xs p-y-md">
        <div class="navbar">
            <div class="pull-center">
                <a class="navbar-brand">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="24" height="24">
                        <path d="M 4 4 L 44 4 L 44 44 Z" fill="#3F51B5"></path>
                        <path d="M 4 4 L 34 4 L 24 24 Z" fill="rgba(0,0,0,0.15)"></path>
                        <path d="M 4 4 L 24 4 L 4  44 Z" fill="#2196F3"></path>
                    </svg>
                    <img src="<?php echo base_url() ?>assets/images/logo.png" alt="." class="hide"> <span
                            class="hidden-folded inline">Queue</span></a>
            </div>
        </div>
        <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
            <div class="m-b text-sm">
                Sign in with your Queue Account
            </div>
            <form name="form">
                <div class="md-form-group float-label">
                    <input type="text" class="md-input" required>
                    <label>Username</label>
                </div>
                <div class="md-form-group float-label">
                    <input type="password" class="md-input" required>
                    <label>Password</label>
                </div>
                <div class="m-b-md">
                    <label class="md-check">
                        <input type="checkbox"><i class="primary"></i> Keep me signed in
                    </label>
                </div>
                <button type="submit" class="btn primary btn-block p-x-md">Sign in</button>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                        ×
                    </button>
                    <span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;{{errorMsg}}
                </div>
            </form>
        </div>

        <div class="p-v-lg text-center">
            <div class="m-b"><a ui-sref="access.forgot-password" href="forgot-password.html" class="text-primary _600">Forgot
                    password?</a></div>
        </div>
    </div>
</div>
<!--Foot-->
<?php include 'common/foot.php' ?>
</body>
</html>