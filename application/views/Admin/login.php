<html>
    <head>
        <?php require_once ('assets/html_head_links.php'); ?>
    </head>

    <body style="background-image: url('https://i.makeagif.com/media/5-16-2018/WIKVPz.gif'); background-size: 100%; 
          filter: alpha(opacity=60);  opacity: 0.9;" >
          <?php if ($this->session->flashdata('login_failed')) { ?>

            <div class="alert alert-danger container fadout"  style="margin-top: 20px;">
                <strong>Login failed!</strong> Username/Password Invalid.
            </div>


        <?php } ?>

        <?php if ($this->session->flashdata('sign_up')) { ?>

            <div class="alert alert-success container fadout"  style="margin-top: 20px; ">
                <strong>Success!</strong> SignUp Successfully.
            </div>


        <?php } ?>

        <?php echo form_open('Admin/index') ?>
        <div class="container">
            <div style="margin-top: 10%">
                <div class="well well-sm"><strong>Login</strong></div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon"><button type="button"  onclick="myFunction()"><i class="fa fa-users"></button></i></span>

                            <?php echo form_input(['class' => 'form-control', 'placeholder' => 'Username', 'name' => 'username', 'value' => set_value('username')]); ?>
                            <span style="color:red"><?php echo form_error('username'); ?></span>
                        </div><BR>
                        <div class="input-group">

                            <span class="input-group-addon"><button type="button"  onclick="myFunction()"><i class="fa fa-eye"></i></button></span>

                            <?php echo form_password(['class' => 'form-control', 'placeholder' => 'Password', 'name' => 'password', 'value' => set_value('password'), 'id' => 'myInput']); ?>
                            <span style="color:red"><?php echo form_error('password'); ?></span>
                        </div>
                        <br>
                        <div>
                            <?php echo form_submit(['type' => 'submit', 'class' => 'btn btn-success btn-lg', 'value' => 'Login']); ?> &nbsp;
                            <?php echo form_reset(['type' => 'reset', 'class' => 'btn btn-default btn-lg', 'value' => 'Reset']); ?>&nbsp;
                            <a href="<?php echo site_url('Default_controller/signUp'); ?>" class="btn btn-primary btn-lg">SignUp</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <center><span style="font-size:40px; color: #52595f;"><i class="fa fa-4x fa fa-lock" ></i></span></center> 
                    </div>
                </div>
            </div>
        </div>
        <?php echo form_close(); ?>

        <script>
            $('.fadout').delay(5000).fadeOut(300);

            function myFunction() {
                var x = document.getElementById("myInput");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>

    </body>
</html>