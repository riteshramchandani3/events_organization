<html>
    <head>
        <?php require_once ('assets/html_head_links.php'); ?>
    </head>

    <body>
        <?php echo form_open('Admin/index') ?>
        <div class="container">
            <div class="panel panel-primary" style="margin-top: 20px;">
                <div class="panel-heading"><h4>Admin Form</h4></div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Username</label>
                            <?php echo form_input(['class' => 'form-control', 'placeholder' => 'Enter username', 'name' => 'username', 'value' => set_value('username')]); ?>
                            <span style="color:red"><?php echo form_error('username'); ?></span>
                        </div>
                        <div class="form-group">
                            <label>Password:</label>
                            <?php echo form_password(['class' => 'form-control', 'placeholder' => 'Enter Password', 'name' => 'password', 'value' => set_value('password')]); ?>
                            <span style="color:red"><?php echo form_error('password'); ?></span>
                        </div>
                        <br>
                        <?php echo form_submit(['type' => 'submit', 'class' => 'btn btn-success', 'value' => 'Login']); ?>
                        <?php echo form_reset(['type' => 'reset', 'class' => 'btn btn-default', 'value' => 'Reset']); ?>
                        <a href="<?php echo site_url('Default_controller/signUp'); ?>" class="btn btn-primary">SignUp</a>
                    </div>
                </div>
            </div>
        </div>
        <?php echo form_close(); ?>
    </body>
</html>