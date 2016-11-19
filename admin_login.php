<html>
<head>
    <title>eatFresh | Inspiring healthier habits</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Adding bootstrap files -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Script for bootstrap modal -->
    <script>
        $(document).ready(function(){
            $("#myBtn").click(function(){
                $("#myModal").modal();
            });
        });
    </script>
</head>
<body>
<?php
//Alerts to show various messages
if(isset($_REQUEST['q'])) {
    if($_REQUEST['q'] == 1) {
        ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <center>Sorry, we couldn't find an account with that email</center>
        </div>
        <?php
    }
    if($_REQUEST['q'] == 2) {
        ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <center>Account with entered email already exists!</center>
        </div>
        <?php
    }
    if($_REQUEST['q'] == 3) {
        ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <center>Account created</center>
        </div>
        <?php
    }
    if($_REQUEST['q'] == 4) {
        ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <center>Password and confirm password should match!</center>
        </div>
        <?php
    }
    if($_REQUEST['q'] == 5) {
        ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <center>Your password has been changed successfully</center>
        </div>
        <?php
    }
    if($_REQUEST['q'] == 6) {
        ?>
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <center>You have successfully logged off</center>
        </div>
        <?php
    }
}
?>
<br><br><br><br>
<div class="form-group col-md-4"></div>
<div class="form-group col-md-4">
    <div class="well">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <center><h2>Admin Login</h2></center>
            </div>
        </div>
        <form action="admin_login_action.php" method="get">
            <div class="row" style="padding: 25px">
                <input type="text" class="form-control" name="email" placeholder="Email" required>
            </div>

            <div class="row" style="padding: 25px">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <br>
            <div class="row"style="padding: 20px">
                <button type="submit"class="btn btn-block btn-primary">Login</button>
            </div>
        </form>
        <a data-toggle="modal" data-target="#myModal" id="myBtn2">Need an account?</a>
        <a href="admin_forgot_password.php"style="float:right">Forgot password?</a>
    </div>
</div>
<!-- Modal to create account for new user -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <center><h2>Sign up</h2></center>
                </div>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
                <form action="admin_create.php" method="get">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>First name</label>
                            <input type="text" class="form-control" name="firstname"required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Last name</label>
                            <input type="text" class="form-control" name="lastname" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email"required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Password</label>
                            <input type="password" class="form-control" id="password" name="password"required minlength="6">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Confirm password</label>
                            <input type="password" class="form-control" name="confirm_password" id="confirm_password" minlength="6">
                        </div>
                        <!-- Script to check password and confirm_password match -->
                        <script>
                        $('#password, #confirm_password').on('keyup', function () {
                            if ($('#password').val() == $('#confirm_password').val()) {
                                $('#message').html('').css('color', 'green');
                            } else
                                $('#message').html('Error: passwords should match').css('color', 'red');
                        });
                        </script>
                    </div>
                     <div class="row">
                         <div class="form-group col-md-12">
                             <span id='message'></span>
                         </div>
                     </div>
                     <div class="row">
                         <div class="form-group col-md-12">
                             <label>Security question</label>
                             <select class="form-control"name="security_question">
                                 <option>In what city or town your mother and father meet?</option>
                                 <option>What is the middle name of your oldest child?</option>
                                 <option>What was your childhood nickname?</option>
                                 <option>What was your favorite sport in high school?</option>
                                 <option>What was your favorite food as a child?</option>
                                 <option>What was the make and model of your first car?</option>
                             </select>
                         </div>
                     </div>
                     <div class="row">
                         <div class="form-group col-md-12">
                             <label>Answer to security question</label>
                             <input type="text" class="form-control" required name="security_answer">
                         </div>
                     </div>
                     <br>
                    <button type="submit"class="btn btn-block btn-primary">Create account</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
